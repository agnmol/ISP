<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <style>

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }




        .container {
            width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<div id="body">
    <div id="header">
        <h3 id="slogan">Viešbutis</h3>
    </div>
    <div id="content">
        <h1 style="text-align: center">Prisijungimas</h1>
{{--        <form action="" method="post">--}}
            <div class="container">
                <label for="uname"><b>Vartotojo vardas</b></label>
                <input type="text" placeholder="Įveskite vartotojo vardą" name="uname" required>

                <label for="psw"><b>Slaptažodis</b></label>
                <input type="password" placeholder="Įveskite slaptažodį" name="psw" required>

                <button onclick="window.location='{{ url("home") }}'" type="submit">Prisijungti</button>
                <button onclick="window.location='{{ url("register") }}'" type="submit">Registruotis</button>
            </div>
{{--        </form>--}}

    </div>
    <div id="footer">

    </div>
</div>
</body>
</html>
