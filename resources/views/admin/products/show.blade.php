@section('title','View Product')

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
              <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
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
                        {{ $product->id }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Name
                    </div>
                    <div class="col-md-4">
                        {{ $product->name }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Description
                    </div>
                    <div class="col-md-4">
                        {{ $product->description }}
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                      Price
                  </div>
                  <div class="col-md-4">
                      {{ $product->price }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                      Quantity
                  </div>
                  <div class="col-md-4">
                      {{ $product->quantity }}
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        Catgoreies
                    </div>
                    <div class="col-md-4">
                      @foreach ($product->categories as $key => $category)
                        @if(isset($product->categories[$key + 1]))
                          {{ $category->name . ' - ' }} 
                        @else
                          {{ $category->name}} 
                        @endif
                      @endforeach
                    </div>
                </div>
                
            </div>
            <a class="btn btn-primary" href="{{ route('product.edit', ['product' => $product->id]) }}">Edit</a>
        </div>
        <!-- /.row -->        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection 



