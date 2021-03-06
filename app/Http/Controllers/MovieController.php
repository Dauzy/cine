<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Genre;
use Cinema\Movies;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class MovieController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('admin', ['only' => ['edit','update','destroy']]);

    }

    public function find(Route $route){
        $this->movie = Movie::find($route->getParameter('pelicula'));
    }
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::Movie();
        return view('movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::lists('genre','id');
        return view('movie.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movies::create($request->all());
        return "Estoy Listo";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id||1  Q|1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
      /*
        $genres = Genre::lists('genre', 'id');
        return view('movie.edit', ['genres'=>$genres]);
        */
        return view('movie.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*
        $this->movies->fill($request->all());
        $this->movies->save();
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Estoy en destroy.";
    }
}
