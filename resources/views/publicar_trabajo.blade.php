@extends('layouts.plantilla')

@section('content')

<section class="container">

    

    <div class="box has-background-info">

        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="/">ProyectoTAW</a></li>
                <li class="is-active"><a href="#" aria-current="page">Publicar Trabajo</a></li>
            </ul>
        </nav>

        <p class="has-text-white is-size-3">
            Publicar trabajo
        </p>
    </div>

  <div class="card">
			<header class="card-header">
				<p class="card-header-title">
						Profavor, llena los campos del trabajo
				</p>
			</header>
		
			<div class="card-content">
			<form action="/publicartrabajos" method="POST">
                    {{csrf_field()}}
                    @csrf
                    <div class="field">
                      <label class="label">Titulo</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Titulo" id="title" name="title" required="">
                      </div>
                    </div>
                    
                    <div class="field">
                      <label class="label">Descripcion</label>
                      <div class="control">
                        <textarea class="textarea" required="" type="text" placeholder="Descripcion del trabajo" id="description" name="description"></textarea>
                      </div>
                    </div>
									
					<div class="field">
                      <label class="label">Descripcion Breve</label>
                      <div class="control">
                        <input class="input" type="text" required="" placeholder="Pequeña descripcion del proyecto" id="minidescription" name="minidescription">
                      </div>
                    </div>
                    
    	               <div class="field">

                      <div class="control">
                        <input class="input" type="hidden" required="" id="fecha" name="fecha" min="2013-01-01" value="<?php echo date("Y-m-d");?>" >
                      </div>
                    </div>
    
                    <div class="field">
                      <div class="control">
                        <input class="input" type="hidden" required="" placeholder="Estado" id="estado" name="estado" value="Abierto">
                      </div>
                    </div>
    
                    <div class="field">
                      <label class="label">Fecha de Entrega</label>
                      <div class="control">
                        <input class="input" type="date"required="" id="dateofend" name="dateofend">
                      </div>
                    </div>
    
				
					<div class="field">
						<label class="label">Categoria</label>
					    <div class="control">
							<div class="select is-primary">
								<select id="categoria" name="categoria">
									@foreach ($categorias as $categoria)
										
										<option selected value="{{$categoria->id}}"> {{ $categoria->name }} </option>
										
									@endforeach
								</select>
							</div>
					    </div>
					</div>
				
    
                    <div class="field">
                      <label class="label">Subcategoria</label>
                      <div class="control">
                        <input class="input" required="" type="text" placeholder="Subcategoria" id="subcategoria" name="subcategoria">
                      </div>
                    </div>
    
                    <div class="field">
                      <label class="label">Habilidades</label>
                      <div class="control">
                        <input class="input" required="" type="text" placeholder="Habilidades Requeridas" id="habilidades" name="habilidades">
                      </div>
                    </div>
        
                    <!--   
                    <div class="field">
                      <label class="label">Tipo</label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Tipo" id="type" name="type">
                      </div>
                    </div>
                    -->
                    <!-- DEBE DE TENER ESTE SELECT PERO MARCA UN ERROR DE QUE MANDA EL CAMPO NULL-->
                    <div class="field">
                      <label class="label">Tipo</label>
                      
											
											<div class="control">
                           <input type="radio" name="type" value="Proyecto"> Proyecto<br>
                           <input type="radio" name="type" value="Puesto"> Puesto
											</div>
						
                    </div>
												
                    <div class="field is-grouped">
                      <div class="control">
                        <button type="submit" class="button is-link"> <i class="fas fa-save"> </i> Publicar  </button>
                      </div>
                    </div>
                </div>
          </form>
		</div>
  </div>

</section>
    
@endsection



                