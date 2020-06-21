<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    public $timestamps = false;
    protected $fillable = ['name,type'];
    public function details(){
        return $this ->hasMany(details::class);
    }

   
}
