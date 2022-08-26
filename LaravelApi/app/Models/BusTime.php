<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusTime extends Model
{

    use HasFactory;

    protected $table ='bustime';

    protected $fillable = [

        'station_id',
        'track_id',
        'bus_id',


        'bus_timee',



    ];



    function bus()
    {
       // return  $this->hasOne('App\Model\Bus','id','bus_id');

        return $this->hasOne(Bus::class,'id','bus_id');
    }


    function station()
    {
        // $this->hasMany('App\Model\Station','id','station_id');

        return $this->hasOne(Station::class,'id','station_id',);
    }


    function track()
    {
        //return  $this->hasOne('App\Model\Track','id','track_id');


        return $this->hasOne(Track::class,'id','track_id');
    }





}
