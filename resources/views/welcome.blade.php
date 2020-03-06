<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kais Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .iobirthday {
        color: #fff !important;
        padding: 5px 10px;
        display: inline-block;
        font-size: 20px;
    }

    @keyframes glowing {
        0% {
            background-color: #f03c3c;
            box-shadow: 0 0 3px #f03c3c;
        }

        50% {
            background-color: #d91626;
            box-shadow: 0 0 10px #d91626;
        }

        100% {
            background-color: #f03c3c;
            box-shadow: 0 0 3px #f03c3c;
        }
    }

    .iobirthday {
        -webkit-animation: glowing 1000ms infinite;
        -moz-animation: glowing 1000ms infinite;
        -o-animation: glowing 1000ms infinite;
        animation: glowing 1000ms infinite;
    }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Kais Blog
            </div>

            <div class="links">
                <!-- <a href="{{route('birthday')}}" class="iobirthday">Anh's Birthday</a> -->
                <a href="#">Laracasts</a>
                <a href="#">News</a>
                <a href="#">Blog</a>
                <a href="#">Nova</a>
                <a href="#">Forge</a>
                <a href="#">Vapor</a>
                <a href="#">GitHub</a>
            </div>
        </div>
    </div>
</body>

</html>
