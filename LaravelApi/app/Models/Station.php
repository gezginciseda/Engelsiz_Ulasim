<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{

    use HasFactory;

    protected $table ='stations';

    protected $fillable = [

        'station_number',
        'station_name',


    ];


    public function bustime()
    {
        return $this->hasMany('App\Model\BusTime');
    }


}
