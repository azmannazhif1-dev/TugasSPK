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
            color: #334155;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn-back {
            background: #E2E8F0;
            color: #334155;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 999px;
            font-weight: 500;
        }

        .btn-back:hover {
            background: #CBD5E1;
        }
    </style>



    <div class="page-header">

        <h2>Tambah Tes Fisik</h2>

        <p>
            Masukkan hasil pengujian fisik atlet.
        </p>

    </div>



    <form action="/tesfisik" method="POST">

        @csrf

        <div class="form-grid">

            <div class="form-group">

                <label>Nama Atlet</label>

                <select name="atlet_id" required>

                    <option value="">
                        -- Pilih Atlet --
                    </option>

                    @foreach($atlet as $a)

                        <option value="{{ $a->id }}">

                            {{ $a->nama_atlet }}

                        </option>

                    @endforeach

                </select>

            </div>



            <div class="form-group">

                <label>Tanggal Tes</label>

                <input type="date" name="tanggal_tes" required>

            </div>



            <div class="form-group">

                <label>Beep Test</label>

                <input type="number" step="0.01" name="beep_test" placeholder="Masukkan nilai beep test" required>

            </div>



            <div class="form-group">

                <label>Sprint 20 Meter</label>

                <input type="number" step="0.01" name="sprint_20m" placeholder="Masukkan waktu sprint" required>

            </div>



            <div class="form-group">

                <label>Illinois Agility</label>

                <input type="number" step="0.01" name="illinois_agility" placeholder="Masukkan waktu agility" required>

            </div>



            <div class="form-group">

                <label>Vertical Jump</label>

                <input type="number" step="0.01" name="vertical_jump" placeholder="Masukkan tinggi lompatan" required>

            </div>



            <div class="form-group">

                <label>Push Up</label>

                <input type="number" step="0.01" name="push_up" placeholder="Jumlah push up" required>

            </div>



            <div class="form-group">

                <label>Fatigue Index</label>

                <input type="number" step="0.01" name="fatigue_index" placeholder="Masukkan fatigue index" required>

            </div>

        </div>



        <div class="button-group">

            <a href="/tesfisik" class="btn-back">

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