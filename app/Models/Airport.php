<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = 'airport';
    public $incrementing = false;
    protected $primaryKey = 'icao';
    protected $fillable = ['*'];
}
