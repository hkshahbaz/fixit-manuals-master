<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manual extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function model(){
        return $this->belongsTo(CarModel::class,'car_model_id','id');
    }
    public function year(){
        return $this->belongsTo(Year::class,'year_id','id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function status(){
        return $this->belongsTo(Status::class,'status_id','id');
    }

}
