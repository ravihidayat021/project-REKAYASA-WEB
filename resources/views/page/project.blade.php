@extends('layouts.app')

@section('title','Project')

@section('content')
<div class="container flex-grow-1">
    <div class="mb-4 text-center">
        <h2 class="fw-bold">Portofolio Project</h2>
        <p class="text-muted">Daftar Project yang dikerjakan oleh mahasiswa</p>
    </div>

    <div class="row g-4">
        @foreach ($projects as $project)

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/'.$project->image) }}" alt="" class="card-img-top"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title mb-4">{{ $project->title }}</h5>
                    <div class="mb-3">
                        @if (strtolower($project->status) === 'active')
                        <span class="badge bg-success">Active</span>
                        @elseif (strtolower($project->status) === 'archived')
                        <span class="badge bg-secondary">Archived</span>
                        @else
                        <span class="badge bg-secondary">{{ $project->status }}</span>
                        @endif
                    </div>
                    <p class="card-text">{{ Str::limit($project->description,50) }}</p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <div class="mb-2">
                        <small>Tech : {{ $project->teknologi }}</small>
                    </div>
                    <a href="{{ route('project.show', $project->id) }}" class="btn btn-primary w-100">Detail Project</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
</div>

@endsection