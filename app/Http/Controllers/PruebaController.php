<?php namespace Cinema\Http\Controllers;

class PruebaController extends Controller
{

    public function index()
    {
        return "Controller";    
    }


    public function nombre($nombre){
    	return "Hola ". $nombre;
    }
}

