@extends('admin.layouts.master-layout')
@section('body')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark"> Product Brands</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Brand</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{'/admin/product-brands/'.$brands->id}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input name="name" type="text" class="form-control" value="{{$brands->name}}" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Parent Brand</label>
                      <select class="form-control" name="parent_id">
                        <option value="">Primary</option>
                        @foreach ($allbrand as $brand)
                          @if ($brand->id != $brands->parent_id)
                          <option value="{{ $brand->id }}" {{ $brand->id == $brands->parent_id? 'selected' : '' }}>{{ $brand->name }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name ="description" class="form-control" rows="6">{{$brands->description}}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="custom-file">
                        <img src="{{asset('backend/img/brand/'.$brands->image)}}" alt="" width="40px" height="40px">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input name ="image" type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Upload/Add Image</label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Update Brand</button>
            </div>
            </form>
          </div>
        </div>
        <div class="col-4">

        </div>
        <!-- /.col -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection