<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;

class itemsController extends Controller
{
    public function list()
    {
    	$items = items::all();
        return view('branch_admin.item',compact('items'));

    }
    public function deleteItemById($id)
    {
        $item=items::find($id);
        $item->delete();
        return "done";
    }

    public function add_item(Request $request)
    {
         if ($request->isMethod('post')) {
           $newItem=new items();
           $newItem->name=$request->input('name');
           $newItem->price=$request->input('price');
           $newItem->quantity=$request->input('quantity');
          $newItem->save();

    }
    return view('item.add');
  }


    public function updateItem(Request $request , $id)
        {
       if ($request->isMethod('post')){
         $newItem=items::find($id);
         $newItem->name=$request->input('name');
         $newItem->price=$request->input('price');
         $newItem->quantity=$request->input('quantity');
         $newItem->save();

            return redirect("/Branch/Items");

        }
       else{
          $item=items::find($id);
         $arr = array('item' =>$item);


            return view('item.update',$arr);
          }

        }

}
