@extends('layouts.app')

@section('title', 'Pengelolaan Stok')

@section('content')
    <h2>Manajemen Stok Barang Elektronik</h2>
    <p>Daftar Barang</p>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
