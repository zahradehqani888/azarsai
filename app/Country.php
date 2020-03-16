<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     protected $fillable=['name'];
     
    public function branch(){
        return $this->hasMany(Branch::class);
    }
    public function state(){
        return $this->hasMany(State::class);
    } 
            
}
