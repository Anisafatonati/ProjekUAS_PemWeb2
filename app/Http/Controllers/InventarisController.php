<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;
use App\Models\Inventaris;

class InventarisController extends Controller
{
    function index()
    {
        $inventarisData = Inventaris::get();
        return view('pages.inventaris.index', ['inventarisData' => $inventarisData]);
    }

    function create()
    {
        return view('pages.inventaris.create');
    }

    function store(Request $request)
    {
        $inventarisData = new Inventaris;
        $inventarisData->nama_barang = $request->nama_barang;
        $inventarisData->kode = $request->kode;
        $inventarisData->jumlah = $request->jumlah;
        $inventarisData->kondisi_barang = $request->kondisi_barang;
        $inventarisData->save();

        return redirect()->to('/inventaris')
            ->with('success', 'Data inventaris berhasil ditambahkan.');
    }

    function show($id)
    {
        $inventarisData = Inventaris::find($id);
        return view('pages.inventaris.show', compact('inventarisData'));
    }

    function formEdit($id)
    {
        $inventarisData = Inventaris::find($id);
        return view('pages.inventaris.form_edit', ['inventarisData'=>$inventarisData]);
    }

    function update($id,Request $request)
    {
        $inventarisData = Inventaris::find($id);
        $inventarisData->nama_barang = $request->nama_barang;
        $inventarisData->kode = $request->kode;
        $inventarisData->jumlah = $request->jumlah;
        $inventarisData->kondisi_barang = $request->kondisi_barang;
        $inventarisData->save();

        return redirect()->to('/inventaris')
            ->with('success', 'Data inventaris berhasil diperbarui.');
    }

    function delete($id)
    {
        $inventarisData = Inventaris::find($id);
        $inventarisData->delete();

        return redirect()->to('/inventaris')
            ->with('success', 'Data inventaris berhasil dihapus.');
    }
}
