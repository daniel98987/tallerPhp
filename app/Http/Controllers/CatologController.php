<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\User;
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

        return view('catalog.edit', array('pelicula'=>	$movie));
    }
 
    public function postCreate(Request $req){




        $p = new Movie();
        $p->title = $req->title;
        $p->year =  ($req->year);
        $p->director = $req->director;
        $p->poster = $req->poster;
        $p->rented = false;
        $p->synopsis =$req->synopsis; 
        $result=$p->save();
        if($result){
    
            return redirect()->action([CatologController::class, 'getIndex']);

        }else{
            return ["result"=>"Data no guardada"];

        }

    }
    public function putEdit(Request $req){




        $p = Movie::find($req->id);
        $p->title = $req->title;
        $p->year =  ($req->year);
        $p->director = $req->director;
        $p->poster = $req->poster;
        $p->rented = false;
        $p->synopsis =$req->synopsis; 
        $result=$p->save();
        if($result){
           
           
            return redirect()->action(
                [CatologController::class, 'getShow'], ['id' => $req->id-1]
            );
        }else{
            return ["result"=>"Error"];

        }

    }
}
