<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\BukuController;

class BukuController extends Controller
{
    //
    public function index()
    {
        $data_buku = \App\Models\Buku::all();

        // return view('buku.index', compact('data_buku'));
        return view('buku.index', ['data_buku' => $data_buku]);
    }
}
