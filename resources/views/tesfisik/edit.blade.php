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

        <h2>Edit Tes Fisik</h2>

        <p>
            Perbarui hasil pengujian fisik atlet.
        </p>

    </div>


    <form action="/tesfisik/{{ $tesfisik->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">

                <label>Nama Atlet</label>

                <select name="atlet_id" required>

                    @foreach($atlet as $a)

                        <option value="{{ $a->id }}" {{ $tesfisik->atlet_id == $a->id ? 'selected' : '' }}>

                            {{ $a->nama_atlet }}

                        </option>

                    @endforeach

                </select>

            </div>



            <div class="form-group">

                <label>Tanggal Tes</label>

                <input type="date" name="tanggal_tes" value="{{ $tesfisik->tanggal_tes }}" required>

            </div>



            <div class="form-group">

                <label>Beep Test</label>

                <input type="number" step="0.01" name="beep_test" value="{{ $tesfisik->beep_test }}" required>

            </div>



            <div class="form-group">

                <label>Sprint 20 Meter</label>

                <input type="number" step="0.01" name="sprint_20m" value="{{ $tesfisik->sprint_20m }}" required>

            </div>



            <div class="form-group">

                <label>Illinois Agility</label>

                <input type="number" step="0.01" name="illinois_agility" value="{{ $tesfisik->illinois_agility }}" required>

            </div>



            <div class="form-group">

                <label>Vertical Jump</label>

                <input type="number" step="0.01" name="vertical_jump" value="{{ $tesfisik->vertical_jump }}" required>

            </div>



            <div class="form-group">

                <label>Push Up</label>

                <input type="number" step="0.01" name="push_up" value="{{ $tesfisik->push_up }}" required>

            </div>



            <div class="form-group">

                <label>Fatigue Index</label>

                <input type="number" step="0.01" name="fatigue_index" value="{{ $tesfisik->fatigue_index }}" required>

            </div>

        </div>



        <div class="button-group">

            <a href="/tesfisik" class="btn-back">

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