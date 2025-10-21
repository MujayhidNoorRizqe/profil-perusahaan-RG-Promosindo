<header class="main-header">
    <div class="container">
        <div class="row align-items-center">

            {{-- Logo --}}
            <div class="col-lg-3 col-md-3 col-6">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo CV. Restu Guru Promosindo">
                    </a>
                </div>
            </div>

            {{-- Menu Navigasi --}}
            <div class="col-lg-9 col-md-9 col-6">
                <div class="main-menu">
                    <nav class="navigation">
                        <ul class="nav menu">
                            <li class="current"><a href="#home">Beranda</a></li>
                            <li><a href="#about">Tentang</a></li>
                            <li><a href="#services">Layanan</a></li>
                            <li><a href="#portfolio">Portofolio</a></li>
                            <li><a href="#contact">Kontak</a></li>
                        </ul>
                    </nav>
                    <a href="#" class="mobile-nav-toggle"><span></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
