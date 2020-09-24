
@section('title','Products')

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
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Products</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th>
                          Product name
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                            Price
                        </th> 
                        <th>
                          Categories
                        </th>
                        <th style="width: 18%">Control</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                          <img style="width: 80px" src="{{ asset('storage/' . $product->image) }}" alt="product">
                        </td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                          @foreach ($product->categories as $key => $category)
                            @if(isset($product->categories[$key + 1]))
                              {{ $category->name . ' - ' }} 
                            @else
                            {{ $category->name}} 
                            @endif
                          @endforeach
                        </td>
                        
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('product.show',['product' => $product->id]) }}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('product.edit',['product' => $product->id]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <form style="display: inline" action="{{ route('product.destroy',['product' => $product->id]) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash">
                              </i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <a class="btn btn-success" href="{{ route('product.create') }}"> <i class="fa fa-plus "></i> Create New Product</a>
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection 






