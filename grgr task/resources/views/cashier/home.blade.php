@extends('admin.layouts.cashier_app')
@section('content')
    
<style type="text/css">
    .msg {
    background: #fff;
    border: 2px solid rgba(0,0,0,.0625)!important;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    border-radius: 5px;
    padding: 34px;
}
.msg .cont {
    background: #e9edf4;
    padding: 20px;
    margin: 20px;
    border-radius: 8px;
    height: 155px;
}
img{
    border-radius: 50%;
}


</style>

    <h1>HELLO CASHIER</h1>

    <div class="msg order">
        <div class="img">
            <img class="img-circle" style="width: 90px;height: 90px;" src="{{asset('images/admin.jpg')}}">
            <div class="cont">
                <p class="lead">
                    Hello Employee 
                    
                   
                </p>
            </div>
        </div>                       
    </div>
@endsection