<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\level;

class LevelController extends Controller
{
   public function index(){
       $levels = level::orderBy('level','asc')->get();
       return view('admin.level',compact('levels'));
   }
   public function addLevel(){
       return view('admin.addLevel');
   }
   public function storeLevel(Request $request){
    $level = new level();
    $level->level = $request->level;
    $level->income = $request->income;
    $level->direct = $request->direct;
    $level->save();
    return redirect()->route("admin.level");
   }
   public function editLevel($id){
       $level = level::findOrFail($id);
       return view('admin.editLevel',compact('level'));

   }
   public function updateLevel(Request $request,$id){
       $level = level::findOrFail($id);
       $level->level = $request->level;
       $level->income = $request->income;
       $level->direct = $request->direct;
       $level->save();
       return redirect()->route("admin.level");
   }
   public function deleteLevel($id){
       $level = level::findOrFail($id);
       $level->delete();
       return redirect()->route('admin.level');
       
   }
}
