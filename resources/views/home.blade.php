@extends('layouts.plantilla')

@section('content')

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            <div class="box has-background-primary">
                <aside class="menu">
                    <p class="menu-label has-text-black is-size-6">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a> Trabajos (Como Empelador) </a></li>
                        <li><a> Trabajos (Como Freelancer) </a></li>
                        <li><a> Propuestas </a></li>
                        <li><a> Perfil </a></li>
                        <li><a> Configuracion </a></li>
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

            <p class="is-size-1"> Contenido aqui <p>

        </div>
    </div>
</div>

@endsection
