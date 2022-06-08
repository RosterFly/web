<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AircraftModel extends Model
{
    protected $table = 'aircraft_models';
    public $incrementing = false;
    protected $primaryKey = 'ICAOCode';
    protected $fillable = ['wing_type','aircraft_model','manufacturer','IATACode','ICAOCode','type'];
}
