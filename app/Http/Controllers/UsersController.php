<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index()
    {
        $userData = User::get();
        return view('pages.user.index', ['userData' => $userData]);
    }

    function create()
    {
        return view('pages.user.create');
    }

    function store(Request $request)
    {
        $userData = new User;
        $userData->first_name = $request->first_name;
        $userData->last_name = $request->last_name;
        $userData->email = $request->email;
        $userData->password = $request->password;
        $userData->kondisi_barang = $request->kondisi_barang;
        $userData->save();

        return redirect()->to('/user')
            ->with('success', 'Data user berhasil ditambahkan.');
    }

    function show($id)
    {
        $userData = User::find($id);
        return view('pages.user.show', compact('userData'));
    }

    function formEdit($id)
    {
        $userData = User::find($id);
        return view('pages.user.form_edit', ['userData'=>$userData]);
    }

    function update($id,Request $request)
    {
        $userData = User::find($id);
        $userData->first_name = $request->first_name;
        $userData->last_name = $request->last_name;
        $userData->email = $request->email;
        $userData->password = $request->password;
        $userData->save();

        return redirect()->to('/user')
            ->with('success', 'Data user berhasil diperbarui.');
    }

    function delete($id)
    {
        $userData = User::find($id);
        $userData->delete();

        return redirect()->to('/user')
            ->with('success', 'Data user berhasil dihapus.');
    }
}
