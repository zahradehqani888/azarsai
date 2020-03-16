<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['user_id','news_id','body','flag'];
    public function user(){
       return $this->belongsTo(User::class);
    }
    public function news(){
        return $this->belongsTo(News::class);
    }
}
