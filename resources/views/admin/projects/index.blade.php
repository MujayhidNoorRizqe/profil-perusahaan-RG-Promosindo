@extends('admin.layouts.dashboard')

@section('title', 'Data Projects')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Project</h2>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">+ Tambah Project</a>
</div>

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Thumbnail</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($projects as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->category }}</td>
            <td>
                @if($p->thumbnail)
                    <img src="{{ asset('storage/'.$p->thumbnail) }}" width="80">
                @else
                    <span class="text-muted">Tidak ada</span>
                @endif
            </td>
            <td>
                <a href="{{ route('projects.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('projects.destroy', $p->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus project ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center text-muted">Belum ada data</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
