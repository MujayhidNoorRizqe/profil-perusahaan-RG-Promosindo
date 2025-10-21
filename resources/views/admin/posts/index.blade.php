@extends('admin.layouts.dashboard')

@section('title', 'Daftar Artikel')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Artikel</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Tambah Artikel</a>
</div>

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Thumbnail</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->title }}</td>
            <td>
                <span class="badge bg-{{ $p->status === 'published' ? 'success' : 'secondary' }}">{{ $p->status }}</span>
            </td>
            <td>
                @if($p->thumbnail)
                    <img src="{{ asset('storage/'.$p->thumbnail) }}" width="70">
                @endif
            </td>
            <td>
                <a href="{{ route('posts.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('posts.destroy', $p->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus artikel ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center text-muted">Belum ada artikel</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
