<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Autoescuela</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/principal.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*html, body {
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

            .links > a {
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
            --------------*/

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <!--<div class="title m-b-md">
                    Laravel
                </div>-->
                <div id="background-carousel">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item" style="background-image:url({{asset('img/background/back1.jpg')}})"></div>
                        <div class="item" style="background-image:url({{asset('img/background/back2.jpg')}})"></div>
                        <div class="item" style="background-image:url({{asset('img/background/back3.jpg')}})"></div>  
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-wrapper">
            <!-- PAGE CONTENT -->
                <div class="container-fluid">
                    
                    <div class = "row justify-content-center align-items-center" style="height: 80vh">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary bouncy align-middle">Acceder</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary bouncy align-middle mr-5">Iniciar sesión</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary bouncy align-middle" style="animation-delay:0.07s">Registrarse</a>
                                @endif
                        @endauth
                    </div>
                </div>
            <!-- PAGE CONTENT -->
            </div>
        <!--<div id="app" class="content">
            <example-component></example-component>
        </div>-->
    <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    </body>
</html>
