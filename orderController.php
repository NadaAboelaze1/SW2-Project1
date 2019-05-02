<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;

class orderController extends Controller
{
  public function all_items()
   {

        $items = items::all();

  
    return view('cashier.make',compact('items'));




}
}
