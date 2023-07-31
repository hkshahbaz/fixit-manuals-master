<?php

namespace App\Http\Controllers;

use App\Brand;
use App\CarModel;
use App\Manual;
use App\Year;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function manual(Request $request){
        $models = CarModel::where('title','like','%'.$request->manual.'%')->pluck('id')->toArray();
        $manual = Manual::whereIn('car_model_id',$models)->with('year','model')->get();
        $brands = Brand::all();
        $word = $request->manual;
        $modellist = CarModel::all();
        $years = Year::all();
        return view('index', compact('brands','manual','word','modellist','years'));
    }

    public function main_search(Request $request){
        $manual = Manual::where('car_model_id',$request->car_model_id)
            ->where('brand_id',$request->brand_id)
            ->where('year_id',$request->year_id)
            ->with('year','model')->get();
        $brands = Brand::all();
        $word = $request->manual;
        $modellist = CarModel::all();
        $years = Year::all();
        return view('index', compact('brands','manual','word','modellist','years'));
    }
}
