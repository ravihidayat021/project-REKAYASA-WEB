<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011701036',
            'nama' => 'Muhammad Ravi Hidayat',
            'prodi' => 'Sistem Informasi',
            'jurusan' => 'Sistem Informasi',
            'email' => 'ravihidayat021@gmail.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'Aktif',
            'foto' => 'ravi.hidayat.jpeg' // <-- Sesuaikan dengan nama file foto Anda di folder public/images/
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}