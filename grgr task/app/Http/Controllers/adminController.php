<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users_model;
class adminController extends Controller
{
    public function index()
    {
    	$users = users_model::all();
    	$username = users_model::find('1');

        return view('home',compact('users'));

    }
}
