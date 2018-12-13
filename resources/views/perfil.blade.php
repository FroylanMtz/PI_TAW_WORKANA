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
												<li><a href="/perfil" class="has-text-white"> Perfil </a></li>
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
                            <a href="#" aria-current="page">Perfil</a>
                        </li>
                    </ul>
                </nav>
                <p class="has-text-white is-size-5">
                    Perfil
                </p>
            </div>

            <div class="card">
								<header class="card-header">
									<p class="card-header-title">
										Editar datos de la cuenta
									</p>
								</header>

                <div class="card-content">
               <form action="/perfil/{{$usuario->id}}" method="POST">
                 {{method_field('PATCH')}}
                 {{csrf_field()}}
                    
				   <div class="field">
                      <label class="label">Nombre (s)</label>
                      <div class="control">
                        <input class="input" type="text" id="firstname" name="firstname" value="{{$usuario->firstname}}">
                      </div>
                    </div>
                    
                    <div class="field">
                      <label class="label">Apellido (s)</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Apellido" id="lastname" name="lastname" value="{{$usuario->lastname}}">
                      </div>
                    </div>
									
					<div class="field">
                      <label class="label">Telefono</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Telefono" id="phone" name="phone" value="{{$usuario->phone}}">
                      </div>
                    </div>
                 
                    
                 	<div class="field">
						<label class="label">Cobro por hora</label>
						<div class="control">
							<input class="input" type="number"  step="any" placeholder="Salario" id="salary" name="salary" value="{{$usuario->salary}}">
						</div>
                    </div>
									
				   	<div class="field">
						<label class="label">Categoria</label>
					    <div class="control">
							<div class="select is-primary">
								<select name="category" id="category">
									@foreach ($categorias as $categoria)
										@if( $usuario->category == $categoria->id )
											<option selected value="{{$categoria->id}}"> {{ $categoria->name }} </option>
											{{$categoria->id}}
										@else
											<option value="{{$categoria->id}}"> {{ $categoria->name }} </option>
										@endif
									@endforeach
								</select>
							</div>
					    </div>
					</div>
				   

				   
				   	<div class="field">
						<label class="label">Habilidades (Separe por comas los valores)</label>
					    <div class="control">
							<input class="input" type="text" placeholder="Habilidades" id="skills" name="skills" value="{{$usuario->skills}}">
					    </div>
					</div>
				   
				   
				   	<div class="field">
						<label class="label">Acerca de ti</label>
					    <div class="control">
                        	<textarea class="textarea" type="text" placeholder="Acerca de ti" id="about" name="about" >{{$usuario->about}}</textarea>
                      	</div>
					</div>
				   
				   <div class="field">
						<label class="label">Frase con la que te identificas</label>
					    <div class="control">
							<input class="input" type="text" placeholder="Frase" id="acerca" name="acerca" value="{{$usuario->acerca}}">
                      	</div>
					</div>
				   					
                    <div class="field is-grouped">
                      <div class="control">
                        <button class="button is-link" type="submit"> <i class="fas fa-save"> </i> Actualizar Datos </button>
                      </div>
                    </div>
									 	
										
              </form>
                </div>
              
                    
              
            </div>
			
			<div class="card">
				
				<header class="card-header">
					<p class="card-header-title">
						Cambiar Foto de perfil
					</p>
				</header>
				
				<div class="card-content">
					
					
					<figure class="image is-128x128">
						<img class="is-rounded" src="images/{{$usuario->photo}}">
					</figure>
					
					<br>
					
					<form action="/actualizarFoto" method="post" enctype="multipart/form-data">
                 		{{csrf_field()}}
						<label>Selecciona la imagen:</label>
						<input type="file" name="file" id="file" required>
						<input type="submit" value="Subir imagen" name="submit" class="button is-link">
					</form>
					
				</div>
				
				
			</div>

        </div>
    </div>
</div>

@endsection