@section('title','Create Product')

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
              <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Prducts</a></li>
              <li class="breadcrumb-item active">Create</li>
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
                    <h3 class="card-title">Create New Product</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{ route("product.store") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product name" value="{{ old('name') }}">
                        @error('name')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ old('description') }}</textarea>
                        @error('description')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="image">Product image</label>
                        <input type="file" class="form-control" name="image" id="image" >
                        @error('image')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
                        @error('price')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="quantity" min="1" value="{{ old('quantity') }}">
                        @error('quantity')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="parent">Category (multiple selection)</label>
                        <select style="height: 150px" class="form-control" name="catgories[]" id="parent" multiple>
                          @foreach ($categories as $category)
                            @if($category->parent_id != null)
                            <option value="{{ $category->id }}">{{ $category->name . ' (Sub Category)' }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif   
                          @endforeach
                        </select>
                        @error('catgories')
                          <span style="color:red">
                            {{ $message }}
                          </span>
                        @enderror
                      </div>
                      
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-plus "></i> Create Product</button>
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



