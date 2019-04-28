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
                                <th>Delete</th>
                                <th>Edit</th>
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
                                    
                                    <td>
                                        
                                        <!-- <a type="submit" class="btn red btn-outline sbold delete_employee" employee_id="{{$user->id}}" href="#"> Delete Slider </a> -->
                                        <button employee_id="{{$user->id}}" class="btn delete_employee" type="submit" name="delete_employee" id="delete_employee"  data-token="{{ csrf_token() }}" >delete</button> 
                                        
                                        
                                    </td>
                                    <td>
                                        
                                        <!-- <a type="submit" class="btn red btn-outline sbold delete_employee" employee_id="{{$user->id}}" href="#"> Delete Slider </a> -->
                                        <button employee_id="{{$user->id}}" class="btn edit_employee green btn-outline sbold edit_slider" type="submit" name="edit_employee" id="edit_employee" data-toggle="modal" href="#editModal"  data-token="{{ csrf_token() }}" >Edit</button> 

                                        
                                    </td>
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

        <!-- -->
        <div class="modal fade" id="editModal" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Edit User</h4>
                </div>
                <form id="editEmployee">
                    {{ csrf_field() }}
                    <input type="hidden" id="user_id_edit" name="user_id_edit">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="name" id="name" class="form-control" placeholder="enter name here"> </div>
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="email_edit" id="email_edit" class="form-control" placeholder="enter E-mail here"> </div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="enter phone here"> </div>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="salary" id="salary" class="form-control" placeholder="enter phone here"> </div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="address" id="address" class="form-control" placeholder="enter address here"> </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn green">Save changes</button>
                    </div>
                </form>

            </div>
        <!-- -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            //alert('helllo from jquery');
        $("#editEmployee").submit(function(m) {
            //alert("don't click me aiiiii");
            $.ajax({
                type: "POST",
                url: '/admin/UpdateEmployees',
                data: new FormData( this ),
                processData: false,
                contentType: false,
                success: function(response)
                {
                    if(response=="done"){
                        alert("done");
                    }
                    else{
                        alert(response);
                    }
                }
            });
            m.preventDefault(); // avoid to execute the actual submit of the form.
        });


        $(document).on('click', '.delete_employee', function(){
            var id=$(this).attr('employee_id');
            alert(id);
            $.ajax({
                type: "GET",
                url: "/admin/delete/employee/" + id,
                processData: false,
                contentType: false,

                success: function(response) {
                    alert("deleted");
                }
            });
        });
    </script>

@endsection