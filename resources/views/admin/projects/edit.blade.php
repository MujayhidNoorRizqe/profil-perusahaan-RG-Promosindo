@extends('admin.layouts.dashboard')

@section('title', 'Edit Project')

@section('content')
<h2>Edit Project</h2>
<form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" name="category" class="form-control" value="{{ $project->category }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="4">{{ $project->description }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Thumbnail</label><br>
        @if($project->thumbnail)
            <img src="{{ asset('storage/'.$project->thumbnail) }}" width="100" class="mb-2"><br>
        @endif
        <input type="file" name="thumbnail" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
