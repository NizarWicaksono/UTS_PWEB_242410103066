@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat datang, {{ $username }}!</h1>
            <p class="col-md-8 fs-4">
                Silahkan gunakan menu navigasi di atas untuk melihat stok barang elektronik di gudang atau melihat profil.
            </p>
        </div>
    </div>
@endsection
