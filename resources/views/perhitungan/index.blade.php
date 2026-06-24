@extends('layouts.app')

@section('content')

    <style>
        .page-header {
            margin-bottom: 30px;
        }

        .page-header h2 {
            font-size: 30px;
            font-weight: 700;
            color: #0F172A;
        }

        .page-header p {
            color: #64748B;
            margin-top: 5px;
        }

        .info-card {
            background: white;
            border: 1px solid #E2E8F0;
            border-radius: 24px;
            padding: 40px;
        }

        .info-card h3 {
            color: #0F172A;
            margin-bottom: 15px;
        }

        .info-card ul {
            margin-left: 20px;
            color: #475569;
            line-height: 35px;
        }
    </style>


    <div class="page-header">

        <h2>Perhitungan SAW</h2>

        <p>
            Proses perhitungan kelayakan fisik atlet menggunakan metode SAW dan threshold minimum.
        </p>

    </div>


    <div class="info-card">

        <h3>Langkah Perhitungan</h3>



        <ul>

            <li>Pengambilan data hasil tes fisik atlet.</li>

            <li>Pemeriksaan threshold minimum setiap kriteria.</li>

            <li>Pembentukan matriks keputusan.</li>

            <li>Normalisasi matriks.</li>

            <li>Perhitungan nilai preferensi SAW.</li>

            <li>Penentuan ranking atlet.</li>

            <li>Rekomendasi kelayakan atlet.</li>

        </ul>
        <a href="{{ route('perhitungan.proses') }}" class="btn">
            <i data-lucide="play"></i>
            Proses Perhitungan
        </a>

    </div>

@endsection