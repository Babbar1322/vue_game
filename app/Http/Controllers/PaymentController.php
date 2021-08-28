<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\payment;
use App\wallet;
use App\timer;

class PaymentController extends Controller
{
    public function index(){
        $pays = payment::get();
        return view('admin.userPayment',compact('pays'));
    }
    public function payment(Request $request , $id){
        $user = User::where('id',$id)->first();
        $pay = payment::create([
            'user_id'=>$id,
            'user_name'=>$user->name,
            'amount'=>$request->amount,
            'upi_id'=>$request->upi,
            'ref_no'=> $request->refno
        ]);
       
        return response()->json(["res"=>"payment successfull"],200);
    }
    public function accept(Request $request){
        $pay= payment::where('user_id',$request->user_id)->where('ref_no',$request->ref_no)->update([
            'status'=>1,
            'amount'=>$request->amount
        ]);
        if($pay){
            wallet::create([
                'balance'=>$request->amount,
                'user_id'=> $request->user_id,
                'credit'=>1
            ]);
        }
        return redirect()->back();
    }
    public function reject(Request $request){
        $pay= payment::where('user_id',$request->user_id)->where('ref_no',$request->ref_no)->update([
            'status'=>-1
        ]);
       
        return redirect()->back();
    }

    public function storeTime(Request $request){
        timer::create([
            'start_time'=>$request->start_time, 
            'end_time'=> $request->end_time,
            'last_time'=> $request->last_time
        ]);
    }
    public function getTime(){
        $timer = timer::orderBy('id','desc')->first();
        return response()->json(compact('timer'));
    }
}
