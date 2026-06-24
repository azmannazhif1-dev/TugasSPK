@extends('layouts.app')

@section('content')

    <h2>Hasil Ranking Atlet</h2>

    <div style="
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
            margin-top:25px;
            margin-bottom:40px;
            ">

        <!-- Total Atlet -->
        <div style="
                    background:#FFFFFF;
                    border:1px solid #E2E8F0;
                    border-radius:24px;
                    padding:25px;
                ">
            <h3 style="color:#64748B;">Jumlah Atlet</h3>

            <h1 style="
                        font-size:48px;
                        color:#0F172A;
                        margin-top:15px;
                    ">
                {{ $totalAtlet }}
            </h1>
        </div>


        <!-- Atlet Layak -->
        <div style="
                    background:#FFFFFF;
                    border:1px solid #E2E8F0;
                    border-radius:24px;
                    padding:25px;
                ">
            <h3 style="color:#64748B;">Atlet Layak</h3>

            <h1 style="
                        font-size:48px;
                        color:#16A34A;
                        margin-top:15px;
                    ">
                {{ $totalLayak }}
            </h1>
        </div>


        <!-- Atlet Tidak Layak -->
        <div style="
                    background:#FFFFFF;
                    border:1px solid #E2E8F0;
                    border-radius:24px;
                    padding:25px;
                ">
            <h3 style="color:#64748B;">Tidak Layak</h3>

            <h1 style="
                        font-size:48px;
                        color:#DC2626;
                        margin-top:15px;
                    ">
                {{ $totalTidakLayak }}
            </h1>
        </div>


        <!-- Rata-rata Nilai -->
        <div style="
                    background:#FFFFFF;
                    border:1px solid #E2E8F0;
                    border-radius:24px;
                    padding:25px;
                ">
            <h3 style="color:#64748B;">Rata-rata Nilai</h3>

            <h1 style="
                        font-size:48px;
                        color:#0F172A;
                        margin-top:15px;
                    ">
                {{ $rataNilai }}
            </h1>
        </div>

    </div>

    <div style="
    background:#FFFFFF;
    border:1px solid #E2E8F0;
    border-radius:24px;
    padding:35px;
    margin-bottom:40px;
    ">

        <h2 style="
        color:#0F172A;
        margin-bottom:25px;
        ">
            🏆 Atlet Terbaik
        </h2>

        <div style="
        display:grid;
        grid-template-columns:repeat(4,1fr);
        gap:25px;
        ">

            <div>
                <p style="color:#64748B;">
                    Nama Atlet
                </p>

                <h2 style="
                color:#0F172A;
                margin-top:10px;
                ">
                    {{ $atletTerbaik->atlet->nama_atlet }}
                </h2>
            </div>


            <div>
                <p style="color:#64748B;">
                    Nilai Preferensi
                </p>

                <h2 style="
                color:#16A34A;
                margin-top:10px;
                ">
                    {{ number_format($atletTerbaik->nilai_preferensi, 3) }}
                </h2>
            </div>


            <div>
                <p style="color:#64748B;">
                    Status
                </p>

                <h2 style="
                color:#16A34A;
                margin-top:10px;
                ">
                    {{ $atletTerbaik->status_threshold }}
                </h2>
            </div>


            <div>
                <p style="color:#64748B;">
                    Rekomendasi
                </p>

                <h2 style="
                color:#2563EB;
                margin-top:10px;
                ">
                    {{ $atletTerbaik->rekomendasi }}
                </h2>
            </div>

        </div>

    </div>

    <table>
        <thead>
            <tr>
                <th>Ranking</th>
                <th>Nama Atlet</th>
                <th>Nilai Preferensi</th>
                <th>Status</th>
                <th>Rekomendasi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($tesfisik as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->atlet->nama_atlet }}</td>

                    <td>{{ number_format($item->nilai_preferensi, 3) }}</td>

                    <td>

                        @if($item->status_threshold == 'Layak')

                            <span style="
                                                                    background:#DCFCE7;
                                                                    color:#166534;
                                                                    padding:8px 15px;
                                                                    border-radius:999px;
                                                                    font-weight:600;
                                                                ">
                                Layak
                            </span>

                        @else

                            <span style="
                                                                    background:#FEE2E2;
                                                                    color:#991B1B;
                                                                    padding:8px 15px;
                                                                    border-radius:999px;
                                                                    font-weight:600;
                                                                ">
                                Tidak Layak
                            </span>

                        @endif

                    </td>

                    <td>

                        @if($item->status_threshold == 'Layak')

                            <span style="
                                                                    background:#DBEAFE;
                                                                    color:#1D4ED8;
                                                                    padding:8px 15px;
                                                                    border-radius:999px;
                                                                    font-weight:600;
                                                                ">
                                Direkomendasikan
                            </span>

                        @else

                            <span style="
                                                                    background:#F3F4F6;
                                                                    color:#374151;
                                                                    padding:8px 15px;
                                                                    border-radius:999px;
                                                                    font-weight:600;
                                                                ">
                                Tidak Direkomendasikan
                            </span>

                        @endif

                    </td>

                </tr>

            @endforeach

        </tbody>
    </table>

@endsection