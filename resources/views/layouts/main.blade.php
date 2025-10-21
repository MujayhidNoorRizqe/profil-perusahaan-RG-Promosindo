<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO dasar --}}
    <title>@yield('title', 'CV. Restu Guru Promosindo')</title>
    <meta name="description" content="@yield('meta_description', 'Profil perusahaan & portofolio CV. Restu Guru Promosindo')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">

    {{-- Preload font dan koneksi awal untuk performa --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Font optional (dari template Archi) --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- CSS utama template --}}
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Slot CSS tambahan (jika ada halaman khusus) --}}
    @stack('styles')
</head>

<body>
    {{-- Loader (dari template, tidak wajib tapi biar animasi awal tampil) --}}
    <div id="loader">
        <img src="{{ asset('assets/css/ajax-loader.gif') }}" alt="Loading..." />
    </div>

    {{-- Wrapper utama --}}
    <div id="wrapper">
        {{-- Semua konten halaman frontend akan dimuat di sini --}}
        @yield('content')
    </div>

    {{-- =============================== --}}
    {{-- === JAVASCRIPT SECTION === --}}
    {{-- =============================== --}}

    {{-- Urutan penting agar plugin template berjalan normal --}}
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/ui-easing.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    {{-- Slot untuk JS tambahan halaman tertentu --}}
    @stack('scripts')
</body>
</html>