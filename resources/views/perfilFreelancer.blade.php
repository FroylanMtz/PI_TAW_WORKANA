@extends('layouts.plantilla')

@section('content')

<section class="container">

    

    <div class="box has-background-info">

        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="/">ProyectoTAW</a></li>
                <li class="is-active"><a href="#" aria-current="page">Freelancers</a></li>
            </ul>
        </nav>

        <p class="has-text-white is-size-3">
            {{$usuario->firstname . ' ' . $usuario->lastname}} [Freelancer]
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

						

						@if($usuario->privacity == 'Publico')
						
							<p class="is-size-4"> <i> "{{$usuario->acerca}}" </i> </p>
							<br>
							<p class="is-size-4"> {{$usuario->about}} </p>

							<br>
							<br>


							<p>Categoria:</p>
							<p class="is-size-5" > {{$categoria->name}} </p>


							<p> Telefono: </p>
							<p class="is-size-5"> {{$usuario->phone}} </p>


							<p> Habilidades: </p>
							<p class="is-size-5"> {{$usuario->skills}} </p>
						@else
							<p>
								<i>
									Este perfil es privado
								</i>
							</p>
							<p>Categoria:</p>
							<p class="is-size-5" > {{$categoria->name}} </p>
							<p> Habilidades: </p>
							<p class="is-size-5"> {{$usuario->skills}} </p>
						@endif
						
						
					</div>
					<div class="column is-2 has-text-centered">
						<p> Costo/hora: <p class="has-text-link"> {{$usuario->salary}} </p> </p>
						<p> Proyectos trabajados: <p class="has-text-link"> {{$totalTrabajos}} </p> </p>
						<p> Calificacion:  <p class="has-text-warning" > {{$rankingUsuario}} <i class="fas fa-star"></i> </p> </p>
					</div>
				</div>
			</div>
		</div>


		<div class="card">
			<div class="card-content has-background-info">
				<div class="columns">
					<div class="column is-12">
						<p>
							Proyectos en los que ha trabajado este freelancer
						</p>
					</div>
				</div>
			</div>
		</div>


		@foreach($trabajos as $trabajo)
			<div class="card">
				
				<header class="card-header">

					<p class="card-header-title is-size-4">
					  	<b> {{$trabajo->titulo}} </b>
					</p>
					
				</header>
				
				<div class="card-content">
					<div class="columns">
						<div class="column is-12">
							
							@foreach($usuarios as $u)
								@if($u->id == $trabajo->user_id)
									<p class="is-size-5"> Empleador: {{$u->firstname . ' ' . $u->lastname}} </p>
								@endif
							@endforeach
						
							
							<p> Fecha de publicacion: {{$trabajo->fecha}} </p>
							<p> Descripcion Corta: {{$trabajo->minidescripcion}} </p>
							<p> Descripcion: {{$trabajo->descripcion}} </p>
							<p> Tipo: {{$trabajo->tipo}} </p>
							<p> Fecha de entrega: {{$trabajo->entrega}} </p>
							
							<p> Estado: {{$trabajo->estado }} </p>
							
							<hr>
							<p> Comentarios </p>
							<hr>
							
							@foreach($opiniones as $opinion)
								@if($opinion->id_proyecto == $trabajo->id)
									
									<p> </p>
									@foreach($usuarios as $u)
										@if($u->id == $opinion->id_empleador)
											<p class="is-size-5"> {{$u->firstname . ' ' . $u->lastname}}: </p>
										@endif
									@endforeach
						
							
									<p> <i> ---"{{$opinion->decripcion}} " </i> </p>
									<p><i> {{$opinion->fecha}} </i></p>
							
									<p> Calificacion: {{ $opinion->ranking }} <i class="fas fa-star"></i> </p>
								@endif
							@endforeach
							
						</div>
					</div>
				</div>
			</div>
		@endforeach

	</div>

</section>
    
@endsection