@extends('admin.layouts.dashboard')

@section('title', 'Tambah Project')

@section('content')
<h2>Tambah Project</h2>
<form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" name="category" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Thumbnail</label>
        <input type="file" name="thumbnail" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
