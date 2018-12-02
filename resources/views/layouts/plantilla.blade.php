<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Proyecto TAW </title>

        <link rel="shortcut icon" href="images/fav_icon.png" type="image/x-icon">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- Bulma Version 0.7.2-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
        
        <link rel="stylesheet" type="text/css" href="css/hero.css">
        
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />

        <link rel="stylesheet" type="text/css" href="css/login.css">

        <style>
    
            .columns:nth-child(2)
            {margin-top: -10rem;}
        </style>
    
    </head>
    <body>

        <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="images/logo.png" width="200" height="28">
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
    
                    <a class="navbar-item" href="/tienda">
                        Tienda
                    </a>

                    <a class="navbar-item" href="/categorias">
                        Categorias
                    </a>
                
                </div>
            
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">

                            <a class="button is-warning is-outlined" href="/login">
                                <strong> <i class="fas fa-arrow-up"></i> Publicar un trabajo </strong>
                            </a>

                            <a class="button is-info is-outlined" href="/register">
                                <strong> <i class="fas fa-user-plus"></i> Registrarse </strong>
                            </a>
    
                            <a class="button is-success is-outlined" href="/login">
                                <strong> <i class="fas fa-sign-in-alt"></i> Iniciar Sesion </strong>
                            </a>
                        </div>
                    </div>
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
