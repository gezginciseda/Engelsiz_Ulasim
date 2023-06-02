<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Bus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;


class BusController extends Controller
{
    
    public function index()
    {
        
        $datas = Bus::all();


        return response()->json([
            'datas'=>$datas,
            'status' =>true ,
            'messages' => null,
          ],200

        );

    }

}
