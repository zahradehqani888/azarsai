<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','customerprice','branchprice','storage','color_id','image1','image2','image3','image4','os','battery','display','weight','ram','camera','processor','sim','description'];

    public function colors()
    {
        return $this->belongsToMany(Color::class,'color_product','product_id','color_id');
    }
}
