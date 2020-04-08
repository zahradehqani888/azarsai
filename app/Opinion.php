<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $fillable=['name','national_code','tel','model','serial_no','buy_date','branch_name','city','q1','q2','q3','q4','q5','q6','q7','q8','q9','q10'];
}
