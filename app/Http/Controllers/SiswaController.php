<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = [
            [
                'nama' => 'Ahmad Fauzi',
                'kelas' => 'XII IPA 1',
                'mapel_diambil' => ['Matematika', 'Fisika', 'Kimia'],
                'total_tugas_upload' => 7,
                'total_tugas_selesai' => 5
            ],
            [
                'nama' => 'Dewi Lestari',
                'kelas' => 'XI IPS 2',
                'mapel_diambil' => ['Ekonomi', 'Sosiologi', 'Sejarah'],
                'total_tugas_upload' => 10,
                'total_tugas_selesai' => 9
            ],
            [
                'nama' => 'Rizky Pratama',
                'kelas' => 'X TKJ 1',
                'mapel_diambil' => ['Pemrograman', 'Jaringan', 'Basis Data'],
                'total_tugas_upload' => 4,
                'total_tugas_selesai' => 2
            ]
        ];

        return view('list.siswa', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        // contoh penyimpanan data sementara
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        return "Detail siswa dengan ID: $id";
    }

    public function edit(string $id)
    {
        return view('siswa.edit', compact('id'));
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        return redirect()->route('siswa.index')->with('success', "Data siswa dengan ID $id berhasil dihapus.");
    }
}
