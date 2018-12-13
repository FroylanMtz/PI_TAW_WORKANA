@extends('layouts.plantilla')

@section('content')

<section class="container">

    

    <div class="box has-background-info">

        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="/">ProyectoTAW</a></li>
                <li class="is-active"><a href="#" aria-current="page">PerfilCliente</a></li>
            </ul>
        </nav>

        <p class="has-text-white is-size-3">
            {{$usuario->firstname . ' ' . $usuario->lastname}} [Empresa]
        </p>
    </div>
		
		<div class="container">
			

				<div class="card">
					
					<div class="card-content">
						
						<div class="columns">
							<div class="column is-2">
								<figure class="image is-128x128">
									<img class="is-rounded" src="{{ asset('images/' . $usuario->photo) }}">
								</figure>
							</div>
							
							<div class="column is-7">
								
								<h2 class="main-skill">
								<span class=" ">Programación y Tecnología</span>
								</h2>
								<p>5/5 <i class="fas fa-star"></i> </p>
								<p> Proyectos Publicados: 0 </p>
								<p> Pagos del Proyecto: 0 (%0) </p>

								
							</div>
							

						</div>
					</div>
					
				</div>
		</div>

</section>
    
@endsection