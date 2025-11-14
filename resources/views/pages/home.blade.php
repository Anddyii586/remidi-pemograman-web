@extends('layouts.main')

@section('title', 'Blog Home')

@section('content')
    <h1>My Blog</h1>
{{-- Carousel --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner rounded shadow">
        <div class="carousel-item active">
          <img src="{{ asset('/img/se1.jpg') }}" class="d-block w-100" alt="First slide">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/2.jfif') }}" class="d-block w-100" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/3.jfif') }}" class="d-block w-100" alt="Third slide">
        </div>
      </div>
    </div>

@endsection













