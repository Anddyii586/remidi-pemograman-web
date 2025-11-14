{{-- HALAMAN ABOUT --}}

@extends('layouts.main')

@section('title', 'About')

@section('content')

<div class="container mt-4">

    <h1 class="mb-4 text-center">About Us</h1>

    <div class="row justify-content-center">

        {{-- FOTO PROFIL 1 --}}
        <div class="col-md-4 text-center mb-4">
            <img src="/img/2.jfif" 
                 alt="Profile 1"
                 class="rounded-circle mb-3"
                 width="180" height="180"
                 style="object-fit: cover;">
            <h4>Haidir Ali</h4>
            <p>2301040011</p>
        </div>

        {{-- FOTO PROFIL 2 --}}
        <div class="col-md-4 text-center mb-4">
            <img src="/img/se1.jpg" 
                 alt="Profile 2"
                 class="rounded-circle mb-3"
                 width="180" height="180"
                 style="object-fit: cover;">
            <h4>Ahmad Rifandi</h4>
            <p>2301040009</p>
        </div>

    </div>

    <div class="text-center mt-4">
        <p>Aplikasi ini dikembangkan untuk tujuan pembelajaran Laravel.</p>
    </div>

</div>

@endsection
