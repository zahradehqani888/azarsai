<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['title','body','category','image','BlogCategory_id'];
    public function blogcomments(){
        return $this->hasMany(BlogComment::class);
    }
}
