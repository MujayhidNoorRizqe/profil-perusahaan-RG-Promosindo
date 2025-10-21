@extends('layouts.main')

@section('title', 'CV. Restu Guru Promosindo')

@section('content')
    {{-- === Hero Section === --}}
    <section id="hero" class="hero-section">
        <div class="hero-slider">
            <div class="slide-item" style="background-image:url('{{ asset('assets/images/hero-bg.jpg') }}');">
                <div class="overlay"></div>
                <div class="hero-content text-center">
                    <h1 class="display-4 text-white fw-bold">Mewujudkan Desain Arsitektur Berkualitas</h1>
                    <p class="text-white-50">Profesional dalam perencanaan, desain, dan konstruksi proyek anda</p>
                    <a href="#projects" class="btn btn-common mt-3">Lihat Portofolio</a>
                </div>
            </div>
        </div>
    </section>

    {{-- === About Section === --}}
    <section id="about" class="section">
        <div class="container text-center">
            <h2 class="section-title">Tentang Kami</h2>
            <p class="lead mt-3">
                CV. Restu Guru Promosindo adalah perusahaan yang bergerak di bidang percetakan, desain, dan promosi.
                Kami berkomitmen memberikan hasil terbaik dengan mengutamakan kualitas dan kepuasan pelanggan.
            </p>
        </div>
    </section>

    {{-- === Services Section === --}}
    <section id="services" class="section bg-light">
        <div class="container text-center">
            <h2 class="section-title">Layanan Kami</h2>
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <i class="fa fa-paint-brush fa-3x mb-3 text-primary"></i>
                        <h5>Desain Grafis</h5>
                        <p>Kami membantu Anda membuat desain menarik untuk kebutuhan bisnis dan promosi.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <i class="fa fa-print fa-3x mb-3 text-primary"></i>
                        <h5>Percetakan</h5>
                        <p>Menyediakan layanan cetak cepat dan berkualitas untuk brosur, banner, kartu nama, dan lainnya.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-box">
                        <i class="fa fa-bullhorn fa-3x mb-3 text-primary"></i>
                        <h5>Promosi</h5>
                        <p>Kami bantu meningkatkan visibilitas merek Anda dengan strategi promosi yang efektif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- === Projects Section === --}}
    <section id="projects" class="section">
        <div class="container text-center">
            <h2 class="section-title">Portofolio Kami</h2>
            <div class="portfolio-grid mt-4">
                {{-- Nanti ini bisa dinamis dari database --}}
                <div class="row g-4">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/project-1.jpg') }}" class="img-fluid rounded" alt="Project 1">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/project-2.jpg') }}" class="img-fluid rounded" alt="Project 2">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/project-3.jpg') }}" class="img-fluid rounded" alt="Project 3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- === Contact Section === --}}
    <section id="contact" class="section bg-dark text-white">
        <div class="container text-center">
            <h2 class="section-title text-white">Hubungi Kami</h2>
            <p class="text-white-50 mb-4">Ada pertanyaan atau ingin bekerja sama? Silakan hubungi kami melalui form di bawah ini.</p>
            <form class="contact-form mx-auto" style="max-width:600px;">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama Anda">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="5" placeholder="Pesan Anda"></textarea>
                </div>
                <button type="submit" class="btn btn-common">Kirim Pesan</button>
            </form>
        </div>
    </section>
@endsection