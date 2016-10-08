<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Movies extends Model
{
 	protected $table = "movies";
 	protected $fillable = ['titulo', 'path','sipnopsis', 'direccion', 'duracion', 'valoracion', 'genre_id', 'clase_id' ];

 	// M U T A D O R
 	//sirve oara modificar algunos elementos antes de ser guardados
 	public function SetPathAttribute($path){
		if (!empty($path)) {
			$this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
			$name = Carbon::now()->second.$path->getClientOriginalName();
			\Storage::disk('local')->put($name, \File::get($path));
		}
 	}

 	public static function Movie(){
 		return DB::table('movies')
 			->join('genres', 'movies.genre_id', '=','genres.id')
 			->select('movies.*','genres.genre')
 			->get();
 	}

}
