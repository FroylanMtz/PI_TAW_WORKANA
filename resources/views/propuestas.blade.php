
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
                        <li><a href="/trabajos_freelancer" > Trabajos (Como Freelancer) </a></li>
                        <li><a href="/propuestas" class="has-text-white"> Propuestas </a></li>
                        
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
                            <a href="/home">Cuenta</a>
                        </li>

                        <li class="is-active">
                            <a href="#" aria-current="page">Propuestas</a>
                        </li>
                    </ul>
                </nav>
                <p class="has-text-white is-size-5">
                    Propuestas
                </p>
            </div>
				<!--AQUI COMIENZA EL CONTENEDOR-->
				<div class="conteiner">
					@foreach ($propuestas as $propuestas)
						<div class="card">
							<header class="card-header">
								<p class=" card-header-title is-size-4 has-text-black 	">
									PROPUESTAS
								</p>
							</header>

							<div class="card-content">

								<div class="columns">

									<div class="column is-2">
										<figure class="image is-128x128">
											<img class="is-rounded" src="">
										</figure>
									</div>
									<div class="column is-7">
                		@foreach($trabajos as $trabajo)
											@if($trabajo->id == $propuestas->id_trabajo)
												<p class="is-size-5"><i><b>	
													<b>Trabajo:</b>  {{$trabajo->titulo}}
													</b>
													</i>
												</p>
												<p><b>Minidescripcion:</b>   {{$trabajo->minidescripcion}} </p>
																						
																		
													@if($trabajo->estado == 'Abierto')
														<p class="is-size-3 has-text-success">
															-----{{$trabajo->estado}}-----
														</p>
													@endif

													@if($trabajo->estado == 'Finalizado')
														<p class="is-size-3 has-text-danger">
															------{{$trabajo->estado}}------
														</p>
													@endif

													@if($trabajo->estado == 'Elegido')
														<p class="is-size-3 has-text-warning">
															------{{$trabajo->estado}}------
														</p>
													@endif
										
										
										
											@endif
										@endforeach
										<p> <b>Detalles:</b> {{$propuestas->detalles}} </p>

									</div>
								</div>

							</div>



						</div>
					@endforeach
				</div>
				<!--AQUI TERMINA EL CONTENEDOR-->

        </div>
    </div>
</div>

@endsection