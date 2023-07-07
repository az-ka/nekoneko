<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index()
    {
        $diagnosa = Diagnosa::latest()->get();
        return view('admin.diagnosa.index', compact('diagnosa'));
    }
}
