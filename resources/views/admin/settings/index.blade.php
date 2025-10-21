@extends('admin.layouts.dashboard')

@section('title', 'Pengaturan Website')

@section('content')
<h2>Pengaturan Website</h2>
<form action="{{ route('settings.update') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Judul Hero Section</label>
        <input type="text" name="hero_title" class="form-control"
               value="{{ $settings->where('key', 'hero_title')->first()->value ?? '' }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi Hero Section</label>
        <textarea name="hero_description" class="form-control" rows="3">{{ $settings->where('key', 'hero_description')->first()->value ?? '' }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Teks Footer</label>
        <input type="text" name="footer_text" class="form-control"
               value="{{ $settings->where('key', 'footer_text')->first()->value ?? '' }}">
    </div>

    <button class="btn btn-primary">Simpan Perubahan</button>
</form>
@endsection
