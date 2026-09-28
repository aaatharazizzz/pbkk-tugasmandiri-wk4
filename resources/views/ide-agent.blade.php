@extends('layouts.app')

@if (isset($mode))
    @section('theme', htmlspecialchars($mode))
@endif

@section('title', 'Ide Riset - Profil Akademik Athar')

@section('content')
    <p class="text-4xl">Ide Riset</p>
    <p class="text-2xl">Recruiting and Hiring Agent</p>
    <div class="flex justify-around">
        <div class="text-center">
            <p>
                Analisis Data Screening
            </p>
            <p>AI Agent melakukan analisis data screening dari CV, email, atau form.</p>
        </div>
        <div class="text-center">
            <p>
                AI Ranking
            </p>
            <p>Dari hasil analisis data screening, AI Agent membuat ranking untuk menentukan calon pegawai yang lolos</p>
        </div>
        <div class="text-center">
            <p>
                Pengiriman E-Mail Otomatis
            </p>
            <p>
                AI Agent dapat mengirim hasil kelolosan kepada calon pegawai secara otomatis
            </p>
        </div>
    </div>

    <h1>Form Pengumpulan Ide</h1>
    <form>
        <input type="text" name="name"/>
        <input type="text" name="description"/>
        <input type="submit" value="Submit" />
    </form>
    <x-status-banner type="info" message="Information"/>
    <x-status-banner type="warning" message="Warning"/>
    <x-status-banner type="success" message="Success"/>
    <x-status-banner type="error" message="Error"/>

@endsection
