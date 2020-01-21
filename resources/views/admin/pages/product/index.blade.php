@extends('admin.layouts.master-layout')
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark"> All Products</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL NO:</th>
                  <th><i class="far fa-image"></i></th>
                  <th>Name</th>
                  <th>SKU</th>
                  <th>Stock</th>
                  <th>Price</th>
                  <th>Fetured</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i=1;
                  @endphp
                @foreach($items as $item)
                <tr>
                  <td>{{$i}}</td>
                  <td><img src="{{asset('backend/img/product/' . $item->feat_image)}}" alt="" width="40px" height="40px"></td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->sku}}</td>
                  <td>In Stock</td>
                  <td>{{$item->regular_price}}</td>
                  <td>Fetured</td>
                  <td>Published On<br>{{$item->created_at}}</td>
                  <td>
                    <!-- <form action="{{'/admin/products/'. $item->id}}" method="POST">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <div class="btn-group">
                        <a href="/admin/products/{{$item->id}}/edit" type="button" class="btn btn-info"><i class="far fa-eye"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                      </div>
                    </form> -->
                    <a href="/admin/products/{{$item->id}}/edit" type="button" class="btn btn-info"><i class="far fa-eye"></i></a>
                    <a href="#deleteProduct{{ $item->id }}" class="btn btn-danger" data-toggle="modal" data-target="#deleteProduct{{ $item->id }}"><i class="fas fa-trash-alt"></i></a>

							      <!-- Product Delete Modal Content Start -->
										<div class="modal fade" id="deleteProduct{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Deletion Confirmation</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
                          <div class="modal-body">
										        <p>Are you sure you want to delete this item?</p>
										      </div>
										      <div class="modal-footer">
										        <form action="{{'/admin/products/'. $item->id}}" method="POST">
										        	{{ csrf_field() }}
                              {{method_field('DELETE')}}
										        	<button type="submit" class="btn btn-danger">Confirm Delete</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										        </form>
                          </div>
										    </div>
                      </div>
                    </div>
                  </td>
                </tr>
                @php
                      $i++;
                  @endphp
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>SL NO:</th>
                  <th><i class="far fa-image"></i></th>
                  <th>Name</th>
                  <th>SKU</th>
                  <th>Stock</th>
                  <th>Price</th>
                  <th>Fetured</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection