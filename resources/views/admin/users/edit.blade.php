@section('title','Edit User')

@extends('admin.layouts.app')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Edit user</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{ route("user.update", ['user' => $user->id]) }}" method="POST" >
                      @method('PATCH')
                      @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="{{ $user->username }}">
                        @error('username')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="fullname">Full Name (optional)</label>
                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full name" value="{{ $user->fullname }}">
                        @error('fullname')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" placeholder="Enter email">
                        @error('email')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        @error('password')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="Enter confirm password">
                        @error('password_confirmation')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone Number (optional)</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number"  value="{{ $user->phone }}">
                        @error('phone')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="addreess">Addreds (optional)</label>
                        <input type="text" class="form-control" name="addreess" id="adreess" placeholder="Enter addreess"  value="{{ $user->address }}">
                        @error('address')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
 
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Edit User</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <!-- /.row -->        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection 



