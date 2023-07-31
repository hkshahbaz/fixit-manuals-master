<?php

namespace App\Http\Controllers;

use App\Brand;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand= Brand::withTrashed()->get();
        if (request()->ajax()) {
            return DataTables::of($brand)
                ->addIndexColumn()
                ->editColumn('created_at', function (Brand $brand) {
                    return date('m/d/y - H:i A', intval(strtotime($brand->created_at)));
                })
                ->editColumn('actions', function (Brand $brand) {
                    return view('admin.carbrand.actions', compact('brand'))->render();
                })

                ->rawColumns(['actions'])
                ->toJson();
        }
        return view('admin.carbrand.index');
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
        if ($request['carPic']){
            $request['carpic'] = $request->file('carPic')->store('public/brands');
            $request['carpic'] = Storage::url($request['carpic']);
            $request['carpic'] = asset($request['carpic']);
        }
        $brand = new Brand();
        $brand->title = $request->title;
        $brand->carpic = $request->carpic;
        $brand->timestamps;
        $brand->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::whereId($id)->first();
        if ($brand->delete()) {
            return response()->json(['success' => true, 'message' => 'Brand deleted successfully!']);
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function restore(Request $request, $id)
    {
        if (request()->ajax()) {
            $brand = Brand::withTrashed()->where('id', $id)->first();
            if (isset($brand) && !empty($brand)) {
                if ($brand->restore()) {
                    return response()->json(['success' => true, 'message' => 'Brand restored successfully!']);
                }
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function permanentDelete(Request $request, $id)
    {
        if (request()->ajax()) {
            $brand = Brand::withTrashed()->where('id',$id)->first();
            if ($brand->forceDelete()){
                return response()->json(['success' => true, 'message' => 'Brand deleted permanently successfully!']);
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
}
