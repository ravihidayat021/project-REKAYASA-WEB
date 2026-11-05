<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk mengelola data mahasiswa, jadwal kuliah, dan nilai perkuliahan.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online.',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'archived',
            ],
            [
                'title' => 'Aplikasi Manajemen Proyek',
                'description' => 'Aplikasi untuk mengelola proyek, tugas, dan kolaborasi tim secara efisien.',
                'teknologi' => 'Laravel & React',
                'image' => 'project3.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'Sistem Informasi Perpustakaan',
                'description' => 'Aplikasi untuk mengelola data buku, peminjaman, dan pengembalian di perpustakaan.',
                'teknologi' => 'Laravel & Vue.js',
                'image' => 'project4.jpg',
                'status' => 'archived',
            ],
            [
                'title' => 'Aplikasi Pemesanan Makanan Online',
                'description' => 'Aplikasi untuk memesan makanan secara online dengan fitur pembayaran digital.',
                'teknologi' => 'Laravel & React Native',
                'image' => 'project5.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'Sistem Informasi Kepegawaian',
                'description' => 'Aplikasi untuk mengelola data pegawai, absensi, dan cuti secara digital.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project6.jpg',
                'status' => 'archived',
            ],
            [
                'title' => 'Aplikasi Manajemen Inventaris',
                'description' => 'Aplikasi untuk mengelola stok barang, pemesanan, dan laporan inventaris.',
                'teknologi' => 'Laravel & Vue.js',
                'image' => 'project7.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'Sistem Informasi Penjualan',
                'description' => 'Aplikasi untuk mengelola data penjualan, pelanggan, dan laporan penjualan.',
                'teknologi' => 'Laravel & React',
                'image' => 'project8.jpg',
                'status' => 'archived',
            ],
            [
                'title' => 'Aplikasi Pemesanan Tiket Online',
                'description' => 'Aplikasi untuk memesan tiket transportasi secara online dengan fitur pembayaran digital.',
                'teknologi' => 'Laravel & React Native',
                'image' => 'project9.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'Sistem Informasi Akademik Mobile',
                'description' => 'Aplikasi mobile untuk mengakses data akademik mahasiswa secara real-time.',
                'teknologi' => 'Flutter & Firebase',
                'image' => 'project10.jpg',
                'status' => 'archived',
            ],            
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create($project);
        }
    }
}