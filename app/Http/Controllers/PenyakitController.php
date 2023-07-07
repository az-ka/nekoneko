<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyakit = Penyakit::latest()->get();
        return view('admin.penyakit.index', compact('penyakit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generate = Penyakit::all()->count();
        if ($generate > 0) {
            $generateId = sprintf("P%03s", ++$generate);
        } else if ($generate == 0) {
            $generateId = "P001";
        }
        return view('admin.penyakit.create', compact('generateId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:2|string',
            'deskripsi' => 'required|min:2|string',
            'solusi' => 'required',
            'gambar' => 'file|image|mimes:jpeg,png,jpg'
        ]);

        $file = $request->file('gambar');
        $nama_gambar = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'assets/gambar';
        $file->move($tujuan_upload, $nama_gambar);
        Penyakit::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'solusi' => $request->solusi,
            'gambar' => $nama_gambar
        ]);
        return redirect(route('admin.penyakit.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Penyakit $penyakit)
    {
        return view('admin.penyakit.show', compact('penyakit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyakit $penyakit)
    {
        return view('admin.penyakit.edit', compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penyakit $penyakit)
    {
        $this->validate($request, [
            'nama' => 'required|min:2|string',
            'deskripsi' => 'required|min:2|string',
            'solusi' => 'required',
            'gambar' => 'file|image|mimes:jpeg,png,jpg'
        ]);

        $penyakit->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'solusi' => $request->solusi
        ]);

        if ($request->file('gambar')) {
            File::delete('assets/gambar/' . $penyakit->gambar);
            $gambar = time() . "_" . $request->file('gambar')->getClientOriginalName();
            $directory = 'assets/gambar';
            $request->file('gambar')->move($directory, $gambar);
            $penyakit->update([
                'gambar' => $gambar
            ]);
        }

        return redirect(route('admin.penyakit.show', $penyakit->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyakit $penyakit)
    {
        File::delete('assets/gambar/' . $penyakit->gambar);
        $penyakit->delete();

        return redirect(route('admin.penyakit.index'));
    }
}
