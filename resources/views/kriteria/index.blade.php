@extends('layouts.app')

@section('content')

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">

        <div>
            <h2 style="font-size:30px;color:#0F172A;font-weight:700;">
                Kriteria & Bobot
            </h2>

            <p style="color:#64748B;margin-top:5px;">
                Daftar kriteria yang digunakan dalam perhitungan SAW.
            </p>
        </div>

        <a href="/kriteria/create" class="btn">
            <i data-lucide="plus"></i>
            Tambah Kriteria
        </a>

    </div>


    <div style="
        background:white;
        border:1px solid #E2E8F0;
        border-radius:24px;
        overflow:hidden;
        ">

        <table>

            <thead>

                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                    <th>Atribut</th>
                    <th>Batas Minimum</th>
                    <th>Aksi</th>
                </tr>

            </thead>


            <tbody>

                @forelse($kriteria as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $item->kode_kriteria }}
                        </td>

                        <td>
                            {{ $item->nama_kriteria }}
                        </td>

                        <td>
                            {{ $item->bobot }}
                        </td>

                        <td>

                            @if($item->atribut == 'benefit')

                                <span style="
                                            background:#DCFCE7;
                                            color:#166534;
                                            padding:7px 15px;
                                            border-radius:999px;
                                            font-size:13px;
                                            font-weight:600;
                                            ">
                                    Benefit
                                </span>

                            @else

                                <span style="
                                            background:#FEE2E2;
                                            color:#991B1B;
                                            padding:7px 15px;
                                            border-radius:999px;
                                            font-size:13px;
                                            font-weight:600;
                                            ">
                                    Cost
                                </span>

                            @endif

                        </td>

                        <td>
                            {{ $item->threshold }}
                        </td>

                        <td>

                            <div style="display:flex;gap:10px;">

                                <a href="/kriteria/{{ $item->id }}/edit" style="
                                        background:#F59E0B;
                                        color:white;
                                        text-decoration:none;
                                        padding:10px 18px;
                                        border-radius:999px;
                                        font-size:13px;
                                        ">

                                    Edit

                                </a>


                                <form action="/kriteria/{{ $item->id }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" style="
                                            background:#EF4444;
                                            color:white;
                                            border:none;
                                            padding:10px 18px;
                                            border-radius:999px;
                                            cursor:pointer;
                                            font-size:13px;
                                            ">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7" style="
                                text-align:center;
                                padding:30px;
                                color:#94A3B8;
                                ">

                            Belum ada data kriteria.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <script>
        lucide.createIcons();
    </script>

@endsection