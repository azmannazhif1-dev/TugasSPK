@extends('layouts.app')

@section('content')

    <style>
        .welcome-section {
            margin-bottom: 35px;
        }

        .welcome-section h2 {
            font-size: 32px;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 8px;
        }

        .welcome-section p {
            color: #64748B;
            line-height: 1.8;
            font-size: 15px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 35px;
        }

        .stat-card {
            background: white;
            border: 1px solid #E2E8F0;
            border-radius: 24px;
            padding: 24px;
            transition: .25s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(15, 23, 42, .04);
        }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-label {
            color: #64748B;
            font-size: 14px;
            font-weight: 500;
        }

        .stat-value {
            margin-top: 12px;
            font-size: 36px;
            font-weight: 700;
            color: #0F172A;
        }

        .stat-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background: rgba(22, 163, 74, .08);
            color: #16A34A;
        }

        .feature-title {
            font-size: 22px;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 20px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .feature-card {
            background: white;
            border: 1px solid #E2E8F0;
            border-radius: 24px;
            padding: 24px;
            transition: .25s;
        }

        .feature-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(15, 23, 42, .04);
        }

        .feature-icon {
            width: 52px;
            height: 52px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            background: rgba(22, 163, 74, .08);
            color: #16A34A;
            margin-bottom: 15px;
        }

        .feature-card h4 {
            color: #0F172A;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .feature-card p {
            color: #64748B;
            font-size: 14px;
            line-height: 1.7;
        }
    </style>

    <div class="welcome-section">
        <h2>Selamat Datang</h2>
        <p>
            Sistem Pendukung Keputusan Kelayakan Fisik Atlet menggunakan metode
            SAW (Simple Additive Weighting) dan Threshold Minimum untuk membantu
            pelatih menentukan atlet yang layak bertanding.
        </p>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">Jumlah Atlet</div>
                <div class="stat-icon">
                    <i data-lucide="users"></i>
                </div>
            </div>
            <div class="stat-value">
                {{ \App\Models\Atlet::count() }}
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">Jumlah Kriteria</div>
                <div class="stat-icon">
                    <i data-lucide="clipboard-list"></i>
                </div>
            </div>
            <div class="stat-value">
                {{ \App\Models\Kriteria::count() }}
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-label">Data Tes Fisik</div>
                <div class="stat-icon">
                    <i data-lucide="activity"></i>
                </div>
            </div>
            <div class="stat-value">
                {{ \App\Models\TesFisik::count() }}
            </div>
        </div>
    </div>

    <h3 class="feature-title">Fitur Sistem</h3>

    <div class="feature-grid">
        <div class="feature-card">
            <div class="feature-icon">
                <i data-lucide="users"></i>
            </div>
            <h4>Data Atlet</h4>
            <p>Mengelola data identitas atlet yang akan dievaluasi.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i data-lucide="clipboard-list"></i>
            </div>
            <h4>Kriteria & Bobot</h4>
            <p>Mengatur bobot dan kriteria yang digunakan pada metode SAW.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i data-lucide="activity"></i>
            </div>
            <h4>Tes Fisik</h4>
            <p>Menyimpan hasil pengukuran kondisi fisik atlet.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i data-lucide="calculator"></i>
            </div>
            <h4>Perhitungan SAW</h4>
            <p>Menghitung nilai kelayakan atlet berdasarkan data tes fisik.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i data-lucide="bar-chart-3"></i>
            </div>
            <h4>Ranking Atlet</h4>
            <p>Menampilkan urutan atlet berdasarkan hasil evaluasi.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i data-lucide="file-text"></i>
            </div>
            <h4>Laporan</h4>
            <p>Menampilkan laporan data atlet, tes fisik, dan hasil evaluasi.</p>
        </div>
    </div>

    <script>
        // Memastikan ikon lucide ter-render dengan baik di dalam halaman anak
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    </script>

@endsection