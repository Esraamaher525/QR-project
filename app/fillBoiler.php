<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fillBoiler extends Model
{
    protected $fillable = ['boiler,pressure,coils_tempreture1,coils_tempreture2,coils_tempreture3,coils_tempreture4,coils_tempreture5,coils_tempreture6,blowdown_working,stack_temperature,leakage1,leakage2,pump_no1,pump_no2,user_name'];
    public function equipments(){
        return $this ->belongTo(Equipment::class);
    }
}
