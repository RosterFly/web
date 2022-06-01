<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

}
