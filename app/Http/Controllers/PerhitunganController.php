<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TesFisik;
use App\Models\Kriteria;

class PerhitunganController extends Controller
{
    public function proses()
    {
        $tesfisik = $this->hitungSAW();

        return view(
            'perhitungan.hasil',
            compact('tesfisik')
        );
    }

    public function ranking()
    {
        $tesfisik = $this->hitungSAW();

        // Statistik dashboard manajer
        $totalAtlet = $tesfisik->count();

        $totalLayak = $tesfisik
            ->where('status_threshold', 'Layak')
            ->count();

        $totalTidakLayak = $tesfisik
            ->where('status_threshold', 'Tidak Layak')
            ->count();

        $rataNilai = round(
            $tesfisik->avg('nilai_preferensi'),
            3
        );

        $atletTerbaik = $tesfisik->first();
        return view(
            'ranking.index',
            compact(
                'tesfisik',
                'totalAtlet',
                'totalLayak',
                'totalTidakLayak',
                'rataNilai',
                'atletTerbaik'
            )
        );

        return view(
            'ranking.index',
            compact(
                'tesfisik',
                'totalAtlet',
                'totalLayak',
                'totalTidakLayak',
                'rataNilai'
            )
        );
    }

    public function hitungSAW()
    {
        $tesfisik = TesFisik::with('atlet')->get();

        // Max dan Min
        $maxBeep = $tesfisik->max('beep_test');
        $minSprint = $tesfisik->min('sprint_20m');
        $minAgility = $tesfisik->min('illinois_agility');
        $maxJump = $tesfisik->max('vertical_jump');
        $maxPushUp = $tesfisik->max('push_up');
        $minFatigue = $tesfisik->min('fatigue_index');

        // Kriteria
        $kriteria = Kriteria::orderBy('kode_kriteria')->get();

        // Bobot
        $bobot = $kriteria->pluck('bobot')->toArray();

        // Threshold
        $threshold = $kriteria->pluck('threshold', 'kode_kriteria');

        // Normalisasi + Threshold + Nilai Preferensi
        foreach ($tesfisik as $item) {

            // Normalisasi
            $item->r1 = $item->beep_test / $maxBeep;
            $item->r2 = $minSprint / $item->sprint_20m;
            $item->r3 = $minAgility / $item->illinois_agility;
            $item->r4 = $item->vertical_jump / $maxJump;
            $item->r5 = $item->push_up / $maxPushUp;
            $item->r6 = $minFatigue / $item->fatigue_index;

            // Status threshold
            $status = 'Layak';

            if ($item->beep_test < $threshold['C1']) {
                $status = 'Tidak Layak';
            }

            if ($item->sprint_20m > $threshold['C2']) {
                $status = 'Tidak Layak';
            }

            if ($item->illinois_agility > $threshold['C3']) {
                $status = 'Tidak Layak';
            }

            if ($item->vertical_jump < $threshold['C4']) {
                $status = 'Tidak Layak';
            }

            if ($item->push_up < $threshold['C5']) {
                $status = 'Tidak Layak';
            }

            if ($item->fatigue_index > $threshold['C6']) {
                $status = 'Tidak Layak';
            }

            $item->status_threshold = $status;

            // Nilai preferensi SAW
            $item->nilai_preferensi =
                (
                    ($item->r1 * $bobot[0]) +
                    ($item->r2 * $bobot[1]) +
                    ($item->r3 * $bobot[2]) +
                    ($item->r4 * $bobot[3]) +
                    ($item->r5 * $bobot[4]) +
                    ($item->r6 * $bobot[5])
                ) / 100;

            // Rekomendasi
            if ($item->status_threshold == 'Layak') {
                $item->rekomendasi = 'Direkomendasikan';
            } else {
                $item->rekomendasi = 'Tidak Direkomendasikan';
            }
        }

        // Ranking
        $tesfisik = $tesfisik->sortByDesc('nilai_preferensi');

        return $tesfisik;
    }
}