<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'airports';
    public $incrementing = false;
    protected $primaryKey = 'icao';
    protected $fillable = ['*'];
}
