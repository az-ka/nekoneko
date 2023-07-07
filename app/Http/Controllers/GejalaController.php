<?php

namespace App\Http\Controllers;

use App\Http\Requests\GejalaRequest;
use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        $gejala = Gejala::orderByDesc('id')->get();
        return view('admin.gejala.index', compact('gejala'));
    }

    public function create()
    {
        $generate = Gejala::all()->count();
        if ($generate > 0) {
            $generateId = sprintf("G%03s", ++$generate);
        } else if ($generate == 0) {
            $generateId = "G001";
        }
        return view('admin.gejala.create', compact('generateId'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:2|string'
        ]);

        $data = $request->all();
        Gejala::create($data);
        return redirect(route('admin.gejala.index'));
    }

    public function edit(Gejala $gejala)
    {
        return view('admin.gejala.edit', compact('gejala'));
    }

    public function update(Request $request, Gejala $gejala)
    {
        $this->validate($request, [
            'nama' => 'required|min:2|string'
        ]);

        $data = $request->all();
        $gejala->update($data);

        return redirect(route('admin.gejala.index'));
    }

    public function destroy(Gejala $gejala)
    {
        $gejala->delete();

        return redirect(route('admin.gejala.index'));
    }
}
