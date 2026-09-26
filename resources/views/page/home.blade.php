@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2> Selamat Datang</h2>
            <p class="text-muted">ini halaman utama web profile mahasiswa prodi SI UNPAM</p>
            <a href="{{ url('/profile') }}" class="btn btn-success">Lihat Profile</a>
        </div>
    </div>
@endsection