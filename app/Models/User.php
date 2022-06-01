<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'surname', 'email', 'password', 'birth-date', 'telephone'];
    protected $hidden = ['password', 'remember_token'];

}
