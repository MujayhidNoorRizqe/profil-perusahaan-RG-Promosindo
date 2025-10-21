@extends('admin.layouts.dashboard')

@section('title', 'Tambah Artikel')

@section('content')
<h2>Tambah Artikel</h2>
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Isi Artikel</label>
        <textarea name="content" class="form-control" rows="6"></textarea>
    </div>
    <div class="mb-3">
        <label>Thumbnail</label>
        <input type="file" name="thumbnail" class="form-control">
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-select">
            <option value="draft">Draft</option>
            <option value="published">Published</option>
        </select>
    </div>
    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
