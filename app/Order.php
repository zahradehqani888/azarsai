<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable=['product_name','quantity','price','name','national_code','tel','email','province','city','address','postal_code'];
}
