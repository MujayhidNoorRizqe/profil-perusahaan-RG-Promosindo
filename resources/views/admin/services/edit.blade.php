@extends('admin.layouts.dashboard')

@section('title', 'Edit Layanan')

@section('content')
<h2>Edit Layanan</h2>
<form action="{{ route('services.update', $service->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="3">{{ $service->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Ikon</label>
        <input type="text" name="icon" class="form-control" value="{{ $service->icon }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Urutan</label>
        <input type="number" name="order" class="form-control" value="{{ $service->order }}">
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('services.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
