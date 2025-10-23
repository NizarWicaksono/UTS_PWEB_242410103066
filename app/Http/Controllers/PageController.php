<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function showDashboard(Request $request)
    {
        $username = $request->query('username');

        return view('dashboard', ['username' => $username]);
    }

    public function showPengelolaan(Request $request)
    {
        $username = $request->query('username');

        $dataBarang = [
            ['id' => '001', 'nama' => 'Laptop ASUS TUF A15', 'kategori' => 'Laptop', 'stok' => 10],
            ['id' => '002', 'nama' => 'Mouse PressPlay Spirit', 'kategori' => 'Aksesoris', 'stok' => 30],
            ['id' => '003', 'nama' => 'Monitor Skyworth H27G30Q 27"', 'kategori' => 'Monitor', 'stok' => 22],
            ['id' => '004', 'nama' => 'Keyboard VortexSeries NS75', 'kategori' => 'Aksesoris', 'stok' => 18],
            ['id' => '005', 'nama' => 'Headset Kinera Celest Wyvern', 'kategori' => 'Audio', 'stok' => 83],
        ];

        return view('pengelolaan', [
            'username' => $username,
            'barang' => $dataBarang
        ]);
    }

    public function showProfile(Request $request)
    {
        $username = $request->query('username');

        return view('profile', ['username' => $username]);
    }
}
