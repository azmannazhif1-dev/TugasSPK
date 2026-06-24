@extends('layouts.app')

@section('content')

    <style>
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-title h2 {
            color: #0F172A;
            font-size: 30px;
            font-weight: 700;
        }

        .page-title p {
            color: #64748B;
            margin-top: 5px;
            font-size: 14px;
        }

        .table-container {
            background: white;
            border: 1px solid #E2E8F0;
            border-radius: 24px;
            overflow-x: auto;
        }

        tbody tr {
            transition: .2s;
        }

        tbody tr:hover {
            background: #F8FAFC;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-edit {
            background: #F59E0B;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 999px;
            font-size: 13px;
        }

        .btn-delete {
            background: #EF4444;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 999px;
            cursor: pointer;
            font-size: 13px;
        }

        .empty-data {
            text-align: center;
            color: #94A3B8;
            padding: 35px;
        }
    </style>


    <div class="page-header">

        <div class="page-title">

            <h2>
                Tes Fisik Atlet
            </h2>

            <p>
                Data hasil pengukuran kondisi fisik atlet
            </p>

        </div>


        <a href="/tesfisik/create" class="btn">

            <i data-lucide="plus"></i>

            Tambah Tes Fisik

        </a>

    </div>


    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>No</th>
                    <th>Nama Atlet</th>
                    <th>Tanggal Tes</th>
                    <th>Beep Test</th>
                    <th>Sprint 20 m</th>
                    <th>Illinois Agility</th>
                    <th>Vertical Jump</th>
                    <th>Push Up</th>
                    <th>Fatigue Index</th>
                    <th>Aksi</th>

                </tr>

            </thead>


            <tbody>

                @forelse($tesfisik as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $item->atlet->nama_atlet }}
                        </td>

                        <td>
                            {{ $item->tanggal_tes }}
                        </td>

                        <td>
                            {{ $item->beep_test }}
                        </td>

                        <td>
                            {{ $item->sprint_20m }}
                        </td>

                        <td>
                            {{ $item->illinois_agility }}
                        </td>

                        <td>
                            {{ $item->vertical_jump }}
                        </td>

                        <td>
                            {{ $item->push_up }}
                        </td>

                        <td>
                            {{ $item->fatigue_index }}
                        </td>

                        <td>

                            <div class="action-buttons">

                                <a href="/tesfisik/{{ $item->id }}/edit" class="btn-edit">

                                    Edit

                                </a>


                                <form action="/tesfisik/{{ $item->id }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-delete"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data tes fisik ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="10">

                            <div class="empty-data">

                                Belum ada data tes fisik.

                            </div>

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