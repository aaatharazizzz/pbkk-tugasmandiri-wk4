<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');

Route::get('/profil-mahasiswa', [PageController::class, 'profil_mahasiswa'])->name('profil-mahasiswa');

Route::get('/ide-agent', [PageController::class, 'ide_agent'])->name('ide-agent');

