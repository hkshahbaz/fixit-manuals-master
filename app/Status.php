<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function manual(){
        return $this->hasMany(Manual::class,'status_id','id');
    }
}
