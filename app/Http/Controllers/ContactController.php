<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $donasis = Donasi::all();
        return view('pages.contact', compact('donasis'));
        // return view('pages.pengurus.form_edit', compact('pengurusData', 'jabatanData'));
    }

    function create()
    {
        return view('pages.create');
    }

}
