<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\SiswaController;

class SiswaController extends Controller
{
    //
    public function index(Request $request)


    {
        $data_siswa = \App\Models\siswa::all();
        // return 'Ini Lokasi List Siswa';
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
}
