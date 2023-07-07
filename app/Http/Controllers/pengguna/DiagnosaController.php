<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();
        return view('pengguna.diagnosa.index', compact('gejala'));
    }

    public function analisa(Request $request)
    {
        // Jika tidak ada kondisi/jawaban atau kondisi/jawaban kurang dari 2 maka kucing tersebut sehat
        if (empty($request->kondisi) || count($request->kondisi) < 2) {
            // $this->notification('success', 'Sehat', 'Kucing sehat tanpa gejala');
            return redirect(route('pengguna.diagnosa.sehat'));
        }
        // dd($request->kondisi);
        // Pembobotan
        $arbobot = [0, 1, 0.75, 0.5, 0.25];
        $argejala = [];
        $arrCfKombine = [];
        // Perulangan sesuai jumlah kondisi/jawaban
        for ($i = 0; $i < count($request->kondisi); $i++) {
            $arkondisi = explode("_", $request->kondisi[$i]);
            // dd($arkondisi);
            $kondisi[] = ['gejala_id' => $arkondisi[0]];
            // Jika terdapat kondisi pada array
            if (isset($arkondisi[1])) {
                $kepastian[$arkondisi[0]] = $arkondisi[1];
                if (strlen($request->kondisi[$i]) > 1) {
                    $argejala += [$arkondisi[0] => $arkondisi[1]];
                    $penyakits = Penyakit::with(['basis_pengetahuans' => function ($result) use ($kepastian) {
                        $result->with('gejala')->whereIn('gejala_id', array_keys($kepastian));
                    }])->groupBy('id')->orderBy('id')->get();
                }
            }
        }
        // dd(array_keys($kepastian));
        // Perulangan hasil penyakits diatas
        foreach ($penyakits as $penyakit) {
            // Cf Combine diambil dari nilai bobot pakar * bobot pengguna
            foreach ($penyakit->basis_pengetahuans as $bp) {
                $arrCfKombine[$penyakit->id][] = $bp->cf * $arbobot[$kepastian[$bp->gejala_id]];
            }
            // Perulanggan untuk hasil Cf combine diatas
            foreach ($arrCfKombine as $key => $cfKombine) {
                $cfBaru = 0;
                // jumahCf berasal dari total cfKombine
                $jumlahCf = count($cfKombine);
                foreach ($cfKombine as $key2 => $cf) {
                    if (++$key2 == $jumlahCf) {
                        $cfLama = $cfBaru;
                        $cfBaru = $cfLama + $cf * (1 - $cfLama);
                        $cfTotal = $cfBaru;
                    } elseif ($key2 >= 1) {
                        $cfLama = $cfBaru;
                        $cfBaru = $cfLama + $cf * (1 - $cfLama);
                    } else {
                        $cfBaru = $cf[0];
                    }
                }
                // Hasil akhir
                $cfHasil[$key] = $cfTotal;
            }
        }
        arsort(($cfHasil));
        Diagnosa::create([
            'nama_pemilik' => session('biodata')['nama_pemilik'],
            'no_hp' => session('biodata')['no_hp'],
            'alamat' => session('biodata')['alamat'],
            'nama_peliharaan' => session('biodata')['nama_peliharaan'],
            'jekel' => session('biodata')['jekel'],
            'umur' => (session('biodata')['umur']) > 0 ? (session('biodata')['umur']) : null,
            'berat' => (session('biodata')['berat']) > 0 ? (session('biodata')['berat']) : null,
            'suhu' => (session('biodata')['suhu']) > 0 ? (session('biodata')['suhu']) : null,
            'penyakit_id' => array_key_first($cfHasil),
            'presentase' => $cfHasil[array_key_first($cfHasil)]
        ]);
        $gejala = Gejala::all();
        return view('pengguna.diagnosa.analisa', compact('cfHasil', 'penyakits', 'kepastian', 'gejala'));
    }

    public function sehat()
    {
        return view('pengguna.diagnosa.sehat');
    }

    public function reset(Request $request)
    {
        $request->session('biodata')->flush();
        return redirect()->route('pengguna.biodata.index');
    }
}
