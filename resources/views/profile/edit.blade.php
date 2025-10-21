@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profil Admin</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input id="name" name="name" type="text" class="form-control" value="{{ old('name', auth()->user()->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email', auth()->user()->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="profile_picture" class="form-label">Foto Profil / Logo Perusahaan</label><br>
            @if (auth()->user()->profile_picture)
                <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" width="100" class="rounded-circle mb-2">
            @else
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="100" class="rounded-circle mb-2">
            @endif
            <input type="file" name="profile_picture" id="profile_picture" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection