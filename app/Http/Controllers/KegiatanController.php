<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    function index()
    {
        $kegiatanData = Kegiatan::get();
        return view('pages.kegiatan.index', ['kegiatanData' => $kegiatanData]);
    }

    function create()
    {
        return view('pages.kegiatan.create');
    }

    function store(Request $request)
    {
        $kegiatanData = new Kegiatan;
        $kegiatanData->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanData->tanggal = $request->tanggal;
        $kegiatanData->pengurus = $request->pengurus;
        $kegiatanData->save();

        return redirect()->to('/kegiatan')
            ->with('success', 'Data kegiatan berhasil ditambahkan.');
    }

    function show(kegiatan $kegiatanData)
    {
        return view('pages.kegiatan.show', compact('kegiatan'));
    }

    function formEdit($id)
    {
        $kegiatanData = Kegiatan::find($id);
        return view('pages.kegiatan.form_edit', ['kegiatanData'=>$kegiatanData]);
    }

    function update($id,Request $request)
    {
        $kegiatanData = Kegiatan::find($id);
        $kegiatanData->nama_kegiatan = $request->nama_kegiatan;
        $kegiatanData->tanggal = $request->tanggal;
        $kegiatanData->pengurus = $request->pengurus;
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
