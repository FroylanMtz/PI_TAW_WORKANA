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

    
    <div class="column is-4">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Component
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                    <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
            </div>
            <footer class="card-footer">
                <a href="#" class="card-footer-item">Save</a>
                <a href="#" class="card-footer-item">Edit</a>
                <a href="#" class="card-footer-item">Delete</a>
            </footer>
        </div>
    </div>

   
</section>


@endsection