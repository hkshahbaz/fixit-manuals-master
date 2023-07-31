<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Contact;
use App\Manual;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $manual = Manual::count();
        $brand = Brand::count();
        $user = User::count();
        $contact = Contact::count();
        return view('admin.dashboard',compact('manual','brand','user','user','contact'));
    }
}
