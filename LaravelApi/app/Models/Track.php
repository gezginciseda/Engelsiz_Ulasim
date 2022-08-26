<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{

    protected $table ='tracks';

    protected $fillable = [

        'track_name',
        'track_nick',


    ];


    public function bustime()
    {
        return $this->hasMany('App\Model\BusTime');
    }


}
