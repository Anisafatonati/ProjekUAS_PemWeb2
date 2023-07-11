<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    function index()
    {
        $pengurusData = Pengurus::get();
        return view('pages.pengurus.index', ['pengurusData' => $pengurusData]);
    }

    function create()
    {
        return view('pages.pengurus.create');
    }

    function store(Request $request)
    {
        $pengurusData = new Pengurus;
        $pengurusData->nama_pengurus = $request->nama_pengurus;
        $pengurusData->kode_pengurus = $request->kode_pengurus;
        $pengurusData->jabatan_id = $request->jabatan_id;
        $pengurusData->kontak = $request->kontak;
        $pengurusData->save();

        return redirect()->to('/pengurus')
            ->with('success', 'Data pengurus berhasil ditambahkan.');
    }

    function show(pengurus $pengurusData)
    {
        return view('pages.pengurus.show', compact('pengurus'));
    }

    function formEdit($id)
    {
        $pengurusData = Pengurus::find($id);
        return view('pages.pengurus.form_edit', ['pengurusData'=>$pengurusData]);
    }

    function update($id,Request $request)
    {
        $pengurusData = Pengurus::find($id);
        $pengurusData->nama_pengurus = $request->nama_pengurus;
        $pengurusData->kode_pengurus = $request->kode_pengurus;
        $pengurusData->jabatan_id = $request->jabatan_id;
        $pengurusData->kontak = $request->kontak;
        $pengurusData->save();

        return redirect()->to('/pengurus')
            ->with('success', 'Data pengurus berhasil diperbarui.');
    }

    function delete($id)
    {
        $pengurusData = Pengurus::find($id);
        $pengurusData->delete();

        return redirect()->to('/pengurus')
            ->with('success', 'Data pengurus berhasil dihapus.');
    }
}
