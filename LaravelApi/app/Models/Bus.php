<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $table ='buses';

    protected $fillable = [

        'station_number',
        'station_name',


    ];


    public function bustime()
    {
        return $this->hasMany('App\Model\BusTime');
    }


}
