<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\game;

class GameController extends Controller
{
    public function store(Request $request){
        game::create([
            'user_id'=> $request->user_id,
            'amount'=> $request->amount,
            'colnum'=> $request->colnum,
            'time'=> $request->time
        ]);
        return response()->json(200);
    }
}
