@extends('admin.layouts.dashboard')

@section('title', 'Tambah Layanan')

@section('content')
<h2>Tambah Layanan</h2>
<form action="{{ route('services.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Ikon</label>
        <input type="text" name="icon" class="form-control" placeholder="misal: fa-print atau bi bi-star">
    </div>
    <div class="mb-3">
        <label class="form-label">Urutan</label>
        <input type="number" name="order" class="form-control" value="0">
    </div>
    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('services.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
