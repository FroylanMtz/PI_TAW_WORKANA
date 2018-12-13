@extends('layouts.plantilla')

@section('content')

<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            <div class="box has-background-primary">
                <aside class="menu">
                    <p class="menu-label has-text-black is-size-6">
                        General
                    </p>
                     <ul class="menu-list">
                        <li><a href="/home"> Trabajos (Como Empelador) </a></li>
                        <li><a href="/trabajos_freelancer" class="has-text-white"> Trabajos (Como Freelancer) </a></li>
                        <li><a href="/propuestas"> Propuestas </a></li>
                        
                    </ul>
										<p class="menu-label has-text-black is-size-6">
                        Perfil
										</p>
										<ul class="menu-list">
												<li><a href="/perfil"> Perfil </a></li>
												<li><a href="/configuracion"> Configuracion </a></li>
										</ul>
                </aside>
            </div>
        </div>
        <div class="column is-9">
            <div class="box has-background-info">
                <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li>
                            <a href="/">ProyectoTAW</a>
                        </li>

                        <li>
                            <a href="/">Cuenta</a>
                        </li>

                        <li class="is-active">
                            <a href="#" aria-current="page">Trabajos (como Freelancer)</a>
                        </li>
                    </ul>
                </nav>
                <p class="has-text-white is-size-5">
                    Trabajos (Como Freelancer)
                </p>
            </div>
					
        <!-------------------------> 
        @foreach($trabajos as $trabajo)
			<div class="card">
				<header class="card-header">
					<p class="card-header-title is-size-4">
						{{$trabajo->titulo}}
					</p>
				</header>
				
				<div class="card-content">
					
					<p> 
						Descripcion: {{$trabajo->descripcion}} 
					</p>
					<p> 
						Fecha: {{$trabajo->fecha}} 
					</p>

					<p>
						Entrega: {{$trabajo->entrega}}
					</p>
					<p>
						@foreach($categorias as $categoria)
							@if($categoria->id == $trabajo->categoria)
								Categoria: {{ $categoria->name }}
							@endif
						@endforeach
					</p>
					<p>
						Subcategoria: {{$trabajo->subcategoria}}
					</p>
					<p>
						Habilidades: {{$trabajo->habilidades}} 
					</p>
					<p>
						Tipo: {{$trabajo->tipo}}
					</p>


					@if($trabajo->estado == 'Elegido')
					
					
						<hr>
						<p class="is-size-4" >

							
					
							<div class="field">

								<label class="label">Terminar Proyecto </label>

								<form action="/terminarProyecto" method="POST">
									{{method_field('PATCH')}}
									{{csrf_field()}}
									<br>
									
									<input class="input" type="hidden" placeholder="Frase" id="idTrabajo" name="idTrabajo" value="{{$trabajo->id}}">
										
									<div class="field is-grouped">
										<div class="control">
											<button class="button is-danger" type="submit">  Terminar Proyecto </button>
										</div>

									</div>

								</form>
							</div>
								
						</p>

					@endif

			  </div>
			</div>
        @endforeach
        <!-------------------------> 
        
				</div>
    </div>
</div>

@endsection