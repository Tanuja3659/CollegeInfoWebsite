@extends('layouts.master')

@section('title', 'About Us')

@section('content')
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Left side: Image -->
        <div class="col-md-5 text-center">
            <img src="{{ asset('images/aboutus.png') }}" 
                 alt="About Our College" 
                 class="img-fluid rounded shadow">
        </div>

        <!-- Right side: Information -->
        <div class="col-md-7">
            <h2 class="mb-3">About Our College</h2>
            <justify>
            <p>
                Established in <strong>1995</strong>, our college has been a center of excellence in higher education 
                for over two decades. We are committed to nurturing talent, fostering innovation, and preparing 
                students for global opportunities.
            </p>
            <p>
                With a diverse range of <strong>undergraduate and postgraduate programs</strong>, our institution 
                emphasizes not only academic learning but also research, skill development, and holistic growth.
            </p>
            <p>
                Our faculty members are highly qualified and dedicated to mentoring students, ensuring they gain 
                both theoretical knowledge and practical exposure.
            </p>
            </justify>
        </div>
    </div>

    <!-- Mission & Vision Section -->
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="p-4 bg-light rounded shadow-sm">
                <h4>🎯 Mission</h4>
                <p>To provide quality education, foster innovation, and empower students to achieve their goals.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 bg-light rounded shadow-sm">
                <h4>🌍 Vision</h4>
                <p>To be a globally recognized institution known for excellence in teaching, research, and 
                   community engagement.</p>
            </div>
        </div>
    </div>
</div>
@endsection
