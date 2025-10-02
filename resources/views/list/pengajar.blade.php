@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Daftar Pengajar</h2>

    <div class="row">
        @foreach($pengajar as $p)
        <div class="col-md-4">
            <div class="card shadow-sm mb-3">
                <div class="card-header bg-primary text-white">
                    {{ $p['nama'] }}
                </div>
                <div class="card-body">
                    <p><strong>Mata Pelajaran:</strong></p>
                    <ul>
                        @foreach($p['mata_pelajaran'] as $mapel)
                            <li>{{ $mapel }}</li>
                        @endforeach
                    </ul>
                    <p><strong>Total Job Upload:</strong> {{ $p['total_job_upload'] }}</p>
                    <p><strong>Total Job Selesai:</strong> {{ $p['total_job_selesai'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
