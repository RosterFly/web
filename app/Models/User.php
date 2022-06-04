<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'users';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = ['dni','name', 'surname', 'email', 'password', 'birth_date', 'telephone'];
    protected $hidden = ['password', 'remember_token'];


}
