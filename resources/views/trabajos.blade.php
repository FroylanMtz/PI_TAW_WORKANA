@extends('layouts.plantilla')

@section('content')

<section class="container">


    

    <div class="box has-background-info ">

        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">ProyectoTAW</a></li>
                <li class="is-active"><a href="#" aria-current="page">Trabajos</a></li>
            </ul>
        </nav>

        <p class="has-text-white is-size-3">
            Trabajos disponibles 

        </p>
    </div>
    <div class="container">
      <div class="row columns is-multiline ">
        @foreach ($trabajos as $trabajo)
              @if($trabajo->estado!='Finalizado')
                 @if($trabajo->estado!='Elegido')
                   <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-128x128">
                                        @foreach($usuarios as $usuario)
                                          @if($trabajo->user_id == $usuario->id)
                                            <img class="is-rounded" src="images/{{ $usuario->photo }}" alt="Image">
                                          @endif
                                        @endforeach
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">{{$trabajo->titulo}}</p>
                                    <p class="subtitle is-6">Desarrollador</p>
                                    <p>Estado : {{$trabajo->estado}}</p>
                                    <a href="/propuesta/{{$trabajo->id}}" class="button is-primary">Mandar Propuesta</a>
                                </div>
                            </div>
                            <div class="content">{{$trabajo->minidescripcion}}
                                <div class="background-icon"><span class="icon-twitter"></span>
                                  </button></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
              @endif
      @endforeach
               
        </div>
      </div>

@endsection


