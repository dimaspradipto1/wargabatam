<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Pindah;
use App\Models\Kelahiran;
use App\Models\Pendatang;
use Illuminate\Http\Request;
use App\Models\Kartukeluarga;
use App\Models\Kematian;

class DashboardController extends Controller
{
    public function admin(Request $request)
    {
        $warga = Warga::count();
        $kk= Kartukeluarga::count();
        $pendatang = Pendatang::count();
        $pindah = Pindah::count();
        $kelahiran = Kelahiran::count();
        $kematian = Kematian::count();
        $data=[
            'title' => 'Dashboard',
            'menu' => 'Home',
            'breadcrumb' => 'Dashboard',
            'warga' => $warga,
            'kk' => $kk,
            'pendatang'=>$pendatang,
            'pindah'=>$pindah,
            'kelahiran'=>$kelahiran,
            'kematian'=>$kematian,
        ];
        return view('layouts.dashboard', $data);
    }
}
