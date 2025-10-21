<section class="hero-slider" id="home">
    <div class="single-slider" style="background-image:url('{{ asset('assets/images/hero-bg.jpg') }}')">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1>CV. Restu Guru Promosindo</h1>
                        <p>Solusi Percetakan &amp; Promosi yang Kreatif dan Profesional</p>
                        <a href="#about" class="btn btn-main">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tambahkan slide lain jika perlu --}}
    {{-- <div class="single-slider" style="background-image:url('{{ asset('assets/images/hero-2.jpg') }}')">
        ...
    </div> --}}
</section>

<style>
.hero-slider {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}

.single-slider {
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.single-slider::before {
    content: "";
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.45);
}

.hero-content {
    position: relative;
    z-index: 2;
    color: #fff;
}

.hero-content h1 {
    font-size: 3.2rem;
    font-weight: 700;
    text-transform: uppercase;
}

.btn-main {
    background: #c4a68a;
    color: #fff;
    padding: 12px 28px;
    border: none;
    font-weight: 600;
    text-transform: uppercase;
    transition: 0.3s;
    margin-top: 20px;
}

.btn-main:hover {
    background: #b49174;
    color: #fff;
}
</style>
