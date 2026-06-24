<x-guest-layout>

    <h1 style="
    font-size:36px;
    font-weight:700;
    color:#0F172A;
    margin-bottom:10px;
">
        Selamat Datang 👋
    </h1>

    <p style="
    color:#64748B;
    margin-bottom:40px;
">
        Silakan masuk ke sistem SPK Kelayakan Fisik Atlet.
    </p>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email</label>

            <input type="email" name="email" value="{{ old('email') }}" required style="
            width:100%;
            padding:15px;
            border:1px solid #CBD5E1;
            border-radius:18px;
            margin-top:10px;
            margin-bottom:25px;
            ">
        </div>


        <div>

            <label>Password</label>

            <input type="password" name="password" required style="
            width:100%;
            padding:15px;
            border:1px solid #CBD5E1;
            border-radius:18px;
            margin-top:10px;
            margin-bottom:25px;
            ">
        </div>


        <div style="margin-bottom:30px;">
            <input type="checkbox" name="remember">
            Remember Me
        </div>


        <button type="submit" style="
        width:100%;
        background:#16A34A;
        color:white;
        padding:15px;
        border:none;
        border-radius:999px;
        font-weight:600;
        cursor:pointer;
        ">
            Login
        </button>

    </form>


</x-guest-layout>