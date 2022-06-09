<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hangar extends Model
{
    protected $table = 'hangars';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'acftregistration', 'ICAOCode', 'userid'];
    public $timestamps = true;

    public function aircraft()
    {
        return $this->belongsTo('App\Models\AircraftModel', 'ICAOCode', 'ICAOCode');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'userid', 'id');
    }
}
