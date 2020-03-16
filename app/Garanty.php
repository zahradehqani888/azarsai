<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garanty extends Model
{
    protected $fillable=['serial_no','imei','brand','model','time_in','garanty_type','garanty_date','activation_code'];
}
