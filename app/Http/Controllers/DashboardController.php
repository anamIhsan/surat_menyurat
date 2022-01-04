<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $s_masuk = SuratMasuk::count();
        $s_keluar = SuratKeluar::count();

        return view('pages.dashboard', [
            'users' => $users,
            's_masuk' => $s_masuk,
            's_keluar' => $s_keluar
        ]);
    }
}
