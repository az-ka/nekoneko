<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = Penyakit::latest()->get();
        return view('pengguna.penyakit.index', compact('penyakit'));
    }

    public function show(Penyakit $penyakit)
    {
        return view('pengguna.penyakit.show', compact('penyakit'));
    }
}
