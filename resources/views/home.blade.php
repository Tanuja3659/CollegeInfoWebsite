@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="text-center my-5">
        <h1>Welcome to Our College 🎓</h1>
        <p class="lead">Providing quality education since 1995.</p>

        <!-- Slideshow / Carousel -->
        <div id="collegeCarousel" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 800px;">
            <div class="carousel-inner rounded shadow">
                <!-- First Image -->
                <div class="carousel-item active" data-bs-interval="3000"> 
                    <img src="{{ asset('images/pexels-pixabay-247823.jpg') }}" class="d-block w-100" alt="Campus 1">
                </div>
                <!-- Second Image -->
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('images/campus2.jpg') }}" class="d-block w-100" alt="Campus 2">
                </div>
                <!-- Third Image -->
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('images/campus3.jpg') }}" class="d-block w-100" alt="Campus 3">
                </div>
            </div>
        </div>
    </div>
@endsection
