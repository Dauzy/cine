@extends('layouts.admin')
	@section('content')
	{!! Form::open() !!}
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display: none">
			<strong>Todo Surgío de Maravilla :)</strong>
		</div>
		<div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display: none">
			<strong id="msj">  Al parecer no has escrito nada :L</strong>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		@include('genre.forms.genre')
		{!! link_to('#', $title='Registrar', $attributes = ['id' => 'registro', 'class' => 'btn btn-primary'], $secure = null) !!}
	{!! Form::close() !!}
	@endsection

	@section('scripts')
		{!!Html::script('js/ajax.js')!!}
	@endsection