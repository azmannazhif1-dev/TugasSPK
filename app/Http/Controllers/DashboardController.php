<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Kriteria;
use App\Models\TesFisik;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahAtlet = Atlet::count();
        $jumlahKriteria = Kriteria::count();
        $jumlahTesFisik = TesFisik::count();

        return view(
            'dashboard',
            compact(
                'jumlahAtlet',
                'jumlahKriteria',
                'jumlahTesFisik'
            )
        );
    }
}