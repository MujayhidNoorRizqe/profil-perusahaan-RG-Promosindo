@extends('admin.layouts.dashboard')

@section('title', 'Pesan Masuk')

@section('content')
<h2>Pesan Masuk</h2>
<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subjek</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contacts as $c)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $c->name }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->subject }}</td>
            <td>
                <a href="{{ route('contacts.show', $c->id) }}" class="btn btn-info btn-sm">Lihat</a>
                <form action="{{ route('contacts.destroy', $c->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus pesan ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center text-muted">Belum ada pesan</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
