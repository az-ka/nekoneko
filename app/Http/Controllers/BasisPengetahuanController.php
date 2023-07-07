<?php

namespace App\Http\Controllers;

use App\Models\BasisPengetahuan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class BasisPengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bp = BasisPengetahuan::with(['gejala', 'penyakit'])->latest()->get();
        return view('admin.bp.index', compact('bp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gejala = Gejala::select('id', 'nama')->get();
        $penyakit = Penyakit::select('id', 'nama')->get();
        return view('admin.bp.create', compact('gejala', 'penyakit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gejala_id' => 'required',
            'penyakit_id' => 'required',
            'cf' => 'required',
        ]);

        $data = $request->all();
        BasisPengetahuan::create($data);

        return redirect(route('admin.bp.index'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BasisPengetahuan $bp)
    {
        $gejala = Gejala::select('id', 'nama')->get();
        $penyakit = Penyakit::select('id', 'nama')->get();
        return view('admin.bp.edit', compact('bp', 'gejala', 'penyakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BasisPengetahuan $bp)
    {
        $this->validate($request, [
            'gejala_id' => 'required',
            'penyakit_id' => 'required',
            'cf' => 'required',
        ]);

        $data = $request->all();
        $bp->update($data);
        return redirect(route('admin.bp.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BasisPengetahuan $bp)
    {
        $hapus = $bp->delete();
        return redirect(route('admin.bp.index'));
    }
}
