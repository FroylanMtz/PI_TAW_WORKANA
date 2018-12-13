@extends('layouts.plantilla')

@section('content')

  <div class="container">
  
   <section class="section" id="about">
      <div class="section-heading">
      <h3 class="title is-2">{{$trabajo->titulo}}</h3>
      <div class="container">
        <p>{{$trabajo->descripcion}}</p>
      </div>
    </div>
    <div class="content">
    </div>
    <div class="columns has-same-height is-gapless">
      <div class="column">
        <!-- Profile -->
        <div class="card">
          <div class="card-content">
            <h3 class="title is-4">Publicado por : {{$usuario->firstname}} {{$usuario->lastname}} </h3>

            <div class="content">
              <table class="table-profile">
                <tr>
                  <th colspan="1"></th>
                  <th colspan="2"></th>
                </tr>
                <tr>
                  <td>Correo:</td>
                  <td>{{$usuario->email}}</td>
                </tr>
                <tr>
                  <td>Telefono:</td>
                  <td>{{$usuario->phone}}</td>
                </tr>
                <tr>
                  <td>Acerca:</td>
                  <td>{{$usuario->acerca}}</td>
                </tr>
              </table>
            </div>
            <br>
          </div>
        </div>
      </div>
     </div>      
    </section>
    <div class="card">
       <div class="card-content">
    <form  method="POST" action="/mandarPropuesta">
                    {{csrf_field()}}
                    @csrf
                    <div class="field">
                      <label class="label">Detallar Propuesta </label>
                      <div class="control">
                        <textarea class="textarea"  placeholder="Propuesta" id="propuesta" name="propuesta" required=""></textarea>
                      </div>
                    </div>	
                    <div class="field">
                      <label class="label">Cobro </label>
                      <div class="control">
                        <input class="input" type="text" placeholder="Cobro" id="cobro" name="cobro" required="">                    
                      </div>
                    </div>
		
                     <div class="field">
                      <label class="label">Fecha de entrega </label>
                      <div class="control">
                        <input class="input" type="date"  id="entrega" name="entrega" required="">                    
                      </div>
                    </div>
		
						 <input class="input" type="hidden"  id="IdTrabajo" name="IdTrabajo" value="{{$trabajo->id}}">
		
                    <div class="field is-grouped">
                      <div class="control">
                        <button type="submit" class="button is-link">  Mandar Propuesta  </button>
                      </div>
                    </div>
								
          </form>
    </div>      
    </div>
</div>
@endsection


  


