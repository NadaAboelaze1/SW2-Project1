@extends('admin.layouts.branch_admin_app')
@section('content')

<div class="orders">
   <div class="row">
       <div class="col-xl-8">
           <div class="card">
               <div class="card-body">
                   <h4 class="box-title">Add Items </h4>
               </div>
               <div class="card-body--">
                   <div class="table-stats order-table ov-h">
                       <div class="panel-body">
                   @if (session('status'))
                       <div class="alert alert-success">
                           {{ session('status') }}
                       </div>
                   @endif



   <body>
     <br><br><br>
<form action="additem" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"/>
   Item :<br>
    <input type="text" name="name">
    <br>
    Price:<br>
    <input type="number" name="price" >
    <br><br>
    Quantity:<br>
    <input type="number" name="quantity" >
    <br><br>
    <input  type="submit" value="Add">

  </form>

   </body>

   </html>


   @endsection
