@extends('layouts.app')

@section('content')

    <style>
        .page-header {
            margin-bottom: 30px;
        }

        .page-header h2 {
            font-size: 30px;
            color: #0F172A;
            font-weight: 700;
        }

        .page-header p {
            color: #64748B;
            margin-top: 5px;
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

        <h2>Edit Kriteria</h2>

        <p>
            Perbarui data kriteria dan bobot metode SAW
        </p>

    </div>


    <form action="/kriteria/{{ $kriteria->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">

                <label>Kode Kriteria</label>

                <input type="text" name="kode_kriteria" value="{{ $kriteria->kode_kriteria }}" required>

            </div>


            <div class="form-group">

                <label>Nama Kriteria</label>

                <input type="text" name="nama_kriteria" value="{{ $kriteria->nama_kriteria }}" required>

            </div>


            <div class="form-group">

                <label>Bobot</label>

                <input type="number" step="0.01" name="bobot" value="{{ $kriteria->bobot }}" required>

            </div>


            <div class="form-group">

                <label>Atribut</label>

                <select name="atribut">

                    <option value="benefit" {{ $kriteria->atribut == 'benefit' ? 'selected' : '' }}>
                        Benefit
                    </option>

                    <option value="cost" {{ $kriteria->atribut == 'cost' ? 'selected' : '' }}>
                        Cost
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label>Threshold Minimum</label>

                <input type="number" step="0.01" name="threshold" value="{{ $kriteria->threshold }}" required>

            </div>

        </div>


        <div class="button-group">

            <a href="/kriteria" class="btn-back">

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