<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fillBoiler extends Model
{
    protected $fillable = ['boiler,pressure,coils_tempreture1,coils_tempreture2,coils_tempreture3,coils_tempreture4,coils_tempreture5,coils_tempreture6,blowdown_working,stack_temperature,user_name'];
    
}
