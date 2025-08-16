@extends('layouts.master')

@section('title', 'Courses')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Our Courses 📚</h2>
    <p class="text-center text-muted">
        Explore a wide range of programs designed to prepare you for a successful career.
    </p>

    <div class="row g-4 mt-4">
        <!-- Computer Science -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/computer.png') }}" class="card-img-top" alt="Computer Science">
                <div class="card-body">
                    <h5 class="card-title">Computer Science and Engineering</h5>
                    <p class="card-text">
                        Learn programming, data structures, web technologies, and AI to build a strong IT career.
                    </p>
                </div>
            </div>
        </div>

        <!-- Civil Engineering -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/Civil.png') }}" class="card-img-top" alt="Civil Engineering">
                <div class="card-body">
                    <h5 class="card-title">Civil Engineering</h5>
                    <p class="card-text">
                        Civil engineering is a branch of engineering that focuses on the design, construction, and maintenance of infrastructure projects like roads, bridges, buildings, and water systems. 
                    </p>
                </div>
            </div>
        </div>

        <!-- eletronics engineering-->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/eletronics.png') }}" class="card-img-top" alt="Arts & Humanities">
                <div class="card-body">
                    <h5 class="card-title">Electronic Engineering</h5>
                    <p class="card-text">
                        Electronics engineering is a field focused on designing, developing, and testing electronic circuits and systems. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
