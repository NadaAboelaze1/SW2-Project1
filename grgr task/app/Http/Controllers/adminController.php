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

        return view('admin.list',compact('users'));

    }
    public function deleteEmployeeById($id)
    {
        $user=users_model::find($id);
        $user->delete();
        return "done";
    }
    
}
