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
                               
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Branch</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                                
                       @foreach($users as $user)
                       <tr>
                                    
                            <td>  <span class="name">{{$user->id}}</span> </td>
                            <td> <span class="product">{{$user->name}}</span> </td>
                            <td><span class="count">{{$user->email}}</span></td>
                            <td><span class="count">{{$user->branch_id}}</span></td>
                            <td>
                                <button employee_id="{{$user->id}}" class="btn delete_employee" type="submit" name="delete_employee" id="delete_employee"  data-token="{{ csrf_token() }}" >delete</button>    
                                
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                    </table>
                </div>
                        
                    </div> <!-- /.table-stats -->
                </div>
            </div> <!-- /.card -->
        </div>  <!-- /.col-lg-8 --></div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            //alert('helllo from jquery');

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