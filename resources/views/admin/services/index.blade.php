@extends('admin.layouts.dashboard')

@section('title', 'Daftar Layanan')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Layanan</h2>
    <a href="{{ route('services.create') }}" class="btn btn-primary">+ Tambah Layanan</a>
</div>

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Ikon</th>
            <th>Urutan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($services as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->title }}</td>
            <td>{{ Str::limit($s->description, 60) }}</td>
            <td>{{ $s->icon }}</td>
            <td>{{ $s->order }}</td>
            <td>
                <a href="{{ route('services.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('services.destroy', $s->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus layanan ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="6" class="text-center text-muted">Belum ada data</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
