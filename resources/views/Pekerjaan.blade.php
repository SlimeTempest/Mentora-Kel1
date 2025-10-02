@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pekerjaan</h1>

    <a href="{{ route('pekerjaan.create') }}" class="btn btn-primary mb-3">+ Tambah Pekerjaan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pekerjaan as $job)
                <tr>
                    <td>{{ $job['judul'] }}</td>
                    <td>{{ $job['kategori'] }}</td>
                    <td>Rp {{ number_format($job['harga'], 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('pekerjaan.show', $job['id']) }}" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
