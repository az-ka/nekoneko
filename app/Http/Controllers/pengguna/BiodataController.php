<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        return view('pengguna.biodata.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_pemilik'      => 'required',
            'no_hp'             => 'required',
            'alamat'            => 'required',
            'nama_peliharaan'   => 'required',
            'jekel'             => 'required',
        ]);
        // dd($request);
        Session([
            'biodata' => [
                'nama_pemilik' => $request->nama_pemilik,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'nama_peliharaan' => $request->nama_peliharaan,
                'jekel' => $request->jekel,
                'umur' => $request->umur,
                'berat' => $request->berat,
                'suhu' => $request->suhu
            ]
        ]);
        return redirect()->route('pengguna.diagnosa.index');
    }
}
