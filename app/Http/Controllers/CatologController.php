<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class CatologController extends Controller
{



  

    public function getIndex()
    {
       // $movie= new Movie;
   		 $movies=  Movie::all();

        return view('catalog.index',array('peliculas'=>$movies));
    }
    public function getShow($id)
    {
		$movie=  Movie::findOrFail($id+1);		;
        return view('catalog.show', array('pelicula'=>	$movie));
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function getEdit($id)
    {
		$movie=  Movie::findOrFail($id);		;

        return view('catalog.edit', array('id'=>	$movie));
    }
}
