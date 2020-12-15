@extends('layouts.plantilla')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>



    <!-- Styles -->
    <style>
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
            margin-top: 5px;
            font-family: 'Raleway', sans-serif;

        }

        header {
            width: 100%;
            margin-bottom: 20px;

        }

        .wrapper {
            width: 90%;
            /* Establecemos que el ancho sera del 90% */
            max-width: 1000px;
            /* Aqui le decimos que el ancho máximo sera de 1000px */
            margin: auto;
            /* Centramos los elementos */
            overflow: hidden;
            /* Eliminamos errores de float */
        }

        header .logo {
            color: black;
            font-size: 70px;
            line-height: 200px;
            float: left;
            font-family: 'Raleway', sans-serif;

        }

        header nav {
            float: right;
            line-height: 200px;
            margin-right: 15px;
        }


        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 0px;
            top: 18px;
        }

        .container {
            margin-top: 80px;
            font-family: 'Raleway', sans-serif;
            font-size: 30px;
            color: whitesmoke;

        }

        .social {
            margin-top: 50px;
            font-size: 30px;
            

        }

        .social .fas,
        .social .fab {
            color: black
        }
    </style>
</head>

<body>




    <header>
        <div class="wrapper">
            <div class="logo">
                Garden of cats &nbsp; <i class="fas fa-cat"></i>

            </div>


            <div class="flex-center position-ref full-height">
                <nav>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}">Home</a>
                        @else
                        <a href="{{ route('login') }}"><button class="btn btn-outline-light btn-lg">
                                Login</button></a>&nbsp;&nbsp;

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"><button
                                class="btn btn-outline-light btn-lg">Register</button></a>
                        @endif
                        @endauth
                    </div>
                    @endif



                </nav>

            </div>

        </div>

    </header>



    <div class="container text-center">

        <h2><strong>Are you a catlover?. Would you like to adopt an adult cat or a kitten?.</h2>
        <h2><strong> If the answer is yes, please register or login.</h2>
    </div>

    <br>

    <div class="social text-center ">
        <a href="http://facebook.es"><i class="fab fa-facebook" title="Facebook"></i></a>&nbsp;
        <a href="http://www.twitter.com"><i class="fab fa-twitter" title="Twitter"></i></a>&nbsp;
        <a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram" title="Instagram"></i></a>&nbsp;
        <a href="http://www.facebook.com"><i class="fas fa-at" title="Contact us"></i></a>&nbsp;
        <a href="http://www.facebook.com"><i class="fas fa-map-marker" title="Location"></i></a>



    </div>













</body>

</html>