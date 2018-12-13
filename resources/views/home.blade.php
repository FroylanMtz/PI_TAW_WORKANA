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
                        <li><a href="/home" class="has-text-white"> Trabajos (Como Empelador) </a></li>
                        <li><a href="/trabajos_freelancer" class="active"> Trabajos (Como Freelancer) </a></li>
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
                            <a href="#" aria-current="page">Trabajos</a>
                        </li>
                    </ul>
                </nav>
                <p class="has-text-white is-size-5">
                    Trabajos (Como Empleador)
                </p>
            </div>

			
			@foreach($trabajos as $trabajo)
				<div class="card">
					<header class="card-header">

						<p class="card-header-title is-size-4">
							{{$trabajo->titulo}}
						</p>

					</header>

					<div class="card-content">
						<div class="columns">
							
							<div class="column is-12">
								
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
								
								<hr>
								
								<p class="is-size-4">
									Propuestas
								</p>
								
								<?php $totalPropuestas = 0; ?>
								<?php $yaTieneEmpleado = false; ?>
								<?php $idUsuarios = [] ?>
								<?php $nombreUsuarios =  [] ?>
								
								
								
								@foreach($propuestas as $propuesta)
									@if( $propuesta->id_trabajo == $trabajo->id )
										@if( $trabajo->user_trabajador != null )
											
											
											<?php $yaTieneEmpleado = true; ?>
										
								
								
								
										@else
											<hr>
											<p>											
												@foreach($usuarios as $usuario)
													@if( $usuario-> id == $propuesta->user_id)
														Usuario: {{$usuario->firstname . ' ' . $usuario->lastname}}
														<?php array_push($idUsuarios, $usuario->id ) ?>
														<?php array_push($nombreUsuarios, $usuario->firstname . ' ' . $usuario->lastname ) ?>
													@endif
												@endforeach
											</p>

											<p>
												Detalles: {{$propuesta->detalles}}	
											</p>

											<p>
												Cobro: {{$propuesta->cobro}}	
											</p>

											<p>
												Total: {{$propuesta->total}}	
											</p>

											<p>

												Costo del servicio: {{$propuesta->cosServicio}}	
											</p>

											<?php $totalPropuestas = $totalPropuestas + 1; ?>
										@endif
									@endif
								@endforeach
								
								
								
								@if($yaTieneEmpleado )
								
									<p class="is-size-5 has-text-link">
										--------------Propuesta elegida-----------------
									</p>

									@foreach($usuarios as $usuario)
										@if( $usuario->id == $trabajo->user_trabajador)
											<p>
												Usuario: {{$usuario->firstname . ' ' . $usuario->lastname}}
											</p>
										@endif
									@endforeach
									
									@foreach($propuestas as $propuesta)
										@if( $propuesta->id_trabajo == $trabajo->id && $trabajo->user_trabajador == $propuesta->user_id)
								
											<p>
												Id de propuesta: {{$propuesta->id}}

											</p>

											<p>
												Detalles: {{$propuesta->detalles}}	
											</p>

											<p>
												Cobro: {{$propuesta->cobro}}	
											</p>

											<p>
												Total: {{$propuesta->total}}	
											</p>

											<p>

												Costo del servicio: {{$propuesta->cosServicio}}	
											</p>
								
										@endif
									@endforeach

								@endif
								
								
								@if($yaTieneEmpleado && $trabajo->estado == 'Finalizado')
									
									<hr>
									<p class="is-size-4">
										Opinion
									</p>
									
									<?php $yaCalificado = false; ?>
								
									@foreach( $opiniones as $opinion )
										@if( $opinion->id_proyecto == $trabajo->id )
											
											<?php $yaCalificado = true; ?>
								
											<p class="has-text-danger">
												Ya has calificado al Freelancer
											</p>
								
											<p>
												Descripcion: {{$opinion->decripcion}}	
											</p>
								
											<p>
												Puntaje: {{$opinion->ranking}}	
											</p>
								
											<p>
												Fecha: {{$opinion->fecha }}
											</p>
										
										@endif
									@endforeach
								
									@if( $yaCalificado == false )
										<p class="has-text-success">
											Califica a este Freelancer
										</p>
								
										<div class="field">

											<label class="label">Elige una propuesta </label>

											<form action="/escribirOpinion" method="POST">
												
												{{csrf_field()}}
												
												<input class="input" type="hidden" placeholder="Frase" id="idEmpleado" name="idEmpleado" value="{{$trabajo->user_trabajador}}">
																							
												<input class="input" type="hidden" placeholder="Frase" id="idTrabajo" name="idTrabajo" value="{{ $trabajo->id }}">
												
												<div class="field">
												  	<label class="label">Descripcion</label>
												  	<div class="control">
														<input class="input" type="textarea" placeholder="Descripcion" id="descripcion" name="descripcion" >
												  	</div>
												</div>
												
												<div class="field">
												  	<label class="label">Ranking</label>
												  	<div class="control">
														<input class="input" type="text" placeholder="Ranking" id="ranking" name="ranking" >
												  	</div>
												</div>
												
												<input class="input" type="hidden" required="" id="fecha" name="fecha" min="2013-01-01" value="<?php echo date("Y-m-d");?>" >
												
												
												<br>
												<div class="field is-grouped">
													<div class="control">
														<button class="button is-link" type="submit">  Guardar Opinion </button>
													</div>

												</div>

											</form>

										</div>
								
									@endif
								
								@endif
								
								
								
								@if($totalPropuestas == 0 && !$yaTieneEmpleado)
									<p>
										<hr>
										<i> Aun no hay propuestas para este trabajo	 </i>
									</p>
								@endif
								
							
								@if($yaTieneEmpleado == false && $totalPropuestas > 0)
									<hr>
									
									<p>
										Aun no ha elegido una propuesta, elija una ahora mismo:
									</p>
									
									<div class="field">
										
										<label class="label">Elige una propuesta </label>
										
										<form action="/elegirPropuesta" method="POST">
											
											{{method_field('PATCH')}}
											{{csrf_field()}}
											
											<div class="control">
												<div class="select is-primary">
													<select name="propuesta" id="propuesta">
														<?php for($i=0; $i< count($idUsuarios); $i++ ) { ?>
															<option selected value="{{$idUsuarios[$i]}}"> {{ $nombreUsuarios[$i] }} </option>
														<?php } ?>
													</select>
												</div>
											</div>
											
											<input class="input" type="hidden" placeholder="Frase" id="trabajo" name="trabajo" value="{{$trabajo->id}}">
											<br>
											<div class="field is-grouped">
												<div class="control">
													<button class="button is-link" type="submit">  Elegir propuesta </button>
												</div>
												
											</div>
										
										</form>
									
									</div>
							
								@endif
							
							
								
							</div>
						
						</div>
					</div>
				</div>
			@endforeach
			
			
        </div>
    </div>
</div>

@endsection
