@extends('admin.layouts.dashboard')

@section('title', 'Detail Pesan')

@section('content')
<h2>Detail Pesan</h2>
<div class="card">
    <div class="card-body">
        <p><strong>Nama:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Subjek:</strong> {{ $contact->subject }}</p>
        <p><strong>Pesan:</strong></p>
        <p>{{ $contact->message }}</p>
    </div>
</div>
<a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
