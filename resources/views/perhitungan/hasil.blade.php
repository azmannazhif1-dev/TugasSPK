@extends('layouts.app')

@section('content')

    <h2>Data Perhitungan SAW</h2>


    <!-- ================= STATUS THRESHOLD ================= -->

    <h3 style="margin-top:30px;">
        Status Threshold
    </h3>

    <table>

        <thead>

            <tr>
                <th>Atlet</th>
                <th>Beep Test</th>
                <th>Sprint 20m</th>
                <th>Illinois Agility</th>
                <th>Vertical Jump</th>
                <th>Push Up</th>
                <th>Fatigue Index</th>
                <th>Status</th>
            </tr>

        </thead>

        <tbody>

            @foreach($tesfisik as $item)

                <tr>

                    <td>{{ $item->atlet->nama_atlet }}</td>

                    <td>{{ $item->beep_test }}</td>

                    <td>{{ $item->sprint_20m }}</td>

                    <td>{{ $item->illinois_agility }}</td>

                    <td>{{ $item->vertical_jump }}</td>

                    <td>{{ $item->push_up }}</td>

                    <td>{{ $item->fatigue_index }}</td>

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

                </tr>

            @endforeach

        </tbody>

    </table>



    <!-- ================= MATRIKS KEPUTUSAN ================= -->

    <h3 style="margin-top:50px;">
        Matriks Keputusan (X)
    </h3>

    <table>

        <thead>

            <tr>

                <th>Atlet</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>

            </tr>

        </thead>

        <tbody>

            @foreach($tesfisik as $item)

                <tr>

                    <td>{{ $item->atlet->nama_atlet }}</td>

                    <td>{{ $item->beep_test }}</td>

                    <td>{{ $item->sprint_20m }}</td>

                    <td>{{ $item->illinois_agility }}</td>

                    <td>{{ $item->vertical_jump }}</td>

                    <td>{{ $item->push_up }}</td>

                    <td>{{ $item->fatigue_index }}</td>

                </tr>

            @endforeach

        </tbody>

    </table>



    <!-- ================= NORMALISASI ================= -->

    <h3 style="margin-top:50px;">
        Normalisasi Matriks (R)
    </h3>

    <table>

        <thead>

            <tr>

                <th>Atlet</th>
                <th>R1</th>
                <th>R2</th>
                <th>R3</th>
                <th>R4</th>
                <th>R5</th>
                <th>R6</th>

            </tr>

        </thead>

        <tbody>

            @foreach($tesfisik as $item)

                <tr>

                    <td>{{ $item->atlet->nama_atlet }}</td>

                    <td>{{ number_format($item->r1, 3) }}</td>

                    <td>{{ number_format($item->r2, 3) }}</td>

                    <td>{{ number_format($item->r3, 3) }}</td>

                    <td>{{ number_format($item->r4, 3) }}</td>

                    <td>{{ number_format($item->r5, 3) }}</td>

                    <td>{{ number_format($item->r6, 3) }}</td>

                </tr>

            @endforeach

        </tbody>

        <!================== NILAI PREFERENSI=================>

            <table>
                <h3 style="margin-top:50px;">
                    Nilai Preferensi (V)
                </h3>
                <thead>

                    <tr>

                        <th>Atlet</th>
                        <th>Nilai Preferensi</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($tesfisik as $item)

                        <tr>

                            <td>

                                {{ $item->atlet->nama_atlet }}

                            </td>

                            <td>

                                {{ number_format($item->nilai_preferensi, 3) }}

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

    </table>

@endsection