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
            Freelancers {{count($usuarios) }}
        </p>
    </div>
		
		<div class="container">
			
			@foreach ($usuarios as $usuario)
				<div class="card">
					<header class="card-header">
						<p class=" card-header-title is-size-4 has-text-black 	">
							{{$usuario->firstname . ' ' . $usuario->lastname}}
						</p>
					</header>

					<div class="card-content">
						
						<div class="columns">
							
							<div class="column is-2">
								<figure class="image is-128x128">
									<img class="is-rounded" src="images/{{$usuario->photo}}">
								</figure>
							</div>
							
							@if($usuario->privacity == 'Publico')
							
								<div class="column is-7">
									
									<p class="is-size-5"><i><b> "{{$usuario->about}}" </b></i>  </p>
									<br>
									<p> Correo: {{$usuario->email}} </p>

									@foreach($categorias as $categoria)
										@if($usuario->category == $categoria->id)
											<p> Categoria: {{$categoria->name}} </p>
										@endif
									@endforeach

									<p> Habilidades: {{$usuario->skills}} </p>

								</div>
							
							@else
								
								<div class="column is-7">
									
									<p>
										<i>
											Este perfil es privado
										</i>
									</p>
									
									<p>
										@foreach($categorias as $categoria)
											@if($usuario->category == $categoria->id)
												<p> Categoria: {{$categoria->name}} </p>
											@endif
										@endforeach	
									</p>
							
									<p> Habilidades: {{$usuario->skills}} </p>
									

								</div>
							
							@endif
							
							<div class="column is-2 has-text-centered">
								<p> Costo/hora: <p class="has-text-link"> {{$usuario->salary}} </p> </p>
								<br>
							</div>
						
						</div>
						<hr>
					</div>
					
					<div class="columns">						
						<div class="column is-12 has-text-centered">
							<a class="button is-link is-medium" type="submit"  href="/freelancers/{{$usuario->id}}"> <i class="fas fa-user"></i>  Ver Perfil </a>						
						</div>
					</div>
					
					
					
					
				</div>
			@endforeach
		</div>

</section>
    
@endsection