<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $data = Golongan::get();
        return view('golongan.index', compact('data'));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        $data['gol_kode']      = $request->gol_kode;
        $data['gol_nama']       = $request->gol_nama;


        Golongan::create($data);
        return redirect()->route('gol_view');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = Golongan::find($id);
        return view('golongan.edit', compact('data'));
    }

   public function update(Request $request, string $id)
    {
    $request->validate([
        'gol_kode' => 'required',
        'gol_nama' => 'required',
    ]);

    $golongan = Golongan::findOrFail($id);
    $golongan->update($request->all());

    return redirect()->route('gol_view');
    }


    public function destroy(string $id)
    {
        $data = Golongan::find($id);
        $data->delete();
        return redirect()->route('gol_view');
    }
}