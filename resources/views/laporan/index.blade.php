@extends('layouts.app')

@section('content')

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:25px;">

        <div>
            <h2 style="margin-bottom:5px;">
                Laporan Hasil Kelayakan Fisik Atlet
            </h2>

            <p style="color:#64748B;">
                Metode Simple Additive Weighting (SAW)
            </p>
        </div>


    </div>

    <div class="card">


        <div style="margin-bottom:25px;">

            <p>
                <strong>Tanggal Cetak :</strong>
                {{ date('d F Y') }}
            </p>

            <p style="margin-top:8px;">
                <strong>Jumlah Atlet :</strong>
                {{ count($tesfisik) }}
            </p>

        </div>


        <table>

            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama Atlet</th>
                    <th>Nilai Preferensi</th>
                    <th>Status Threshold</th>
                    <th>Rekomendasi</th>
                </tr>

            </thead>


            <tbody>

                @foreach($tesfisik as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $item->atlet->nama_atlet }}
                        </td>

                        <td>
                            {{ number_format($item->nilai_preferensi, 3) }}
                        </td>

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
            <a href="{{ route('laporan.pdf') }}" class="btn btn-danger">
                Export PDF
            </a>
        </table>


    </div>

@endsection