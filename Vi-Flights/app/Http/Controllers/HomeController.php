<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::check()){
            $role = Auth::user()->role_id;
            if($role == 1)
                return view('inicio2');
            return view('inicio');
        }else{
            return redirect()->action("HomeController@index");
        }
    }
}
