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
                        <li><a href="/trabajos_freelancer" class="active"> Trabajos (Como Freelancer) </a></li>
                        <li><a href="/propuestas"> Propuestas </a></li>
                        
                    </ul>
										<p class="menu-label has-text-black is-size-6">
                        Perfil
										</p>
										<ul class="menu-list">
												<li><a href="/perfil"> Perfil </a></li>
												<li><a href="/configuracion" class="has-text-white"> Configuracion </a></li>
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
                            <a href="#" aria-current="page">Configuracion</a>
                        </li>
                    </ul>
                </nav>
                <p class="has-text-white is-size-5">
                    Configuracion
                </p>
            </div>

            <div class="card">
				<header class="card-header">
					<p class="card-header-title">
						Configuracion de la cuenta
					</p>
				</header>
				
				<div class="card-content">
					
					<form action="/configurarCuenta" method="post">
                 		{{csrf_field()}}
												
						<div class="field">
							<label class="label">Privacidad de la cuenta: </label>
							<div class="control">
								<div class="select is-primary is-large">
									<select name="privacity" id="privacity">
										
										@if($usuario->privacity == 'Publico')
											<option value="Privado"> Privado </option>
											<option value="Publico" selected> Publico </option>
										@else
											<option value="Privado" selected> Privado </option>
											<option value="Publico" > Publico </option>
										@endif

									</select>
								</div>
							</div>
						</div>
						
						
						<input type="submit" value="Guardar" name="submit" class="button is-link">
					</form>
					
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

				</div>
				
			</div>

        </div>
		

    </div>
</div>

@endsection