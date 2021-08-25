<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    protected $guarded = [];
    
    public function user(){
       return  $this->hasMany('App\User');
    }
    public function scopeBalance($query)
    {
        return $query->where('credit', 1)->sum('balance');
    }
}
