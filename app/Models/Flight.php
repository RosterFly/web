<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'flights';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = ['flight_number', 'aircraft', 'acft_registration' , 'etd', 'eta', 'ICAOdeparture', 'ICAOarrival', 'distance', 'passengers', 'cargo', 'fob'];
    protected $hidden = ['id', 'user'];
}
