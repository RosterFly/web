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
    protected $fillable = ['flightnumber', 'aircraftICAO', 'acftregistration' , 'etd', 'eta', 'ICAOdeparture', 'ICAOarrival', 'passengers', 'cargo', 'fob', 'userid'];
    protected $hidden = ['id', 'user'];
    protected $casts = [
        'etd'=>'datetime',
        'eta'=>'datetime',
    ];
    public function icaoDeparture()
    {
        return $this->hasOne(Airport::class, 'icao', 'ICAOdeparture');
    }
    public function icaoArrival()
    {
        return $this->hasOne(Airport::class, 'icao', 'ICAOarrival');
    }

}
