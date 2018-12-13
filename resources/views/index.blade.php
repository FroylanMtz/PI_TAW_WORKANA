@extends('layouts.plantilla')

@section('content')

<section class="hero is-info is-medium is-bold">
    <div class="hero-body" style="background-image: url('images/programador.jpg');">
        <div class="container has-text-centered"  >
            <h1 class="title">
                Encuentra trabajo en cualquiera de los proyectos que ofrecen las distintas empresas
            </h1>
            <h2 class="subtitle">
                Encuentra proyectos increibles que podras realizar en la comodidad de tu casa en tus tiempos.
            </h2>
        </div>
    </div>
</section>

<section class="container">
    <div class="columns features">
        
        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-mobile"></i>
                    <p>App Movil</p>
                </div>

                <div class="card-content">
                    <div class="content">
                        <h4>¿Necesitas una app movil? </h4>
                        <p> Mira los cientos de proyectos que ofrecen los desarrolladores de la plataforma, o pide que te realicen una app a la medida publicando un trabajo y aceptando solo las propuestas que consideres dentro de tu presupuesto </p>
                        <p><a href="/publicar_trabajo"> Publica el trabajo que necesitas </a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-desktop"></i>
                    <p>Aplicacion de Escritorio</p>
                </div>

                <div class="card-content">
                    <div class="content">
                        <h4>¿Quieres una aplicacion de Escritorio?. </h4>
                        <p>Una aplicación de escritorio es aquella que se encuentra instalado en el ordenador
                          o sistema de almacenamiento  y podemos hacer que encuentres a las personas mas profecionales
                          para crear una app a tu medida sin necesidad de arriesgar tu dinero.</p>
                        <p><a href="/publicar_trabajo">Expresa lo que deseas</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-pencil-ruler"></i>
                    <p>¿Multiplataforma?</p>
                </div>

                <div class="card-content">
                    <div class="content">
                        <h4>Todo lo que quieras Publicalo </h4>
                        <p>Deseguro encontraras a muchas personas que puedan hacer lo que pides de una manera muy rapida y segura no te limites a lo que que deseas encontraras las mejores ofertas. </p>
                        <p><a href="/publicar_trabajo">Hazlo saber</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="intro column " style="background-image: url('images/alsa.jpg');">
        <h2 class="title has-text-info">Haz crecer tu negocio pidiendo que te realicen eso que tanto deseas</h2><br>
        <p class="subtitle has-text-info">Un monton de personas esperan con ancias el poder ayudarte a cumplir tus objetivos.</p>
    </div>

    <br>

    <div class="intro column is-12 has-background-info">
            <h1 class="title">
                Empieza ahora mismo a postular tus propuestas.
            </h1>
            <p class="subtitle">
                Cada dia hay cientos de proyectos que estan en busca de un buen desarrollador que cumpla los sueños de otra persona. Registrate ahora mismo y empieza a posularte para los proyectos.
            </p>

            <div>
                <a href="/publicar_trabajo" class="button is-link is-large">¿Que esperas..?</a>
            </div>
    </div>



    <div class="sandbox">
        <div class="tile is-ancestor">
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">¿App de Restaurante?</p>
                    <p class="subtitle">Claro solo pidelo</p>
                </article>
            </div>
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Aplicacion web</p>
                    <p class="subtitle">Son de las cotisadas</p>
                </article>
            </div>
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Sin perder Tu dinero</p>
                    <p class="subtitle">Tu unica preocupacion solo sera...</p>
                    <div class="content">
                        <p>¿......?</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="tile is-ancestor">
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Elije al mejor</p>
                    <p class="subtitle">Tu decides</p>
                    <div class="content">
                        <p>Tenemos la opcion de que puedas agregar algun comentario en base a el resultado que esperabas.</p>
                    </div>
                </article>
            </div>
            <div class="tile is-parent is-8 is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Califica</p>
                    <p class="subtitle">Claro que se puede</p>
                    <div class="content">
                        <p>¿asi o mas confiable?.</p>
                    </div>
                </article>
            </div>
        </div>
      
    </div>
</section>

@endsection