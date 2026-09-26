@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2> Tentang Aplikasi</h2>
            <p class="text-muted">aplikasi ini ada project praktikum rekayasa web prodi SI UNPAM</p>
            <a href="{{ url('/profile') }}" class="btn btn-success">Lihat Profile</a>
        </div>
    </div>
@endsection