<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        $perhitungan = new PerhitunganController();

        $tesfisik = $perhitungan->hitungSAW();

        return view(
            'laporan.index',
            compact('tesfisik')
        );
    }

    public function pdf()
    {
        $perhitungan = new PerhitunganController();

        $tesfisik = $perhitungan->hitungSAW();

        $pdf = Pdf::loadView(
            'laporan.pdf',
            compact('tesfisik')
        );

        return $pdf->download('laporan_hasil_ranking_atlet.pdf');
    }
}