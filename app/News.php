<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=['title','body','image'];
    
    public function newscomments(){
        return $this->hasMany(NewsComment::class);
    }
}
