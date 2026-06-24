<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Kelayakan Fisik Atlet</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #F8FAFC;
            display: flex;
            min-height: 100vh;
        }

        /* ===== SIDEBAR (Premium Tech Theme) ===== */
        .sidebar {
            width: 280px;
            background: #0F172A;
            color: #F8FAFC;
            padding: 30px 20px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            border-right: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            flex-direction: column;
        }

        .logo {
            padding: 0 15px;
            margin-bottom: 35px;
        }

        .logo h2 {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.5px;
            background: linear-gradient(135deg, #FFFFFF 0%, #94A3B8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo p {
            font-size: 12px;
            color: #64748B;
            margin-top: 4px;
        }

        /* ===== NAV MENU (Gemini Pill-Shaped Style) ===== */
        .menu-container {
            overflow-y: auto;
            flex-grow: 1;
        }

        .menu-title {
            color: #475569;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-top: 24px;
            margin-bottom: 8px;
            font-weight: 600;
            padding-left: 15px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin-bottom: 4px;
        }

        .sidebar ul li a {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
            color: #94A3B8;
            padding: 12px 18px;
            border-radius: 9999px;
            /* Bentuk kapsul */
            transition: all 0.25s ease;
            font-size: 14px;
            font-weight: 500;
        }

        .sidebar ul li a:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #F1F5F9;
        }

        /* Perbaikan Selektor Efek Aktif (Tetap Menjaga Konsistensi Padding Kapsul) */
        .sidebar ul li a.active {
            background: rgba(34, 197, 94, 0.12) !important;
            color: #4ADE80 !important;
            font-weight: 600 !important;
        }

        .menu-icon {
            width: 18px;
            height: 18px;
            stroke-width: 2px;
        }

        /* ===== MAIN WORKSPACE ===== */
        .main {
            margin-left: 280px;
            width: calc(100% - 280px);
            padding: 40px;
        }

        /* ===== HEADER ===== */
        .header {
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #0F172A;
            letter-spacing: -0.5px;
        }

        /* ===== MODERN SOFT CARD ===== */
        .card {
            background: #FFFFFF;
            border-radius: 24px;
            padding: 35px;
            border: 1px solid #E2E8F0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.015);
        }

        /* ===== COMPONENTS UPGRADE (BUTTON & INPUT) ===== */
        .btn {
            background: #16A34A;
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn:hover {
            background: #15803D;
            transform: translateY(-1px);
        }

        input,
        select {
            width: 100%;
            padding: 14px 18px;
            border: 1px solid #E2E8F0;
            background: #F8FAFC;
            border-radius: 14px;
            margin-top: 8px;
            margin-bottom: 20px;
            outline: none;
            font-size: 14px;
            transition: all 0.2s;
            color: #334155;
        }

        input:focus,
        select:focus {
            border-color: #16A34A;
            background: #FFFFFF;
            box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.1);
        }

        /* ===== TABLE RESPONSIVE SOFT UI ===== */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th {
            background: #F8FAFC;
            color: #64748B;
            padding: 16px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #E2E8F0;
        }

        table td {
            padding: 16px;
            border-bottom: 1px solid #F1F5F9;
            color: #334155;
            font-size: 14px;
        }

        /* ===== MODERN CUSTOM SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #F8FAFC;
        }

        ::-webkit-scrollbar-thumb {
            background: #E2E8F0;
            border-radius: 9999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #CBD5E1;
        }

        .menu-container::-webkit-scrollbar {
            width: 5px;
        }

        .menu-container::-webkit-scrollbar-track {
            background: #0F172A;
        }

        .menu-container::-webkit-scrollbar-thumb {
            background: #1E293B;
            border-radius: 9999px;
        }

        .menu-container::-webkit-scrollbar-thumb:hover {
            background: #334155;
        }

        html {
            scrollbar-width: thin;
            scrollbar-color: #E2E8F0 #F8FAFC;
        }

        .menu-container {
            scrollbar-width: thin;
            scrollbar-color: #1E293B #0F172A;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <div class="logo">
            <h2>SPK Atlet</h2>
            <p>Kelayakan Fisik Atlet</p>
        </div>

        <div class="menu-container">
            <div class="menu-title">Menu Utama</div>
            <ul>
                <li>
                    <a href="/">
                        <i data-lucide="layout-dashboard" class="menu-icon"></i> Dashboard
                    </a>
                </li>
            </ul>

            @if(Auth::user()->role != 'manajer')

                <div class="menu-title">Master Data</div>

                <ul>
                    <li>
                        <a href="/atlet">
                            <i data-lucide="users" class="menu-icon"></i>
                            Data Atlet
                        </a>
                    </li>

                    <li>
                        <a href="/kriteria">
                            <i data-lucide="clipboard-list" class="menu-icon"></i>
                            Kriteria & Bobot
                        </a>
                    </li>

                    <li>
                        <a href="/tesfisik">
                            <i data-lucide="activity" class="menu-icon"></i>
                            Tes Fisik
                        </a>
                    </li>
                </ul>

            @endif

            <div class="menu-title">SPK Engine</div>

            <ul>

                @if(Auth::user()->role != 'manajer')
                    <li>
                        <a href="/perhitungan">
                            <i data-lucide="calculator" class="menu-icon"></i>
                            Perhitungan SAW
                        </a>
                    </li>
                @endif

                <li>
                    <a href="/ranking">
                        <i data-lucide="bar-chart-3" class="menu-icon"></i>
                        Hasil Ranking
                    </a>
                </li>

            </ul>

            <div class="menu-title">Report</div>
            <ul>
                <li>
                    <a href="/laporan">
                        <i data-lucide="file-text" class="menu-icon"></i> Laporan
                    </a>
                </li>
            </ul>

            {{-- USER INFO --}}
            @if(Auth::check())

                <div style="
                                margin-top:20px;
                                padding-top:20px;
                                border-top:1px solid rgba(255,255,255,.08);
                            ">

                    <div style="
                                    padding:14px 18px;
                                    border-radius:18px;
                                    background:rgba(255,255,255,.03);
                                    margin-bottom:15px;
                                ">

                        <div style="
                                        color:#F8FAFC;
                                        font-weight:600;
                                        font-size:14px;
                                    ">
                            {{ Auth::user()->name }}
                        </div>

                        <div style="
                                        color:#64748B;
                                        font-size:12px;
                                        margin-top:4px;
                                    ">
                            {{ ucfirst(Auth::user()->role) }}
                        </div>

                    </div>


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" style="
                                            width:100%;
                                            background:rgba(239,68,68,.1);
                                            color:#F87171;
                                            border:none;
                                            border-radius:9999px;
                                            padding:12px 18px;
                                            cursor:pointer;
                                            font-size:14px;
                                            font-weight:500;
                                            transition:.25s;
                                        " onmouseover="this.style.background='rgba(239,68,68,.15)'"
                            onmouseout="this.style.background='rgba(239,68,68,.1)'">

                            Logout

                        </button>
                    </form>

                </div>

            @endif
        </div>
    </div>

    <div class="main">
        <div class="header">
            <h1>Sistem Penunjang Keputusan Kelayakan Fisik Atlet</h1>
        </div>

        <div class="card">
            @yield('content')
        </div>
    </div>

    <script>
        // 1. Render Ikon Lucide
        lucide.createIcons();

        // 2. LOGIK OTOMATIS ACTIVE STATE
        document.addEventListener("DOMContentLoaded", function () {
            // Ambil path URL saat ini (contoh: '/atlet' atau '/tesfisik')
            const currentPath = window.location.pathname;

            // Ambil semua element link di dalam sidebar
            const menuLinks = document.querySelectorAll('.sidebar ul li a');

            menuLinks.forEach(link => {
                const hrefValue = link.getAttribute('href');

                // Kondisi 1: Jika berada di halaman homepage '/'
                if (currentPath === '/' && hrefValue === '/') {
                    link.classList.add('active');
                }
                // Kondisi 2: Jika berada di sub-halaman lain (contoh: /atlet atau /atlet/create)
                else if (hrefValue !== '/' && currentPath.startsWith(hrefValue)) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>