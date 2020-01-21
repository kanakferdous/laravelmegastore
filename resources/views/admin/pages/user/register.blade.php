@extends('admin.layouts.master-layout')
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark"> New User Registration</h1>
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
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New User Create</h3>
            </div>
            <!-- /.card-header -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- form start -->
            <form action="/admin/register" role="form" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputUsername">User Name</label>
                  <input name="uname" type="text" class="form-control" id="exampleInputUsername" placeholder="User Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputFirstname">First Name</label>
                  <input name="fname" type="text" class="form-control" id="exampleInputFirstname" placeholder="First Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputLastname">Last Name</label>
                  <input name="lname" type="text" class="form-control" id="exampleInputLastname" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPass">Confirm Password</label>
                  <input name="password_confirmation" type="password" class="form-control" id="exampleInputConfirmPass" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Profile Picture</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.col -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection