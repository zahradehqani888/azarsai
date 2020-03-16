<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $fillable=['name','national_code','tel','model','serial_no','imei','date_in','garanty_date','message','status','activation_code','branch_name'];
}
