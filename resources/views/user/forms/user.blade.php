    <div class="form-group">
            {!!Form::label('Nombre:')!!}    
            {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingresa Tu Nombre de Usuario'])!!}
    </div>
    <div class="form-group">
            {!!Form::label('Email:')!!}
            {!!Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Ingresa Tu Email'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('Password:')!!}
        {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa Tu Password'])!!}
    </div>
    