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
            Tambah Kriteria
        </h2>

        <p>
            Masukkan data kriteria untuk metode SAW
        </p>

    </div>


    <form action="/kriteria" method="POST">

        @csrf

        <div class="form-grid">

            <div class="form-group">

                <label>Kode Kriteria</label>

                <input type="text" name="kode_kriteria" placeholder="C1" required>

            </div>


            <div class="form-group">

                <label>Nama Kriteria</label>

                <input type="text" name="nama_kriteria" placeholder="Contoh: VO2 Max" required>

            </div>


            <div class="form-group">

                <label>Bobot</label>

                <input type="number" step="0.01" name="bobot" placeholder="0.30" required>

            </div>


            <div class="form-group">

                <label>Atribut</label>

                <select name="atribut">

                    <option value="Benefit">
                        Benefit
                    </option>

                    <option value="Cost">
                        Cost
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label>Threshold Minimum</label>

                <input type="number" step="0.01" name="threshold" placeholder="45" required>

            </div>

        </div>


        <div class="button-group">

            <a href="/kriteria" class="btn-back">

                Kembali

            </a>


            <button type="submit" class="btn">

                <i data-lucide="save"></i>

                Simpan Data

            </button>

        </div>

    </form>


    <script>

        lucide.createIcons();

    </script>

@endsection