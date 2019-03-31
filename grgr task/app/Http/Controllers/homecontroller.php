<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users_model;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// $users = users_model::all();
    	 //$username = users_model::find('1');
    	return view('admin.home');
        //return view('home',compact('users'));
        //return \View::make('admin/home');
    }
}
