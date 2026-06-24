<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Laporan Hasil Ranking Atlet</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h2,
        h3 {
            text-align: center;
            margin-bottom: 5px;
        }

        .info {
            margin-bottom: 20px;
        }

        .info p {
            margin: 3px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th {
            background: #eeeeee;
            text-align: center;
            padding: 8px;
        }

        td {
            padding: 7px;
            text-align: center;
        }

        .layak {
            color: green;
            font-weight: bold;
        }

        .tidak-layak {
            color: red;
            font-weight: bold;
        }

        .footer {
            margin-top: 40px;
            text-align: right;
        }
    </style>
</head>

<body>

    <h2>SISTEM PENDUKUNG KEPUTUSAN</h2>
    <h3>KELAYAKAN FISIK ATLET MENGGUNAKAN METODE SAW</h3>

    <hr>

    <div class="info">
        <p><strong>Tanggal Cetak :</strong> {{ date('d F Y') }}</p>
        <p><strong>Jumlah Atlet :</strong> {{ count($tesfisik) }}</p>
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

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->atlet->nama_atlet }}</td>

                    <td>{{ number_format($item->nilai_preferensi, 3) }}</td>

                    <td>
                        @if($item->status_threshold == 'Layak')
                            <span class="layak">
                                Layak
                            </span>
                        @else
                            <span class="tidak-layak">
                                Tidak Layak
                            </span>
                        @endif
                    </td>

                    <td>

                        @if($item->status_threshold == 'Layak')
                            Direkomendasikan
                        @else
                            Tidak Direkomendasikan
                        @endif

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

    <div class="footer">

        <br><br><br>

        Banjarbaru, {{ date('d F Y') }}

        <br><br><br><br>

        _______________________

        <br>

        Pelatih

    </div>

</body>

</html>