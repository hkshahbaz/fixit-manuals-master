<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function brand(){
        return $this->hasMany(Manual::class,'brand_id','id');
    }
    public function models(){
        return $this->hasMany(CarModel::class,'brand_id','id')->with('carmodel');
    }
}
