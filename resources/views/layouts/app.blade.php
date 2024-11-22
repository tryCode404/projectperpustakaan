<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistem Informasi Perpustakaan') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        body {
            background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        main {
            padding: 20px 0;
        }

        .auth-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .auth-box {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 20px 25px rgba(0, 0, 0, 0.2);
            max-width: 430px;
            width: 100%;
        }

        .auth-box .db img {
            margin-bottom: 20px;
            animation: fadeIn 1.5s;
        }

        .input-group .input-group-text {
            border-radius: 12px 0 0 12px;
            background-color: #6B73FF;
            color: #fff;
            border: none;
        }

        .form-control {
            border-radius: 0 12px 12px 0;
            border: 1px solid #ddd;
            padding: 10px 15px;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #6B73FF;
            box-shadow: 0px 0px 8px rgba(107, 115, 255, 0.5);
        }

        .btn {
            border-radius: 12px;
            padding: 10px 15px;
            font-size: 16px;
        }

        .btn-success {
            background: linear-gradient(45deg, #6B73FF, #000DFF);
            border: none;
            transition: background 0.3s ease;
        }

        .btn-success:hover {
            background: linear-gradient(45deg, #000DFF, #6B73FF);
        }

        .alert {
            border-radius: 8px;
            font-size: 14px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>