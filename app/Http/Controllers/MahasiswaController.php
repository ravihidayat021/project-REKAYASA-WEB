<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa =
            [
                'nim' => '251011701036',
                'nama' => 'Muhammad Ravi Hidayat',
                'jurusan' => 'Sistem Informasi',
                'email' => 'ravihidayat021@gmail.com',
                'kampus' => 'Universitas Pamulang',
                'status' => 'Aktif'

            ];
        return view('page.profile', compact('mahasiswa'));
    }
}