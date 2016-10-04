<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('titulo',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('Sipnopsis,','Sipnopsis:')!!}
	{!!Form::textarea('sipnopsis',null,['class'=>'form-control','rows'=>'3','placeholder'=>'Ingresa el elenco'])!!}
</div>
<div class="form-group">
	{!!Form::label('Elenco,','Elenco:')!!}
	{!!Form::text('cast',null,['class'=>'form-control', 'placeholder'=>'Ingresa el elenco'])!!}
</div>
<div class="form-group">
	{!!Form::label('Direccion','Dirección:')!!}
	{!!Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Ingresa al director'])!!}
</div>
<div class="form-group">
	{!!Form::label('Duracion','Duración:')!!}
	{!!Form::text('duracion',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración'])!!}
</div>
<div class="form-group">
	{!!Form::label('Valoracion','Valoracion:')!!}
	{!!Form::selectRange('number', 1, 5, null,['class'=>'form-control', 'placeholder'=>'Valoracion'])!!}
</div>
<div class="form-group">
	{!!Form::label('Poster','Poster:')!!}
	{!!Form::file('path')!!}
</div>
<div class="form-group">
	{!!Form::label('Genero','Genero:')!!}
	{!!Form::select('genre_id',$genres)!!}
</div>