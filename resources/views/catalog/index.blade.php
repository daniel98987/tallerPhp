@extends('layouts.master')

@section('content')
CATALOGO DE Peliculas


<div class="row">
    @foreach( $peliculas as $pelicula )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center mt-5">
        <a class="text-decoration-none text-info" href="catalog/show/{{ $pelicula->id}}">
            <img src="  {{ $pelicula->poster}}" style="height:200px;width: 150px;" />
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{ $pelicula->title}}
            </h4>
        </a>
    </div>
    @endforeach
</div>
@stop