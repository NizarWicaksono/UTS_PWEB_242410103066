@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Profil Pengguna</h3>
                </div>
                <div class="card-body">
                    <img src="https://i.pinimg.com/1200x/f6/20/7d/f6207d2ff1c2b08a8d9ee96a49775526.jpg" class="rounded-circle mb-3" alt="Avatar"
                    style="width: 150px; height: 150px; object-fit: cover;">
                    <h4 class="card-title">{{ $username }}</h4>
                    <p class="card-text text-muted">CEO</p>
                </div>
            </div>
        </div>
    </div>
@endsection
