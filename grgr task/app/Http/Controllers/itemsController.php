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
    
}
