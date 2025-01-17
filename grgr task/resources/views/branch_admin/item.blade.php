@extends('admin.layouts.branch_admin_app')

@section('content')
 <div class="orders">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">items </h4>
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
                                <!-- <th class="avatar">Avatar</th> -->
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>quantity</th>
                                <th>Delete</th>
                                <th>Edit</th>
                                <!-- <th>Quantity</th>
                                <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>

                       @foreach($items as $item)
                       <tr>

                                    <td>  <span class="name">{{$item->id}}</span> </td>
                            <td> <span class="product">{{$item->name}}</span> </td>
                            <td><span class="count">{{$item->price}}</span></td>
                            <td><span class="count">{{$item->quantity}}</span></td>
                            <td>
                                <button item_id="{{$item->id}}" class="btn-xl btn-danger btn delete_item" type="submit" name="delete_item" id="delete_item"  data-token="{{ csrf_token() }}" >delete</button>

                            </td>
                            <td>
                                <button item_id="{{$item->id}}" class="btn-xl btn-primary btn update_item" type="submit" name="update_item" id="update_item"  data-token="{{ csrf_token() }}" onclick="location.href='{{ url('/branch_admin/updateitem/'.$item->id) }}'"> update</button>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            //alert('helllo from jquery');

        $(document).on('click', '.delete_item', function(){
            var id=$(this).attr('item_id');
            alert(id);
            $.ajax({
                type: "GET",
                url: "/Branch/delete/item/" + id,
                processData: false,
                contentType: false,

                success: function(response) {
                    alert("deleted");
                }
            });
        });
    </script>

@endsection
