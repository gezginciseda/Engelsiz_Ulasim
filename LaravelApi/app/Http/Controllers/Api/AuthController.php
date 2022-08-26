<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;

use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        $email=$request->email;

        $password=$request->password;


        if(!(Auth::attempt(['email' => $email, 'password' => $password])))
        {

            $message['error'] = 'Kullanıcı Bilgileri Yanlis ';
            return response()->json([

                $message,
                'status'=>false,
            ],401);

        }

        else
         {

            $user=Auth::user();
            $tokenData = $user->createToken("Login");
            $token = $tokenData->token;
            $token->expires_at = Carbon::now()->addMonth(1);



            $data=[
            'username' => $user->name,
            'email' => $user->email,
            'tc'=>$user->tc,
            'phone'=>$user->phone,
            'id' => $user->id];



            return response()->json([
            'data'=>$data,
            'status' =>true ,
            'api_token' => $tokenData->accessToken,
            ],200);}
    }

    
    public function register(RegisterRequest $request)
       {

            $user=User::create([

            "name"=>$request->name,
            "tc"=>$request->tc,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            ]);

                $token=$user->createToken('Token')->accessToken;
                return response()->json([ 'user'=>$user,'token'=>$token],200);

}


    public function logout(Request $request)
    {

        if(Auth::check())
        {

            Auth::user()->authUserToken()->delete(); // BURADA KAYITLI KULLANICINININ TOKEN ALIYORUZ

            return response()->json([
            'message'=>'succsess logout'],status:200);
        }

            return response()->json([

               'error'=>'Unauthorized'],status:401);

    }
}
