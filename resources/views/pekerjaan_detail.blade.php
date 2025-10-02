@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $pekerjaan['judul'] }}</h1>
    <p><strong>Kategori:</strong> {{ $pekerjaan['kategori'] }}</p>
    <p><strong>Deskripsi:</strong> {{ $pekerjaan['deskripsi'] }}</p>
    <p><strong>Harga:</strong> Rp {{ number_format($pekerjaan['harga'], 0, ',', '.') }}</p>

    <a href="{{ route('pekerjaan.index') }}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-success">Apply Pekerjaan</button>
</div>
@endsection
