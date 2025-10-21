<section id="contact" class="contact section">
    <div class="container">
        <div class="section-title text-center">
            <h2>Kontak Kami</h2>
            <p>Ada pertanyaan atau ingin bekerja sama? Silakan hubungi kami melalui form di bawah ini.</p>
        </div>

        {{-- Notifikasi sukses --}}
        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form method="POST" action="{{ route('contact.send') }}" class="contact-form">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <div class="col-12 text-center mt-3">
                            <button type="submit" class="btn btn-main">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
.contact {
    background: #2e2e2e;
    color: #ddd;
    padding: 80px 0;
}

.section-title h2 {
    color: #fff;
}

.contact-form input,
.contact-form textarea {
    background: #3b3b3b;
    border: none;
    color: #fff;
    padding: 12px 16px;
    width: 100%;
    border-radius: 4px;
}

.contact-form input::placeholder,
.contact-form textarea::placeholder {
    color: #aaa;
}

.contact-form button.btn-main {
    background: #c4a68a;
    color: #fff;
    padding: 12px 28px;
    font-weight: 600;
    border: none;
    border-radius: 4px;
    text-transform: uppercase;
    transition: 0.3s;
}

.contact-form button.btn-main:hover {
    background: #b49174;
}

.alert {
    background: #28a745;
    color: white;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 20px;
}
</style>
