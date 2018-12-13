<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title> Proyecto TAW </title>

        <link rel="shortcut icon" href="{{ asset('images/fav_icon.png')}}" type="image/x-icon">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">   

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- Bulma Version 0.7.2-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/hero.css') }}">
          
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css')}}">
          
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}">
          
        <link rel="stylesheet" type="text/css" href="{{ asset('css/personal.css')}}">
      
        <!--<link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />-->


        <style>
    
            .columns:nth-child(2)
            {margin-top: -10rem;}
        </style>
    
    </head>
    <body>

        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img src="{{ asset('images/logo.png')}}" width="200" height="28">
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">
                        Inicio
                    </a>
                
                    <a class="navbar-item"  href="/trabajos">
                        Trabajos
                    </a>
    
                    <a class="navbar-item" href="/freelancers">
                        Freelancers
                    </a>
    
                
                </div>
            
                <div class="navbar-end">
                        
                        @guest
													<div class="buttons">
                            <a class="button is-info is-outlined" href="/register">
                                <strong> <i class="fas fa-user-plus"></i> Registrarse </strong>
                            </a>
    
                            <a class="button is-success is-outlined" href="/login">
                                <strong> <i class="fas fa-sign-in-alt"></i> Iniciar Sesion </strong>
														</a>	
													</div>
                        @else
													
                            
														<a class="navbar-item has-text-link" href="/publicar_trabajo">
                                <strong> <i class="fas fa-arrow-up"></i> Publicar un trabajo </strong>
                            </a>
													
                            <div class="navbar-item has-dropdown is-hoverable">

                                <a class="navbar-link has-text-success">
																	{{ auth()->user()->firstname }}
                                </a>
																
                                <a class="navbar-item">
                                   
                                </a>
                                <a class="navbar-item">
                                   
                                </a>
                                <a class="navbar-item">
                                   
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item" href="/home">
                                       <i class="fas fa-columns"></i> Dashboard
                                    </a>
                                    <a class="navbar-item" href="/perfil">
                                       <i class="fas fa-user"></i> Perfil
                                    </a>
                                    <a class="navbar-item" href="/configuracion">
                                        <i class="fas fa-cog"></i> Configuracion
                                    </a>
                                    <hr class="navbar-divider">
                                    <div class="navbar-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             <i class="fas fa-sign-out-alt"></i> {{ __('Cerrar Sesion') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
													
														

                        @endguest

                </div>
    
            </div>
        </nav>
    


    @yield('content')



    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <b> Sitio creado por Cristian, Diego y Froylan </b>
                </p>
            </div>
        </div>
        <script src="js/bulma.js"></script>
    </footer>

</body>
</html>
