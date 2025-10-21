<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold" href="{{ url('/admin/projects') }}">
                🖨️ CV. Restu Guru Promosindo
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="{{ route('projects.index') }}" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="{{ route('services.index') }}" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link">Posts</a></li>
                    <li class="nav-item"><a href="{{ route('contacts.index') }}" class="nav-link">Contacts</a></li>
                    <li class="nav-item"><a href="{{ route('settings.index') }}" class="nav-link">Settings</a></li>
                </ul>

                <!-- Tombol Logout di kanan -->
                <form method="POST" action="{{ route('logout') }}" class="d-flex">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="container mb-5">
        @if(session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-muted small py-3">
        © {{ date('Y') }} CV. Restu Guru Promosindo
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>