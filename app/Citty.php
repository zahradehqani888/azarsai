<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citty extends Model
{
    public function province(){
        return $this->belongsTo(Province::class,'province_id');
    }
}
