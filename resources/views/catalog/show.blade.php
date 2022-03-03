Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore

@daniel98987
daniel98987
/
tallerPhp
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Settings
tallerPhp/resources/views/catalog/show.blade.php
@hundres272
hundres272 Cambiando modelo a base de datos
Latest commit ad3b586 12 days ago
History
2 contributors
@hundres272@daniel98987
67 lines (49 sloc) 1.92 KB

@extends('layouts.master')

@section('content')



<div class="col-xs-6 col-sm-4 col-md-3 text-center">
    <a href="">
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$pelicula->title}}
        </h4>
    </a>
</div>

<div class="row">
    <div class="col-sm-4 m-0">
        <img class="m-4 mt-0 mb-0" src="{{$pelicula->poster}}" style="height:90%; width:90%;" />

    </div>
    <div class="col-sm-8">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{$pelicula->title}}</h1>
                </div>

                <div class="col-12">
                    <h3>Año: {{$pelicula->year}}</h3>
                    <h3>Director: {{$pelicula->director}}</h3>
                    <p><b>Resumen: </b> {{$pelicula->synopsis}}</p>
                    @if ($pelicula->rented === false)
                    <p><b>Estado: Pelicula disponible</p>
                    @else
                    <p><b>Estado: Pelicula actualmente alquiliada</p>

                    @endif
                    <div class="row">
                        <div class="col-3">

                            @if ($pelicula->rented === false)
                            <button class="btn btn-primary">Alquilar pelicula</button>

                            @else
                            <button class="btn btn-danger">Devolver pelicula</button>


                            @endif
                        </div>
                        <div class="col-3">
                            <a class="btn btn-warning" href='{{url("/catalog/edit/$pelicula->id")}}'>Editar pelicula</a>
                        </div>
                        <div class="col-3">
                            <a class="btn btn-secondary" href="{{url('/catalog')}}">Volver al listado</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@stop
