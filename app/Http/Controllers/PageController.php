<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function beranda() {
        return view('home');
    }
    function profil_mahasiswa() {
        return view('profil-mahasiswa');
    }
    function ide_agent(Request $request) {
        $mode = $request->query('mode');
        return view('ide-agent', ['mode' => $mode]);
    }
}
