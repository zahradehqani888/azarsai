<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincee extends Model
{
    public function branches(){
        return $this->hasMany(Branch::class);
    }
    public function cities(){
        return $this->hasMany(City::class);
    }
}
