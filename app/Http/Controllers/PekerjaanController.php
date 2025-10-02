<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    private $pekerjaan = [
        [
            'id' => 1,
            'judul' => 'Membuat Rangkuman Materi Pemrograman',
            'deskripsi' => 'Pengajar membutuhkan rangkuman materi PBO untuk kelas mahasiswa semester 3.',
            'kategori' => 'Pemrograman',
            'harga' => 150000,
        ],
        [
            'id' => 2,
            'judul' => 'Membuat Soal Latihan Matematika',
            'deskripsi' => 'Pengajar membutuhkan 20 soal latihan beserta pembahasannya.',
            'kategori' => 'Matematika',
            'harga' => 100000,
        ],
    ];

    // daftar pekerjaan
    public function index()
    {
        $pekerjaan = $this->pekerjaan;
        return view('Pekerjaan', compact('pekerjaan'));
    }

    // detail pekerjaan
    public function show($id)
    {
        $pekerjaan = collect($this->pekerjaan)->firstWhere('id', $id);
        return view('pekerjaan_detail', compact('pekerjaan'));
    }

    // form tambah pekerjaan
    public function create()
    {
        $kategori = ['Pemrograman', 'Matematika', 'Bahasa', 'Sains', 'Desain'];
        return view('pekerjaan_create', compact('kategori'));
    }

    // simpan pekerjaan baru (sementara hanya redirect)
    public function store(Request $request)
    {
        // Belum ada database → hanya redirect
        return redirect()->route('pekerjaan.index')
                         ->with('success', 'Pekerjaan berhasil ditambahkan!');
    }
}
