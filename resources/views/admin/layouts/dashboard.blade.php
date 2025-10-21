<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            width: 240px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            background-color: #212529;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 2px 0 5px rgba(0,0,0,0.2);
        }
        .sidebar-header {
            padding: 20px 15px;
            border-bottom: 1px solid #343a40;
            text-align: center;
        }
        .sidebar-header img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            border: 2px solid #0d6efd;
            cursor: pointer;
            transition: 0.2s;
        }
        .sidebar-header img:hover {
            opacity: 0.8;
            transform: scale(1.05);
        }
        .sidebar-header h5 {
            font-size: 16px;
            margin-bottom: 5px;
        }
        .sidebar-header small {
            font-size: 12px;
            color: #adb5bd;
            word-wrap: break-word;
        }
        .sidebar-menu {
            padding-top: 1rem;
        }
        .sidebar a {
            color: #adb5bd;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            transition: 0.2s;
        }
        .sidebar a:hover,
        .sidebar a.active {
            background-color: #0d6efd;
            color: #fff;
        }
        .logout-form {
            padding: 15px 20px;
            border-top: 1px solid #343a40;
            text-align: center;
        }
        .logout-form button {
            width: 100%;
        }
        .content {
            margin-left: 240px;
            padding: 20px;
        }
        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        footer {
            margin-top: 50px;
            color: #6c757d;
            font-size: 0.9rem;
        }
        .alert {
            border-radius: 5px;
        }
    </style>
</head>
<body>

    {{-- Sidebar --}}
    <div class="sidebar">
        <div>
            {{-- Header User Info --}}
            <div class="sidebar-header">
                {{-- Foto profil bisa diklik --}}
                <div data-bs-toggle="modal" data-bs-target="#changePhotoModal">
                    @if(Auth::user()->profile_picture)
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="User Avatar">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="Default Avatar">
                    @endif
                </div>

                <h5>🖨️ CV. Restu Guru Promosindo</h5>
                @auth
                    <div class="mt-2">
                        <strong>{{ Auth::user()->name }}</strong><br>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                @endauth
            </div>

            {{-- Menu Navigasi --}}
            <div class="sidebar-menu">
                <a href="{{ route('projects.index') }}" class="{{ request()->is('admin/projects*') ? 'active' : '' }}">📁 Projects</a>
                <a href="{{ route('services.index') }}" class="{{ request()->is('admin/services*') ? 'active' : '' }}">⚙️ Services</a>
                <a href="{{ route('posts.index') }}" class="{{ request()->is('admin/posts*') ? 'active' : '' }}">📰 Posts</a>
                <a href="{{ route('contacts.index') }}" class="{{ request()->is('admin/contacts*') ? 'active' : '' }}">✉️ Contacts</a>
                <a href="{{ route('settings.index') }}" class="{{ request()->is('admin/settings*') ? 'active' : '' }}">⚙️ Settings</a>
            </div>
        </div>

        {{-- Tombol Logout di bawah --}}
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
        </form>
    </div>

    {{-- Konten Utama --}}
    <div class="content">
        <nav class="navbar navbar-light mb-4 px-3 shadow-sm">
            <span class="navbar-brand mb-0 h5">@yield('title')</span>
        </nav>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')

        <footer class="text-center mt-5">
            &copy; {{ date('Y') }} CV. Restu Guru Promosindo
        </footer>
    </div>

    {{-- Modal Ubah Foto --}}
    <div class="modal fade" id="changePhotoModal" tabindex="-1" aria-labelledby="changePhotoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="modal-content">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title" id="changePhotoModalLabel">Ganti Foto Profil / Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    @if(Auth::user()->profile_picture)
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" width="100" class="rounded-circle mb-3">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="100" class="rounded-circle mb-3">
                    @endif
                    <input type="file" name="profile_picture" class="form-control" accept="image/*" required>
                    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
