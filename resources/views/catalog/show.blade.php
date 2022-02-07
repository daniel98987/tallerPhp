@extends('layouts.master')

@section('content')



<div class="col-xs-6 col-sm-4 col-md-3 text-center">
    <a href="">
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$id['title']}}
        </h4>
    </a>
</div>

<div class="row">
    <div class="col-sm-4 m-0">
        <img class="m-4 mt-0 mb-0" src="{{$id['poster']}}" style="height:90%; width:90%;" />

    </div>
    <div class="col-sm-8">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{$id['title']}}</h1>
                </div>

                <div class="col-12">
                    <h3>Año: {{$id['year']}}</h3>
                    <h3>Director: {{$id['director']}}</h3>
                    <p><b>Resumen: </b> {{$id['synopsis']}}</p>
                    @if ($id['rented'] === false)
                    <p><b>Estado: Pelicula disponible</p>
                    @else
                    <p><b>Estado: Pelicula actualmente alquiliada</p>

                    @endif
                    <div class="row">
                        <div class="col-3">

                            @if ($id['rented'] === false)
                            <button class="btn btn-primary">Alquilar pelicula</button>

                            @else
                            <button class="btn btn-danger">Devolver pelicula</button>


                            @endif
                        </div>
                        <div class="col-3">
                            <button class="btn btn-warning">Editar pelicula</button>
                        </div>
                        <div class="col-3">
                            <a  class="btn btn-secondary"  href="{{url('/catalog')}}">Volver al listado</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@stop