@extends('layouts.admin')

@section('content')
    <form action="">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" placeholder="Your Username">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" placeholder="Your Email">    
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" placeholder="Your Password">
        </div>
        <button type="button" class="btn btn-primary">Sign Up</button>
    </form>
@stop