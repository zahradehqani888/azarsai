<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    protected $fillable=['name','customerprice','branchprice','number','storage','color_id','image1','image2','image3','image4','os','battery','display','weight','ram','camera','processor','sim','description'];
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
