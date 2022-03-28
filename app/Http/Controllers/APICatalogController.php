<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class APICatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies =  Movie::all();
        return $movies;
    }
    public function show($id)
    {
        $movie =  Movie::findOrFail($id);
        return  \response($movie) ;
    }
    /**
     * Show the form for creating a new resource.
     *
      
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $p = new Movie();
        $p->title = $req->title;
        $p->year =  ($req->year);
        $p->director = $req->director;
        $p->poster = $req->poster;
        $p->rented = false;
        $p->synopsis = $req->synopsis;
        $result = $p->save();
        return response('Pelicula añadida',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req,$id)
    {
        

        $p = Movie::find($id);
        $p->title = $req->title;
        $p->year =  ($req->year);
        $p->director = $req->director;
        $p->poster = $req->poster;
        $p->synopsis = $req->synopsis;
        $result = $p->save();
        return response('Pelicula editada ',201);
    }
    public function putRent($id)
    {
        
        $m = Movie::findOrFail( $id );
        $m->rented = true;
        $m->save();
        return response()->json( ['error' => false,
        'msg' => 'La película se ha marcado como alquilada' ] );
    }
    public function putReturn($id)
    {
        

        $m = Movie::findOrFail( $id );
        $m->rented = false;
        $m->save();
        return response()->json( ['error' => false,
        'msg' => 'La película se ha marcado como retornada' ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from movies where id = ?', [$id]);


       // notify()->success('Pelicula eliminada');
        return response('Pelicular eliminada',201);
    }
}
