<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index()
    {
        $pengajar = [
            [
                'nama' => 'Budi Santoso',
                'mata_pelajaran' => ['Matematika', 'Fisika'],
                'total_job_upload' => 5,
                'total_job_selesai' => 3
            ],
            [
                'nama' => 'Siti Aminah',
                'mata_pelajaran' => ['Bahasa Indonesia', 'Sejarah'],
                'total_job_upload' => 8,
                'total_job_selesai' => 6
            ],
            [
                'nama' => 'Andi Wijaya',
                'mata_pelajaran' => ['Kimia'],
                'total_job_upload' => 2,
                'total_job_selesai' => 1
            ]
        ];

        return view('list.pengajar', compact('pengajar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
