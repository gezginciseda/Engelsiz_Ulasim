<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Bustime;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class BusTimeController extends Controller
{
   
    public function index(Request $request)
    {
        //


   //      $bustimes=Bustime::where('station_id',1)->with('station','track','bus')->get();



        //   return $bustimes;


     $datas = Bustime::where('station_id', $request->station_id)->with('station','track','bus')->get();


        return response()->json
        ([
           'datas'=>$datas,
          'status' =>true ,
          'messages' => null,
          ],200

        );

    }


    public function tracks(Request $request)
    {

        /* $result=DB::table('bustime')
        ->leftjoin('tracks','bustime.track_id','=','tracks.id')
        ->select('tracks.id as track_id','tracks.track_name as track_name','tracks.track_nick as track_nick')
        ->where('bustime.station_id','=',1)
        ->distinct()
        ->get();
        return $result; */

        $datas = BusTime::where('station_id', $request->station_id)->with('track')->distinct('track_id')->select('track_id')->get();

        return response()->json
        ([
           'datas'=>$datas,
          'status' =>true ,
          'messages' => null,
          ],200

        );
    }

    public function bustimes(Request $request)
    {

        /*$result=DB::table('bustime')
        ->leftjoin('buses','bustime.bus_id','=','buses.id')
        ->select('bustime.bus_id as bus_id','bustime.bus_timee as bus_timee','buses.bus_number as bus_number')
        ->where('bustime.station_id','=',1)
        ->where('bustime.track_id','=',2)
       ->orderBy('bustime.bus_id','asc')

        ->get();
        return $result;*/

        $datas = BusTime::where('station_id', $request->station_id)->where('track_id', $request->track_id)->with('bus')
        ->orderBy('bus_id')->orderBy('bus_timee')->select('bus_id', 'bus_timee')->get();

        return response()->json
        ([
           'datas'=>$datas,
          'status' =>true ,
          'messages' => null,
          ],200

        );


    }

}
