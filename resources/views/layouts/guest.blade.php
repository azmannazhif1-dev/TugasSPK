<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Atlet</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #F8FAFC;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-box {
            width: 450px;
            background: white;
            padding: 40px;
            border-radius: 30px;
            border: 1px solid #E2E8F0;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        }
    </style>


</head>

<body>


    <div class="login-box">

        {{ $slot }}

    </div>


</body>

</html>