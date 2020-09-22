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
              <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
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
                    <h3 class="card-title">Edit Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{ route("category.update", ['category' => $category->id]) }}" method="POST" >
                    @method('PATCH')
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category name" value="{{ $category->name }}">
                        @error('name')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $category->description }}</textarea>
                        @error('description')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="parent">Parent</label>
                        <select class="form-control" name="parent_id" id="parent">
                          <option value="">Make Super Category</option>
                          @foreach ($categories as $cat)
                              @if($cat->id == $category->parent_id)
                                <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                              @elseif($cat->id != $category->id)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                              @endif
                          @endforeach
                        </select>
                        @error('parent')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
 
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Edit Category</button>
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



