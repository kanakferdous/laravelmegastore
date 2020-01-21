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
        <div class="col-4">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add New Brand</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- /.card-header -->
            <form action="/admin/product-brands" method="POST" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input name="name" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Parent Brand</label>
                      <select name ="parent_id" class="form-control">
                        <option value="">Primary</option>
                        @foreach ($items as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
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
                      <textarea name="description" class="form-control" rows="6" placeholder="Enter ...">---</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Upload/Add Image</label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Add New Brand</button>
            </div>
            </form>
          </div>
        </div>
        <div class="col-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Brands</h3>
            </div>
            @if(session()->has("success"))
              <div class="alert alert-success alert-dismissible alert-{{session("message_type")}}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i>{{session("success")}}</h5>
              </div>
            @endif
            <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL NO:</th>
                    <th><i class="far fa-image"></i></th>
                    <th>Name</th>
                    <th>Descroption</th>
                    <th>Parent Brand Name</th>
                    <th>Slug</th>
                    <th>Count</th>
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
                      <td><img src="{{asset('backend/img/brand/' . $item->image)}}" alt="" width="40px" height="40px"></td>
                      <td> {{$item->name}}</td>
                      <td>{{$item->description}}</td>
                      <td>
                        @if ($item->parent_id == NULL)
                          Primary
                        @else
                          {{$item->parent->name}}
                        @endif
                      </td>
                      <td> {{$item->slug}}</td>
                      <td>0</td>
                      <td>
                        <form action="{{'/admin/product-brands/'. $item->id}}" method="POST">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <div class="btn-group">
                            <a href="/admin/product-brands/{{$item->id}}/edit" type="button" class="btn btn-info"><i class="far fa-eye"></i></a>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                          </div>
                        </form>
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
                    <th>Descroption</th>
                    <th>Parent Category Name</th>
                    <th>Slug</th>
                    <th>Count</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection