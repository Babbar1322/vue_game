<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\JWTManager as JWT;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
<<<<<<< HEAD
=======
use Auth;
use App\wallet;
use Illuminate\Support\Str;
>>>>>>> branch1

class UserController extends Controller
{
    public function register(Request $request){
    
        $validator = Validator::make($request->all(), [
                'phone' => 'required|string|',
                'password' => 'required|string|min:6',
            ]);

            if($validator->fails()){
                return response()->json($validator->errors(), 400);
            }
<<<<<<< HEAD
=======
          $usr = User::where('is_admin','!=',1)->first();
          $admin = User::where('is_admin',1)->first('UID'); 
          $valid= User::where('UID',$request->sid)->first();
          $validPhn = User::where('phone',$request->phone)->first();
          if($validPhn){
            return response()->json(['res'=>"User already exist"] ,400);
          }
          if(!$usr && !$request->sid){
              $sid =  $admin->UID;
          }
          else{
              if(!$valid){
                  return response()->json(['res'=>"invalid invitation code"] ,400);
              }
              $sid = $request->sid;
          }
          $rand = mt_rand(10000, 99999);
        
>>>>>>> branch1

            $user = User::create([
                'name'=> $request->name,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'UID'=>$rand,
                'SID'=>$sid
            ]);

            $token = JWTAuth::fromUser($user);

            return response()->json(compact('user','token'), 201);

    }

    public function login(Request $request){
        $credentials = $request->all();
        try {
            if(! $token = JWTAuth::attempt($credentials)){
                    return response()->json(['error'=>'invalid Credentials'], 400);
            }
        }catch (JWTException $e){
            return response()->json(['error'=>'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));

    }

    public function getAuthenticatedUser(){
        try{
            if(!$user = JWTAuth::parseToken()->authenticate()){
                return response()->json(['user_not_found'], 400);
            }
        }catch (TokenExpiredException $e){
            return response()->json(['token_expired'], $e->getStatusCode());
        }catch (TokenInvalidException $e){
            return response()->json(['token_invalid'], $e->getStatusCode());
        }catch (JWTException $e){
<<<<<<< HEAD
            return response()->json(['token_absent'], $e->getStatusCode());
=======
            return response()->json(['token_absent']);
        }
        $totalperson = User::where('sid',$user->UID)->count();
        $credit = wallet::where('credit',1)->where('user_id',$user->id)->sum('balance');
        $debit = wallet::where('debit',1)->where('user_id',$user->id)->sum('balance');
        $balance = $credit - $debit;
        // $balance = wallet::where('user_id',$user->id)->where('credit',1)->sum('balance');

        return response()->json(compact(['user','balance','totalperson']));
    }

    public function adminLogin(){
        if(Auth::check()){
            return redirect('admin/dashboard');
>>>>>>> branch1
        }

        return response()->json(compact('user'));
    }
<<<<<<< HEAD
=======

    public function resetpwd($id,Request $request){
        User::where('id',$id)->update([
            'password'=>Hash::make($request->pwd)
        ]);
        return response()->json(200);
    }
    public function resetname($id,Request $request){
        User::where('id',$id)->update([
            'name'=>$request->name
        ]);
        return response()->json(200);
    }

    public function upload(Request $request,$id){
        // $this->validate($request,[
        //     'file'=> 'required|mimes:jpeg,png,jpg'
        // ]);
         $picName = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'),$picName);
        $user = User::where('id',$id)->update([
            'image'=> $picName
        ]);

        return $picName;
    }
    
>>>>>>> branch1
}
