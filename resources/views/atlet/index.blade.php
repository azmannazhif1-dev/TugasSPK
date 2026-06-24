@extends('layouts.app')

@section('content')

    <style>
        .page-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;

        }

        .page-title h2 {

            color: #0F172A;

            font-size: 30px;

            font-weight: 700;

            margin-bottom: 5px;

        }

        .page-title p {

            color: #64748B;

            font-size: 14px;

        }

        .search-box {

            margin-bottom: 25px;

        }

        .search-box input {

            max-width: 350px;

        }

        .table-container {

            overflow: hidden;

            border: 1px solid #E2E8F0;

            border-radius: 24px;

            background: white;

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

            padding: 10px 18px;

            border-radius: 9999px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 500;

        }

        .btn-delete {

            background: #EF4444;

            color: white;

            padding: 10px 18px;

            border-radius: 9999px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 500;

        }

        .empty-data {

            text-align: center;

            color: #94A3B8;

            padding: 40px;

        }
    </style>


    <div class="page-header">

        <div class="page-title">

            <h2>
                Data Atlet
            </h2>

            <p>
                Kelola data identitas atlet
            </p>

        </div>


        <a href="/atlet/create" class="btn">

            <i data-lucide="plus"></i>

            Tambah Atlet

        </a>

    </div>


    <div class="search-box">

        <input type="text" placeholder="Cari nama atlet...">

    </div>


    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>No</th>

                    <th>Kode Atlet</th>

                    <th>Nama Atlet</th>

                    <th>Jenis Kelamin</th>

                    <th>Umur</th>

                    <th>Cabang Olahraga</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse($atlet as $a)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $a->kode_atlet }}</td>

                        <td>{{ $a->nama_atlet }}</td>

                        <td>{{ $a->jenis_kelamin }}</td>

                        <td>{{ $a->umur }}</td>

                        <td>{{ $a->cabang_olahraga }}</td>

                        <td>

                            <div class="action-buttons">

                                <a href="/atlet/{{ $a->id }}/edit" class="btn-edit">

                                    Edit

                                </a>

                                <form action="/atlet/{{ $a->id }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-delete"
                                        onclick="return confirm('Data yang sudah dihapus tidak dapat dikembalikan.\n\nYakin ingin menghapus data atlet ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7">

                            <div class="empty-data">

                                Belum ada data atlet

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