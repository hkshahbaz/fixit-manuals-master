<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Status;

use App\CarModel;
use App\Http\Requests\FileRequest;
use App\Manual;
use DataTables;
use App\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Traits\StoreImageTrait;

class ManualController extends Controller
{
    use StoreImageTrait;
    public function __construct()
    {
        $this->imagePath = 'filess';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manual= Manual::with('model','year','brand')->withTrashed()->get();

        if (request()->ajax()) {
            return DataTables::of($manual)
                ->addIndexColumn()
                ->editColumn('created_at', function (Manual $manual) {
                    return date('m/d/y - H:i A', intval(strtotime($manual->created_at)));
                })
                ->editColumn('brand', function (Manual $manual) {
                    return !is_null($manual->brand) ? $manual->brand->title :' Not found';
                })
                ->editColumn('actions', function (Manual $manual) {
                    return view('admin.manuals.actions', compact('manual'))->render();
                })
                ->editColumn('manualpdf', function (Manual $manual) {
                    return view('admin.manuals.manualpdf', compact('manual'))->render();
                })
                ->editColumn('model', function (Manual $manual) {
                    return !is_null($manual->model) ? $manual->model->title :' Not found';
                })
                ->editColumn('year', function (Manual $manual) {
                    return !is_null($manual->year) ? $manual->year->year :' Not found';
                })
                ->editColumn('status', function (Manual $manual) {
                    return !is_null($manual->status) ? $manual->status->title :' Not found';
                })
                ->rawColumns(['actions','model','year','brand','status','manualpdf'])
                ->toJson();
        }
        $status = Status::all();
        $brand = Brand::all();
        $year = Year::all();

        $carmodel = CarModel::all();
        return view('admin.manuals.index',compact('year','brand','carmodel','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $manual = new Manual();
        $manual->brand_id = $request->brand;
        $manual->year_id = $request->year;
        $manual->car_model_id = $request->model;
        $manual['manual'] = $this->verifyAndStoreImage($request, 'manualFile', $this->imagePath);
        $manual->status_id = $request->status_id;
        $manual->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function show(Manual $manual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function edit(Manual $manual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manual $manual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manual = Manual::whereId($id)->first();

        if ($manual->delete()) {
            return response()->json(['success' => true, 'message' => 'Car Manual deleted successfully!']);
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function restore(Request $request, $id)
    {
        if (request()->ajax()) {
            $manual = Manual::withTrashed()->where('id', $id)->first();
            if (isset($manual) && !empty($manual)) {
                if ($manual->restore()) {
                    return response()->json(['success' => true, 'message' => 'Car Manual restored successfully!']);
                }
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function permanentDelete(Request $request, $id)
    {
        if (request()->ajax()) {
            $manual = Manual::withTrashed()->where('id',$id)->first();
            if ($manual->forceDelete()){
                return response()->json(['success' => true, 'message' => 'Car Manual deleted permanently successfully!']);
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
}
