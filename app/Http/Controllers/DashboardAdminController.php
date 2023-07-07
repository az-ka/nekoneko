<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all()->count();
        $penyakit = Penyakit::all()->count();
        $diagnosa = Diagnosa::select('*')
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();
        $diagnosaAll = Diagnosa::all()->count();
        return view('dashboard', compact('gejala', 'penyakit', 'diagnosa', 'diagnosaAll'));
    }
}
