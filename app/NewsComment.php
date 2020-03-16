<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $fillable=['body','news_id','user_id','ruser','rbody'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
