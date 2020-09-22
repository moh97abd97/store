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
              <li class="breadcrumb-item active">View</li>
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
                <div class="row">
                    <div class="col-md-2">
                        #ID
                    </div>
                    <div class="col-md-4">
                        {{ $user->id }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Fullname
                    </div>
                    <div class="col-md-4">
                        {{ $user->fullname }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Email
                    </div>
                    <div class="col-md-4">
                        {{ $user->email }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        phone
                    </div>
                    <div class="col-md-4">
                        {{ $user->phone }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Address
                    </div>
                    <div class="col-md-4">
                        {{ $user->address }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Is Admin 
                    </div>
                    <div class="col-md-4">
                        @if ($user->is_admin == 1)
                            Yes
                        @else
                            No
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Created_at
                    </div>
                    <div class="col-md-4">
                        {{ $user->created_at }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Updated_at
                    </div>
                    <div class="col-md-4">
                        {{ $user->updated_at }}
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" href="{{ route('user.edit', ['user' => $user->id]) }}">Edit</a>
        </div>
        <!-- /.row -->        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection 



