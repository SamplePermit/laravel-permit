<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    TCAA PERMIT
                </div>

                <div class="links">
                    <a href="http://localhost/tcaa-permit/public/dashboard">Dashboard</a>
                    <a href="http://localhost/tcaa-permit/public/help">Help</a>
                    <a href="http://localhost/tcaa-permit/public/faq">FAQ</a>
                    <a href="https://github.com/SamplePermit/laravel-permit">GitHub</a>
                </div>
                <br/>
                <br/>
                <div class="links">
                    <a href="http://localhost/tcaa-permit/public/operators">Operators</a>
                    <a href="http://localhost/tcaa-permit/public/aircraft">Aircrafts</a>
                    <a href="http://localhost/tcaa-permit/public/applications">Applications</a>
                    <a href="http://localhost/tcaa-permit/public/permits">Permit</a>
                </div>
            </div>
        </div>
    </body>
</html>
