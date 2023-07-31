<?php

namespace App\Http\Controllers;

use App\Brand;
use App\CarModel;
use App\User;
use Illuminate\Http\Request;
use DataTables;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car= CarModel::withTrashed()->get();
        if (request()->ajax()) {
            return DataTables::of($car)
                ->addIndexColumn()
                ->editColumn('created_at', function (CarModel $car) {
                    return date('m/d/y - H:i A', intval(strtotime($car->created_at)));
                })
                ->editColumn('actions', function (CarModel $car) {
                    return view('admin.carmodel.actions', compact('car'))->render();
                })

                ->rawColumns(['actions'])
                ->toJson();
        }
        $brand = Brand::all();
        return view('admin.carmodel.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getmodel(Request $request){
        //get all models where brand_id = request -> brand_id
        //return all the data
        if (request()->ajax()){
            return CarModel::where('brand_id',$request->brand_id)->get();
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new CarModel();
        $model->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $carModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarModel $carModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $car = CarModel::whereId($id)->first();

        if ($car->delete()) {
            return response()->json(['success' => true, 'message' => 'Car Model deleted successfully!']);
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function restore(Request $request, $id)
    {
        if (request()->ajax()) {
            $car = CarModel::withTrashed()->where('id', $id)->first();
            if (isset($car) && !empty($car)) {
                if ($car->restore()) {
                    return response()->json(['success' => true, 'message' => 'Car Model restored successfully!']);
                }
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function permanentDelete(Request $request, $id)
    {
        if (request()->ajax()) {
            $car = CarModel::withTrashed()->where('id',$id)->first();
            if ($car->forceDelete()){
                return response()->json(['success' => true, 'message' => 'Car Model deleted permanently successfully!']);
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
}
