<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users_model;
use App\messages;

class adminController extends Controller
{
    public function index()
    {
    	$users = users_model::all();
    	$username = users_model::find('1');

        return view('home',compact('users'));

    }

    public function showMsg()
    {
        
        $msg = messages::all();
        //$msg = messages::where('id','4')->get();
        //$msg = DB::table('messages')->where('id', 4)->first();
       // $msg = $msg->msg_content;
        return view('cashier.welcome',compact('msg'));
        //return view('cashier.welcome')->with('msg',$msg);
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
    
<<<<<<< HEAD

   public function addEmployee(Request $request)
   {
       if ($request->isMethod('post')) {
          $newEmp=new users_model();
          $newEmp->name=$request->input('name');
          $newEmp->email= $request->input('email');
          $newEmp->password= $request->input('password');
          $newEmp->admin = $request->input('admin');
          $newEmp->branch_id = $request->input('branch_id');
          $newEmp->salary = $request->input('salary');
          $newEmp->Gender = $request->input('Gender');
          $newEmp->PhoneNumber = $request->input('PhoneNumber');
          $newEmp->Address = $request->input('Address');
          $newEmp->DateOfBirth = $request->input('DateOfBirth');
          $newEmp->age = $request->input('age');

         $newEmp->save();

       }
       return view('admin.add');
   }
>>>>>>> 2c0bff26e296dadd57459b7e73c5eb1eafcf06aa

	public function sendMessage(Request $request)
    {

        $msg= new messages();

        $msg->msg_txt=$request->msg;
        //$dt = Carbon\Carbon::now();
		//$dt = $dt->toDateTimeString();
        $ldate = date('Y-m-d H:i:s');
        $msg->msg_date= $ldate;

        $msg->save();

        return "done";
    }
  //   public function sendMessage(Request $request)
  //   {
  //        if ($request->isMethod('post')) {
  //          $newMsg=new messages();
  //          $newMsg->msg_txt=$request->input('msg');
  //          $dt = Carbon\Carbon::now();
  //          $dt = $dt->toDateTimeString();
  //          $newMsg->msg_date=$dt;

  //         $newMsg->save();

  //   }
  //   return view('admin.home');
  // }
    // if ($request->isMethod('post')) {
    //        $newItem=new items();
    //        $newItem->name=$request->input('name');
    //        $newItem->price=$request->input('price');
    //        $newItem->quantity=$request->input('quantity');
    //       $newItem->save();

    
}
