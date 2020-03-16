<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $fillable=['body','blog_id','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
