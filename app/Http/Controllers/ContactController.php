<?php

namespace App\Http\Controllers;

use App\Contact;
use DataTables;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact= Contact::withTrashed()->get();
        if (request()->ajax()) {
            return DataTables::of($contact)
                ->addIndexColumn()
                ->editColumn('created_at', function (Contact $contact) {
                    return date('m/d/y - H:i A', intval(strtotime($contact->created_at)));
                })
                ->editColumn('actions', function (Contact $contact) {
                    return view('admin.contact.actions', compact('contact'))->render();
                })

                ->rawColumns(['actions'])
                ->toJson();
        }
        return view('admin.contact.index');
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
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->inquirytype = $request->inquiry;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::whereId($id)->first();
        if ($contact->delete()) {
            return response()->json(['success' => true, 'message' => 'Contact deleted successfully!']);
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function restore(Request $request, $id)
    {
        if (request()->ajax()) {
            $contact = Contact::withTrashed()->where('id', $id)->first();
            if (isset($contact) && !empty($contact)) {
                if ($contact->restore()) {
                    return response()->json(['success' => true, 'message' => 'Contact restored successfully!']);
                }
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
    public function permanentDelete(Request $request, $id)
    {
        if (request()->ajax()) {
            $contact = Contact::withTrashed()->where('id',$id)->first();
            if ($contact->forceDelete()){
                return response()->json(['success' => true, 'message' => 'Contact deleted permanently successfully!']);
            }
        }
        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
}
