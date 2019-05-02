@extends('admin.layouts.app')

@section('content')
<div class="container">

   <div class="row">
       <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
               <div class="panel-heading">Register</div>
>>>>>>> 2c0bff26e296dadd57459b7e73c5eb1eafcf06aa

               <div class="panel-body">
                   <form class="form-horizontal" action="addEmployee" method="post">
                       
                       {{ csrf_field() }}

                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <label for="name" class="col-md-4 control-label">Name</label>

                           <div class="col-md-6">
                               <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                               @if ($errors->has('name'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('name') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>

                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                           <div class="col-md-6">
                               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                               @if ($errors->has('email'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('email') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>


                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <label for="password" class="col-md-4 control-label">Password</label>

                           <div class="col-md-6">
                               <input id="password" type="password" class="form-control" name="password" required>

                               @if ($errors->has('password'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                           <div class="col-md-6">
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                           </div>
                       </div>
                       
                       <div class="form-group">
                           <label for="age" class="col-md-4 control-label">age</label>

                           <div class="col-md-6">
                               <input id="age" type="age" class="form-control" name="age" required>

                               @if ($errors->has('age'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('age') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                        <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
                           <label for="admin" class="col-md-4 control-label">Admin</label>

                           <div class="col-md-6">
                               <input id="admin" type="text" class="form-control" name="admin" value="{{ old('admin') }}" required autofocus>

                               @if ($errors->has('admin'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('admin') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       
                       <div class="form-group{{ $errors->has('branch_id') ? ' has-error' : '' }}">
                           <label for="branch_id" class="col-md-4 control-label">branch_id</label>

                           <div class="col-md-6">
                               <input id="branch_id" type="text" class="form-control" name="branch_id" value="{{ old('branch_id') }}" required autofocus>

                               @if ($errors->has('branch_id'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('branch_id') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                           <label for="salary" class="col-md-4 control-label">Salary</label>

                           <div class="col-md-6">
                               <input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}" required autofocus>

                               @if ($errors->has('salary'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('salary') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group{{ $errors->has('Gender') ? ' has-error' : '' }}">
                           <label for="Gender" class="col-md-4 control-label">Gender</label>

                           <div class="col-md-6">
                               <input id="Gender" type="text" class="form-control" name="Gender" value="{{ old('Gender') }}" required autofocus>

                               @if ($errors->has('Gender'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('Gender') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
                           <label for="Address" class="col-md-4 control-label">Address</label>

                           <div class="col-md-6">
                               <input id="Address" type="text" class="form-control" name="Address" value="{{ old('Address') }}" required autofocus>

                               @if ($errors->has('Address'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('Address') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group{{ $errors->has('DateOfBirth') ? ' has-error' : '' }}">
                           <label for="DateOfBirth" class="col-md-4 control-label">DateOfBirth</label>

                           <div class="col-md-6">
                               <input id="DateOfBirth" type="text" class="form-control" name="DateOfBirth" value="{{ old('DateOfBirth') }}" required autofocus>

                               @if ($errors->has('DateOfBirth'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('DateOfBirth') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group{{ $errors->has('PhoneNumber') ? ' has-error' : '' }}">
                           <label for="PhoneNumber" class="col-md-4 control-label">Phone Number</label>

                           <div class="col-md-6">
                               <input id="PhoneNumber" type="text" class="form-control" name="PhoneNumber" value="{{ old('PhoneNumber') }}" required autofocus>
>>>>>>> 2c0bff26e296dadd57459b7e73c5eb1eafcf06aa

                               @if ($errors->has('PhoneNumber'))
                                   <span class="help-block">
                                       <strong>{{ $errors->first('PhoneNumber') }}</strong>
                                   </span>
                               @endif
                           </div>
                           
                           <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                       </div>
                       </div>
               </div>
           </div>
       </div>
    </div>
                       
                       
                       
@endsection
                     