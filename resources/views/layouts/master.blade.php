<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
            <div class="container">
                <!-- Website Name / Logo -->
                <a class="navbar-brand fw-bold" href="/">College Guide 🎓</a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('/')) active @endif" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('about')) active @endif" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('course')) active @endif" href="/course">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Request::is('contact')) active @endif" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 border-top">
        <p class="mb-0">© 2025 College Info Website</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
