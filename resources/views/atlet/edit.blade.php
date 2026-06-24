@extends('layouts.app')

@section('content')

    <style>
        .page-header {
            margin-bottom: 30px;
        }

        .page-header h2 {
            font-size: 30px;
            color: #0F172A;
            margin-bottom: 5px;
        }

        .page-header p {
            color: #64748B;
            font-size: 14px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 500;
            color: #334155;
            margin-bottom: 8px;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 35px;
        }

        .btn-back {

            background: #E2E8F0;
            color: #334155;

            padding: 12px 24px;

            border-radius: 9999px;

            text-decoration: none;

            font-weight: 500;

            transition: .2s;

        }

        .btn-back:hover {

            background: #CBD5E1;

        }
    </style>


    <div class="page-header">

        <h2>
            Edit Data Atlet
        </h2>

        <p>
            Perbarui informasi atlet
        </p>

    </div>


    <form action="/atlet/{{ $atlet->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">

                <label>Kode Atlet</label>

                <input type="text" name="kode_atlet" value="{{ $atlet->kode_atlet }}" required>

            </div>


            <div class="form-group">

                <label>Nama Atlet</label>

                <input type="text" name="nama_atlet" value="{{ $atlet->nama_atlet }}" required>

            </div>


            <div class="form-group">

                <label>Jenis Kelamin</label>

                <select name="jenis_kelamin">

                    <option value="L" {{ $atlet->jenis_kelamin == 'L' ? 'selected' : '' }}>
                        Laki-laki
                    </option>

                    <option value="P" {{ $atlet->jenis_kelamin == 'P' ? 'selected' : '' }}>
                        Perempuan
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label>Umur</label>

                <input type="number" name="umur" value="{{ $atlet->umur }}" required>

            </div>


            <div class="form-group">

                <label>Cabang Olahraga</label>

                <input type="text" name="cabang_olahraga" value="{{ $atlet->cabang_olahraga }}" required>

            </div>

        </div>


        <div class="button-group">

            <a href="/atlet" class="btn-back">

                Kembali

            </a>


            <button type="submit" class="btn">

                <i data-lucide="save"></i>

                Update Data

            </button>

        </div>

    </form>


    <script>

        lucide.createIcons();

    </script>

@endsection