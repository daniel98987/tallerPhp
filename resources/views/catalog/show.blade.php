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

                            @if ($pelicula->rented)
                            <form action="/catalog/return/{{$pelicula->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button class="btn btn-danger" type="submit">Devolver pelicula</button>

                            </form>


                            @else

                            <form action="/catalog/rent/{{$pelicula->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button class="btn btn-primary" type="submit">Alquilar pelicula</button>

                            </form>


                            @endif
                        </div>
                        <div class="col-3">
                            <a class="btn btn-warning" href='{{url("/catalog/edit/$pelicula->id")}}'>Editar pelicula</a>
                        </div>
                        <div class="col-3">

                            <form action="/catalog/delete/{{$pelicula->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <button class="btn btn-danger" type="submit">Eliminar pelicula</button>


                            </form>

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