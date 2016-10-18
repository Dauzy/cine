@extends('layouts.admin')
	@section('content')
	@include('genre.modal')
	@include('genre.modalDel')
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display: none">
		<strong>Todo Surgío de Maravilla :)</strong>
	</div>
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Operaciones</th>
			</thead>
			<tbody id="datos"></tbody>
		</table>
	@endsection


	@section('scripts')
		{!!Html::script('js/ajax2.js')!!}
	@endsection
