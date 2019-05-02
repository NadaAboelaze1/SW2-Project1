@extends('admin.layouts.cashier_app')

@section('content')


     @if (session('status'))
         <div class="alert alert-success">
             {{ session('status') }}
         </div>
     @endif
     <br><br><br>

<div>
  <form>
  <label for="item">Select item:</label>
  <select name="itemor" style="width:250px>

    @foreach($items as $item)
  <option value="{{ $item->id }}" >{{ $item->name }}</option>

    @endforeach
    </select>
  </form>
</div>

<div>
  <form>
    Quantity:<br>
    <input type="number" name="quantity" >
<br><br>

    <input type="submit" name="Make order" >
  </form>

















   @endsection
