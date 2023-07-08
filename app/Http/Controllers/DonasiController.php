<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller
{
    function index()
    {
        $donasiData = Donasi::get();
        return view('pages.donasi.index',['donasiData' => $donasiData]);
    }

    function create()
    {
        return view('pages.donasi.create');
    }

    function store(Request $request)
    {
        $donasiData = new Donasi;
        $donasiData->donasi = $request->donasi;
        $donasiData->save();
        return redirect()->to('/donasi')->with('success','data sukses disimpan');
    }

    function formEdit($id)
    {
        $donasiData = Donasi::find($id);
        return view('pages.donasi.form_edit',['donasiData'=>$donasiData]);
    }
}
