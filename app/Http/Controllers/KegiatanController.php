<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    function index()
    {
        $kegiatanData = Kegiatan::get();
        return view('pages.kegiatan.index', ['kegiatanData' => $kegiatanData]);
    }

    public function create()
{
    $pengurusData = Pengurus::all();
    $kegiatanData = new Kegiatan();
    return view('pages.kegiatan.create', compact('pengurusData', 'kegiatanData'));
}


    function store(Request $request)
    {
        $kegiatanData = new Kegiatan;
        $kegiatanData->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanData->tanggal = $request->tanggal;
        $kegiatanData->pengurus_id = $request->pengurus_id;
        $kegiatanData->save();

        return redirect()->to('/kegiatan')
            ->with('success', 'Data kegiatan berhasil ditambahkan.');
    }

    function show($id)
    {
        $pengurusData = Pengurus::get();
        $kegiatanData = Kegiatan::findOrFail($id);
        return view('pages.kegiatan.show', compact('pengurusData','kegiatanData'));
    }


    public function formEdit($id)
{
    $pengurusData = Pengurus::get();
    $kegiatanData = Kegiatan::findOrFail($id);
    return view('pages.kegiatan.form_edit', compact('pengurusData', 'kegiatanData'));
}


    function update($id,Request $request)
    {
        $kegiatanData = Kegiatan::find($id);
        $kegiatanData->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanData->tanggal = $request->tanggal;
        $kegiatanData->pengurus_id = $request->pengurus_id;
        $kegiatanData->save();

        return redirect()->to('/kegiatan')
            ->with('success', 'Data kegiatan berhasil diperbarui.');
    }

    function delete($id)
    {
        $kegiatanData = Kegiatan::find($id);
        $kegiatanData->delete();

        return redirect()->to('/kegiatan')
            ->with('success', 'Data kegiatan berhasil dihapus.');
    }
}
