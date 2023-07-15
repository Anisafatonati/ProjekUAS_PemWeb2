<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    function index()
    {
        $jabatanData = Jabatan::get();
        return view('pages.jabatan.index', ['jabatanData' => $jabatanData]);
    }

    function create()
    {
        return view('pages.jabatan.create');
    }

    function store(Request $request)
    {
        $jabatanData = new Jabatan;
        $jabatanData->nama_jabatan = $request->nama_jabatan;
        $jabatanData->save();

        return redirect()->to('/jabatan')
            ->with('success', 'Data jabatan berhasil ditambahkan.');
    }

    function show($id)
    {
        $jabatanData =Jabatan::find($id);
        return view('pages.jabatan.show', compact('jabatanData'));
    }

    function formEdit($id)
    {
        $jabatanData = Jabatan::find($id);
        return view('pages.jabatan.form_edit', ['jabatan'=>$jabatanData]);
    }

    function update($id,Request $request)
    {
        $jabatanData = Jabatan::find($id);
        $jabatanData->nama_jabatan = $request->nama_jabatan;
        $jabatanData->save();

        return redirect()->to('/jabatan')
            ->with('success', 'Data jabatan berhasil diperbarui.');
    }

    function delete($id)
    {
        $jabatanData = Jabatan::find($id);
        $jabatanData->delete();

        return redirect()->to('/jabatan')
            ->with('success', 'Data jabatan berhasil dihapus.');
    }
}
