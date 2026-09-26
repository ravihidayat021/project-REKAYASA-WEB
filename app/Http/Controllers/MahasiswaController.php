<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011701036',
            'nama' => 'Muhammad Ravi Hidayat',
            'prodi' => 'Sistem Informasi',
            'email' => 'ravihidayat021@gmail.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'Aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}