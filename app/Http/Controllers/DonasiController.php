<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    function index()
    {
        $donasis = Donasi::get();

        return view('pages.donasi.index', ['donasis' => $donasis]);
    }

    function create()
    {
        return view('pages.donasi.create');
    }

    function store(Request $request)
    {
        $donasis = new Donasi;
        $donasis->tanggal = $request->tanggal;
        $donasis->nominal = $request->nominal;
        $donasis->nama_donatur = $request->nama_donatur;
        $donasis->save();
        return redirect()->to('/donasi')->with('success', 'Data sukses disimpan');
    }

    function show($id)
    {
        $donasis = Donasi::find($id);
        return view('pages.donasi.show', compact('donasis'));
    }


    function formEdit(int $id)
    {
        $donasis = Donasi::find($id);
        return view('pages.donasi.form_edit', compact('donasis'));
    }


    function update($id,Request $request)
    {
        $donasis = Donasi::find($id);
        $donasis->tanggal = $request->tanggal;
        $donasis->nominal = $request->nominal;
        $donasis->nama_donatur = $request->nama_donatur;
        $donasis->save();

        return redirect()->to('/donasi')->with('success', 'Donasi berhasil diperbarui.');
    }

    function delete($id)
    {
        $donasis = Donasi::find($id);
        $donasis->delete();

        return redirect()->to('/donasi')->with('success', 'Donasi berhasil dihapus.');
    }
}
