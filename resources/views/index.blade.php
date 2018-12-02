@extends('layouts.plantilla')

@section('content')

<section class="hero is-info is-medium is-bold">
    <div class="hero-body" style="background-image: url('images/work.png');">
        <div class="container has-text-centered"  >
            <h1 class="title">
                Encuentra trabajo en cualquiera de los proyectos que ofrecen las distintas empresas
            </h1>
            <h2 class="subtitle">
                Encuentra proyectos increibles que podras realizar en la comidad de tu casa en tus tiempos.
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
                        <p><a href="#"> Visitar categoria de desarrollo movil </a></p>
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
                        <h4>Tristique senectus et netus et. </h4>
                        <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-4">
            <div class="card is-shady">
                <div class="card-image has-text-centered">
                    <i class="fa fa-pencil-ruler"></i>
                    <p>Aplicacion de Escritorio</p>
                </div>

                <div class="card-content">
                    <div class="content">
                        <h4>Tristique senectus et netus et. </h4>
                        <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="intro column " style="background-image: url('images/workspace.png');">
        <h2 class="title has-text-info">Haz crecer tu negocio pidiendo que te realicen eso que tanto deseas</h2><br>
        <p class="subtitle has-text-info">Vel fringilla est ullamcorper eget nulla facilisi. Nulla facilisi nullam vehicula ipsum a. Neque egestas congue quisque egestas diam in arcu cursus.</p>
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
                <a class="button is-link is-large">Registrate ahora mismo</a>
            </div>
    </div>



    <div class="sandbox">
        <div class="tile is-ancestor">
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Hello World</p>
                    <p class="subtitle">What is up?</p>
                </article>
            </div>
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Foo</p>
                    <p class="subtitle">Bar</p>
                </article>
            </div>
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Third column</p>
                    <p class="subtitle">With some content</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="tile is-ancestor">
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Side column</p>
                    <p class="subtitle">With some content</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                    </div>
                </article>
            </div>
            <div class="tile is-parent is-8 is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Main column</p>
                    <p class="subtitle">With some content</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                    </div>
                </article>
            </div>
        </div>
        <div class="tile is-ancestor">
            <div class="tile is-parent is-8 is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Murphy's law</p>
                    <p class="subtitle">Anything that can go wrong will go wrong</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                    </div>
                </article>
            </div>
            <div class="tile is-parent is-shady">
                <article class="tile is-child notification is-white">
                    <p class="title">Main column</p>
                    <p class="subtitle">With some content</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection