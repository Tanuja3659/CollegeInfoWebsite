@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Contact Us 📞</h2>
    <p class="text-center text-muted">
        Have questions? Reach out to us and we’ll be happy to help you.
    </p>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card shadow-sm p-4">
                <form>
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>

                    <!-- Message -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Write your message..."></textarea>
                    </div>

                    <!-- Button -->
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Contact Info -->
    <div class="row text-center mt-5">
        <div class="col-md-4">
            <h5>📍 Address</h5>
            <p>123 College Road, Pune, India</p>
        </div>
        <div class="col-md-4">
            <h5>📧 Email</h5>
            <p>info@college.edu</p>
        </div>
        <div class="col-md-4">
            <h5>📞 Phone</h5>
            <p>+91 98765 43210</p>
        </div>
    </div>
</div>
@endsection
