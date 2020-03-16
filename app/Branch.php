<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable=['country_id','state_id','branchname','nationalcode','email','tell','mobile','name','province','city','address','code'];
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
}
