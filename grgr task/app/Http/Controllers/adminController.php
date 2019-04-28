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
    public function deleteEmployeeById($id)
    {
        $user=users_model::find($id);
        $user->delete();
        return "done";
    }

    public function updateUser(Request $request)
    {
        $user=users_model::find($request->user_id_edit);

        $user->name=$request->name_edit;
        $user->email=$request->email_edit;
        $user->salary=$request->salary_edit;
        $user->PhoneNumber=$request->phone_edit;
        $user->Address=$request->address_edit;

        $user->save();

        return "done";
    }
    
    public function AddEmployees()
    {
        return view('home')->with (compact('admin.register'));
    }
    
}
