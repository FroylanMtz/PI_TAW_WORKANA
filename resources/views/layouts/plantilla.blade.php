<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>bulma cards</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">


    <link rel='stylesheet' href='{{asset('css/bulma.css')}}'>
    <link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('css/cards.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/hero.css')}}">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />

    


</head>

<body>

    <nav class="navbar">
        <div class="container">
    
            <div class="navbar-brand">
                <a class="navbar-item" href="../">
                    <img src="../images/bulma.png" alt="Logo">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                <span></span>
                <span></span>
                </span>
            </div>
    
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item" href="/">
                        Home
                    </a>

                    <a class="navbar-item" href="/proyectos">
                        Proyectos
                    </a>

                    <a class="navbar-item">
                        Features
                    </a>

                    <a class="navbar-item">
                        Team
                    </a>

                    <a class="navbar-item">
                        Archives
                    </a>

                    <a class="navbar-item">
                        Help
                    </a>


                    <!--<div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                                Account
                            </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                    Dashboard
                                </a>
                            <a class="navbar-item">
                                    Profile
                                </a>
                            <a class="navbar-item">
                                    Settings
                                </a>
                            <hr class="navbar-divider">
                            <div class="navbar-item">
                                Logout
                            </div>
                        </div>
                    </div>-->

                    <span class="navbar-item">
                        <a class="button is-black is-outlined" href="#">

                            <span title="Hello from the other side">Registrarse</span>
                        </a>
                    </span>

                    <span class="navbar-item">
                        <a class="button is-black is-outlined" href="#">

                            <span title="Hello from the other side">Iniciar Sesion</span>
                        </a>
                    </span>

                </div>
            </div>
            
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <div class="soc">
                    <a href="#"><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                </div>
                <p>
                    Proyecto creado por: Cristian, Diego y Froylán
                </p>
            </div>
        </div>
    </footer>

    <script src="{{asset('js/bulma.js')}}"></script>
    <script src="https://unpkg.com/bulma-modal-fx/dist/js/modal-fx.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    
    
</body>
</html>