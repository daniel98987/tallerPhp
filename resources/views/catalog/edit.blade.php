@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
                <div class="card">
                        <div class="card-header text-center">
                                Modificar película
                        </div>
                        <div class="card-body" style="padding:30px">
                                <form action="" method="POST">
                                        {{ csrf_field() }}

                                        {{ method_field('PUT') }}


                                        <div class="form-group mt-3">
                                                <label for="title">Título</label>
                                                <input type="text" value="{{$pelicula->title}}" name="title" id="title" class="form-control">
                                        </div>

                                        <div class="form-group mt-3">
                                                {{-- TODO: Completa el input para el año --}}
                                                <label for="year">Año</label>
                                                <input type="number" value="{{$pelicula->year}}" name="year" id="year" class="form-control">
                                        </div>

                                        <div class="form-group mt-3">
                                                {{-- TODO: Completa el input para el director --}}
                                                <label for="director">Director</label>
                                                <input type="text" value="{{$pelicula->director}}" name="director" id="director" class="form-control">
                                        </div>

                                        <div class="form-group mt-3">
                                                {{-- TODO: Completa el input para el poster --}}
                                                <label for="poster">Poster</label>
                                                <input type="url" value="{{$pelicula->poster}}" name="poster" id="poster" class="form-control">
                                        </div>

                                        <div class="form-group mt-3">
                                                {{-- TODO: Completa el area para la sinopsis --}}
                                                <label for="synopsis">Sinopsis</label>
                                                <textarea style="width: 100%;" name="synopsis" id="synopsis" rows="5">{{$pelicula->synopsis}}
                                                </textarea>
                                        </div>


                                        <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                                        Modificar película
                                                </button>
                                        </div>

                                </form>

                        </div>
                </div>
        </div>
</div>
@stop