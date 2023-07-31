<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        dd(auth()->user()->hasRole('admin'));
        $user = User::withTrashed()->get();
//        dd($livenews);
        if (request()->ajax()) {
            return DataTables::of($user)
                ->addIndexColumn()
                ->editColumn('created_at', function (User $user) {
                    return date('m/d/y - H:i A', intval(strtotime($user->created_at)));
                })
                ->editColumn('status', function (User $user) {
                    return view('admin.users.status', compact('user'))->render();
                })
                ->editColumn('actions', function (User $user) {
                    return view('admin.users.actions', compact('user'))->render();
                })

                ->rawColumns(['actions','status'])
                ->toJson();
        }
        return view('admin.users.index');
    }
    public function destroy($id)
    {
        $user = User::whereId($id)->first();

        if ($user->delete()) {
            return response()->json(['success' => true, 'message' => 'offer deleted successfully!']);
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','confirmed'],
        ]);
        if ($validator->fails()) {
            return response()->json(['messages' => $validator->messages()->all()]);
        }
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return void
     */
    public function deleteuser($id)
    {
        $user = User::whereId($id);
        if ($user->delete()) {
            return response()->json(['success' => true, 'message' => 'User deleted successfully!']);
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }



    public function restore(Request $request, $id)
    {
        if (request()->ajax()) {
            $user = User::withTrashed()->where('id', $id)->first();
            if (isset($user) && !empty($user)) {
                if ($user->restore()) {
                    return response()->json(['success' => true, 'message' => 'User restored successfully!']);
                }
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function permanentDelete(Request $request, $id)
    {
        if (request()->ajax()) {
            $user = User::withTrashed()->where('id',$id)->first();
            if ($user->forceDelete()){
                return response()->json(['success' => true, 'message' => 'User deleted permanently successfully!']);
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
}
