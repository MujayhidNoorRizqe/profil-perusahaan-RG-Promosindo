<section id="portfolio" class="portfolio section">
    <div class="container">
        <div class="section-title text-center">
            <h2>Portofolio Kami</h2>
            <p>Kumpulan hasil karya terbaik kami dalam bidang desain, percetakan, dan promosi.</p>
        </div>

        <div class="row">
            @forelse ($projects ?? [] as $project)
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <img src="{{ asset('storage/projects/' . $project->thumbnail) }}" alt="{{ $project->judul }}">
                            <div class="overlay">
                                <div class="overlay-content">
                                    <h4>{{ $project->judul }}</h4>
                                    <a href="{{ asset('storage/projects/' . $project->thumbnail) }}" class="lightbox btn btn-main">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                {{-- Jika belum ada project --}}
                <div class="col-12 text-center">
                    <p>Belum ada project yang ditampilkan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<style>
.portfolio {
    padding: 80px 0;
    background: #fff;
}

.section-title h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 15px;
    position: relative;
}

.section-title p {
    color: #777;
    max-width: 600px;
    margin: 0 auto 40px;
}

.portfolio-item {
    position: relative;
    overflow: hidden;
    border-radius: 6px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.portfolio-item:hover {
    transform: translateY(-6px);
}

.portfolio-image img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    border-radius: 6px;
}

.portfolio-image .overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    opacity: 0;
    transition: all 0.3s ease;
}

.portfolio-item:hover .overlay {
    opacity: 1;
}

.overlay-content {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
}

.overlay-content h4 {
    margin-bottom: 12px;
}

.btn-main {
    background: #c4a68a;
    color: #fff;
    padding: 8px 20px;
    border-radius: 4px;
    font-weight: 600;
    text-transform: uppercase;
    transition: 0.3s;
}

.btn-main:hover {
    background: #b49174;
    color: #fff;
}
</style>
