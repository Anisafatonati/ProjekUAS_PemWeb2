<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $jabatanData = Jabatan::all();
        return view('pages.blog', compact('jabatanData'));
        // return view('pages.pengurus.form_edit', compact('pengurusData', 'jabatanData'));
    }
}
