<?php

namespace App\Http\Controllers;

use App\Year;
use DataTables;
use Illuminate\Http\Request;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $year= Year::withTrashed()->get();
        if (request()->ajax()) {
            return DataTables::of($year)
                ->addIndexColumn()
                ->editColumn('created_at', function (Year $year) {
                    return date('m/d/y - H:i A', intval(strtotime($year->created_at)));
                })
                ->editColumn('actions', function (Year $year) {
                    return view('admin.years.actions', compact('year'))->render();
                })
                ->rawColumns(['actions'])
                ->toJson();
        }
        return view('admin.years.index');
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
        $year = new Year();
        $year->year = $request->year;
        $year->timestamps;
        $year->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function edit(Year $year)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Year $year)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Year  $year
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $year = Year::whereId($id)->first();
        if ($year->delete()) {
            return response()->json(['success' => true, 'message' => 'Year deleted successfully!']);
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function restore(Request $request, $id)
    {
        if (request()->ajax()) {
            $year = Year::withTrashed()->where('id', $id)->first();
            if (isset($year) && !empty($year)) {
                if ($year->restore()) {
                    return response()->json(['success' => true, 'message' => 'Year restored successfully!']);
                }
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function permanentDelete(Request $request, $id)
    {
        if (request()->ajax()) {
            $year = Year::withTrashed()->where('id',$id)->first();
            if ($year->forceDelete()){
                return response()->json(['success' => true, 'message' => 'Year deleted permanently successfully!']);
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
}
