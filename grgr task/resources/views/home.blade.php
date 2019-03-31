@extends('admin.layouts.app')

@section('content')
 <div class="orders">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Employees </h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <!-- <th class="avatar">Avatar</th> -->
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <!-- <th>Quantity</th>
                                <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                                
                       @foreach($users as $user)
                       <tr>
                                    <td class="serial">1.</td>
                                    <!-- <td class="avatar">
                                        <div class="round-img">
                                            <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                        </div>
                                    </td> -->
                                    <!-- <td> #5469 </td> -->
                                    <td>  <span class="name">{{$user->id}}</span> </td>
                                    <td> <span class="product">{{$user->name}}</span> </td>
                                    <td><span class="count">{{$user->email}}</span></td>
                                    <!-- <td>
                                        <span class="badge badge-complete">Complete</span>
                                    </td> -->
                                </tr>

                        @endforeach
                    </tbody>
                    </table>
                </div>
                        
                    </div> <!-- /.table-stats -->
                </div>
            </div> <!-- /.card -->
        </div>  <!-- /.col-lg-8 --></div></div>

@endsection