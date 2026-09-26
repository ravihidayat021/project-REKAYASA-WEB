@extends('layouts.app')

@section('title', 'profile')
@section('content')
    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center py-4">
                        <div class="d-flex justify-content-center mb-3">
                            <!-- Memanggil foto profil dari folder public -->
                            <img src="{{ asset('pp1porto.jpg') }}" alt="Foto Profil" class="rounded-circle img-thumbnail"
                                style="width: 120px; height: 120px; object-fit: cover;">
                        </div>
                        <h5 class="card-title mb-4">Profile Mahasiswa</h5>
                        <span class="badge bg-success">{{ $mahasiswa['status'] }}</span>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text"><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
                        <p class="card-text"><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
                        <p class="card-text"><strong>Prodi:</strong> {{ $mahasiswa['prodi'] }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $mahasiswa['email'] }}</p>
                        <p class="card-text"><strong>Kampus:</strong> {{ $mahasiswa['kampus'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection