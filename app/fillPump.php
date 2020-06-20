<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fillPump extends Model
{
    protected $fillable = ['h1,h2,h3,v1,v1,v3,notes,user_name'];
    public function equipments(){
        return $this ->belongTo(Equipment::class);
    }
}
