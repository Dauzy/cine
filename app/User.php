<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($valor){
        if (!empty($valor)) {
            $this->attributes['password'] = \Hash::make($valor); //Para poder encriptar el password
        }
    }
    
}
