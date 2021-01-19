<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">



    <!-- CSS-->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="{{asset('fontAwesome/fontawesome/css/all.min.css')}}">

    <style>
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

        .card-header {
            font-family: 'Dancing Script', cursive;
            text-align: center;
            font-size: 60px;
            background: #4568dc;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,
                    #b06ab3,
                    #4568dc);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right,
                    #b06ab3,
                    #4568dc);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: whitesmoke;

        }

        .card-body {
            background: #4568dc;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,
                    #b06ab3,
                    #4568dc);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right,
                    #b06ab3,
                    #4568dc);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: whitesmoke;
        }

        .form-group {
            font-family: 'Dancing Script', cursive;
            font-size: 30px;
        }

        .footer {
            font-family: 'Raleway', sans-serif;
            margin-top: 60px;
            font-size: 25px;
            color: whitesmoke;
        }

        .btn-primary {
            font-family: 'Raleway', sans-serif;
            font-size: 25px;

        }

        .btn-link {
            color: whitesmoke;
            font-size: 25px;
            text-align: center;
        }

        .form-control {
            font-size: 30px;
        }

        .text {
            font-family: 'Raleway', sans-serif;
            font-size: 35px;
            color: whitesmoke;
        }

        #dropdownMenuButton {
            width: 240px;
        }

        #navbarDropdown {
            width: 165px;
        }

        .dropdown-menu {
            background: #4568dc;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,
                    #b06ab3,
                    #4568dc);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right,
                    #b06ab3,
                    #4568dc);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            font-family: 'Raleway', sans-serif;

        }

        .dropdown-item {
            color:black;
            font-size: 20px;
            font-weight: bold;

        }

        .dropdown {
            margin-top: 15px;
        }

        .container2 {
            float: right;
            margin-left: 250px;
            margin-top: 70px;

        }
    </style>
</head>

<body>

    <header>
        <div class="wrapper">
            <div class="logo">
                Garden of cats &nbsp; <i class="fas fa-cat"></i>
                
            </div>

            <div class="container2">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
    
                    @else
                    <li class="nav-item dropdown">
                        <button id="navbarDropdown" class="btn btn-success dropdown-toggle  btn-lg" href="#" type="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </button>
    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>

    </header>
    </div>
    <div id="app">

        <div class="dropdown">
            <div class="text-center">
                <p class="text-center text">Welcome admin {{ Auth::user()->name }}. What do you want to do?.</p><br>
                <button class="btn btn-success dropdown-toggle btn-lg " type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Options
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{url('/admin/addAdult')}}">Add an adult cat</a>
                    <a class="dropdown-item" href="#">Add a Kitten</a>
                    <a class="dropdown-item" href="#">Add a special case</a>
                    <a class="dropdown-item" href="{{url('/admin/adultCats')}}">Consult adult cats</a>
                    <a class="dropdown-item" href="#">Consult kittens</a>
                    <a class="dropdown-item" href="#">Consult special cases</a>
                    <a class="dropdown-item" href="#">Consult users</a>
                </div><br><br>
            </div>
        </div>
        
    </div>




    <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="footer text-center">
        <footer> <i class="fas fa-copyright"></i> 2020 Sergi Sánchez </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>



</body>

</html>