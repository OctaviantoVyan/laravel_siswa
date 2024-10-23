<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrtuController extends Controller
{
    //
    public function index()
    {
        $data_orangtua = \App\Models\orangtua::all();
        // return 'Ini Lokasi List Siswa';
        return view('ortu.index', ['data_ortu' => $data_orangtua]);
    }
}
