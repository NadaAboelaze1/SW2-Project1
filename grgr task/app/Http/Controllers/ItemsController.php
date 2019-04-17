<?php

namespace App\Http\Controllers;
use App\items_model;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function list()
    {
    	$items = items_model::all();
        return view('branch_admin.items',compact('items'));
    }
    public function deleteItemById($id)
    {
        $item=items_model::find($id);
        $item->delete();
        return "done";
    }
}
