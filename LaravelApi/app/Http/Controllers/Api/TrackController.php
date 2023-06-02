<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Track;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;



class TrackController extends Controller
{
   
    public function index()
    {
        //



        //$station=Station::whereId($id)->with('tracks')->first();



            $datas = Track::all();


            return response()->json([
                'datas'=>$datas,


              'status' =>true ,
              'messages' => null,
              ],200

            );

    }
}
