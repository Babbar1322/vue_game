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
use Auth;
use App\wallet;
use Illuminate\Support\Str;

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
            return response()->json(['token_expired']);
        }catch (TokenInvalidException $e){
            return response()->json(['token_invalid']);
        }catch (JWTException $e){
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
        }
        return view('admin.login');
    }

    public function postLogin(Request $request){
        $input = $request->all();
   
        
        // $this->validate($request, [
        //     'phone' => 'required',
        //     'password' => 'required',
        // ]);
   
        if(auth()->attempt(array('phone' => $input['phone'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect("admin/dashboard");
            }else{
               
                return redirect()->route('home');
            }
        }else{
            return redirect("admin/login")
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }
   
    public function getUsers(){
        $users = User::where('is_admin','!=',1)->get();
        return view('admin.users',compact('users'));
    }
  
    public function updateUser($id, Request $request){
        $user = User::findOrFail($id);
        $wall = wallet::where('user_id',$id)->first();
        if(!$wall){
        $wallet = wallet::create([
            'user_id' => $id,
            'balance'=>$request->bal
        ]);
    }
        else{
            $wallet = wallet::where('user_id',$id)->update([
                'balance'=>$request->bal
            ]);
        }
        return redirect()->route('admin.users');
    }

    public function balcut($id){
        $user = User::findOrFail($id);
        return view('admin.cutBal',compact('user'));
    }
    public function baladd($id){
        $user = User::findOrFail($id);
        return view('admin.addBal',compact('user'));
    }
    public function addBalance(Request $request,$id){
        $wallet = new wallet();
        $wallet->user_id = $id;
        $wallet->credit = 1;
        $wallet->balance = $request->bal;
        $wallet->save();
        return redirect()->route('admin.users');
    }
    public function cutBalance(Request $request,$id){
        $bal = wallet::where('user_id',$id)->where('credit',1)->sum('balance');
        if($bal > $request->bal){
        $wallet = new wallet();
        $wallet->user_id = $id;
        $wallet->debit = 1;
        $wallet->balance = $request->bal;
        $wallet->save();
        return redirect()->route('admin.users');
        }
        else{
            return redirect()->back()->with('error','not enough balance to debit');
        }
    }

    public function bet($id,Request $request){
        $wallet = new wallet();
        $wallet->user_id = $id;
        $wallet->debit = 1;
        $wallet->balance = $request->balance;
        $wallet->save();
        $credit = wallet::where('credit',1)->where('user_id',$id)->sum('balance');
        $debit = wallet::where('debit',1)->where('user_id',$id)->sum('balance');
        $balance = $credit - $debit;
        return response()->json([200,$balance]);
    }

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
    
}
