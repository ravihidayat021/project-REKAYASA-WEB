@extends('layouts.app')

@section('title', 'Project Detail')

@section('content')
<div class="container flex-grow-1 py-4">
    <div class="mb-4">
        <a href="{{ route('project.index') }}" class="btn btn-danger">Kembali</a>
    </div>

    <div class="row g-4 align-items-start">
        <div class="col-md-7">
            <img src="{{ asset('images/' . $project->image) }}"
                alt="{{ $project->title }}"
                class="img-fluid w-100 rounded"
                style="min-height: 300px; max-height: 500px; object-fit: cover;">
        </div>

        <div class="col-md-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title mb-3">{{ $project->title }}</h4>

                    <div class="mb-3">
                        <small class="text-muted">Technology</small>
                        <p class="mb-0">{{ $project->teknologi }}</p>
                    </div>

                    <div class="mb-3">
                        @if (strtolower($project->status) === 'active')
                            <span class="badge bg-success">Active</span>
                        @elseif (strtolower($project->status) === 'archived')
                            <span class="badge bg-secondary">Archived</span>
                        @else
                            <span class="badge bg-secondary">{{ $project->status }}</span>
                        @endif
                    </div>

                    <hr>

                    <p class="card-text mb-4">{{ $project->description }}</p>

                    <div class="border-top pt-3">
                        <small class="text-muted">Dibuat pada</small>
                        <p class="mb-0">{{ $project->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection