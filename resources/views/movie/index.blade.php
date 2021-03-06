@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Poster</th>
				<th>Nombre</th>
				<th>Genero</th>
				<th>Direccion</th>
				<th>duracion</th>
				<th>valoracion</th>
				<th>sipnopsis</th>
				<th>Operaciones</th>
			</thead>
			@foreach($movies as $movie)
				<tbody>
					<td>
						<img src="movies/{{$movie->path}}" style="width: 100px">
					</td>
					<td>{{$movie->titulo}}</td>
					<td>{{$movie->genre}}</td>
					<td>{{$movie->direccion}}</td>
					<td>{{$movie->duracion}}</td>
					<td>{{$movie->valoracion}}</td>
					<td>{{$movie->sipnopsis}}</td>
					<td>{!!link_to_route('movie.edit', $title = 'Editar', $parameters  = $movie->id, $attributes = ['class' =>'btn btn-primary' ])!!}</td>
				</tbody>
			@endforeach
		</table>

	@endsection