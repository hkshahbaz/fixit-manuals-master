<?php

namespace App\Http\Controllers;

use App\Brand;
use App\CarModel;
use App\Contact;
use App\Manual;
use App\User;
use App\Year;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $brands = Brand::all();
        $modellist = CarModel::all();
        $years = Year::all();
        return view('index', compact('brands','modellist','years'));
    }
    public function manual($id)
    {
        $models = [];
        $model =  CarModel::with('carmodel')->where('brand_id',$id)->get();
        $brand = Brand::whereId($id)->first();
        $models['models'] = $model;
        $models['brand_up'] = $brand;
        return $models;
    }
}
