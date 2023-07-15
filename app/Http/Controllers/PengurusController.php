<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurusData = Pengurus::get();
        return view('pages.pengurus.index', ['pengurusData' => $pengurusData]);
    }

    public function create()
    {
        $jabatanData = Jabatan::all();
        $pengurusData = new Pengurus();
        return view('pages.pengurus.create', compact('jabatanData', 'pengurusData'));
    }
    

    public function store(Request $request)
    {
        $pengurusData = new Pengurus;
        $pengurusData->nama_pengurus = $request->nama_pengurus;
        $pengurusData->kode_pengurus = $request->kode_pengurus;
        $pengurusData->jabatan_id = $request->jabatan_id;
        $pengurusData->kontak = $request->kontak;
        $pengurusData->save();

        return redirect('/pengurus')
            ->with('success', 'Data pengurus berhasil ditambahkan.');
    }

    public function show($id)
    {
        $jabatanData = Jabatan::get();
        $pengurusData = Pengurus::findOrFail($id);
        return view('pages.pengurus.show', compact('jabatanData','pengurusData'));
    }

    public function formEdit($id)
    {
        $jabatanData = Jabatan::get();
        $pengurusData = Pengurus::findOrFail($id);
        return view('pages.pengurus.form_edit', compact('pengurusData', 'jabatanData'));
    }    

    public function update(Request $request, $id)
    {
        $pengurusData = Pengurus::find($id);
        $pengurusData->nama_pengurus = $request->nama_pengurus;
        $pengurusData->kode_pengurus = $request->kode_pengurus;
        $pengurusData->jabatan_id = $request->jabatan_id;
        $pengurusData->kontak = $request->kontak;
        $pengurusData->save();

        return redirect('/pengurus')
            ->with('success', 'Data pengurus berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pengurusData = Pengurus::find($id);
        $pengurusData->delete();

        return redirect('/pengurus')
            ->with('success', 'Data pengurus berhasil dihapus.');
    }
}
