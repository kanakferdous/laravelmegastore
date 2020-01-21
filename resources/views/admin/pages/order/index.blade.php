@extends('admin.layouts.master-layout');
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark"> All Orders</h1>
          <form role="form">
              <button type="submit" class="btn btn-primary">Add New Order</button>
          </form>
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
                  <th>Order ID</th>
                  <th>Order Date</th>
                  <th>Order Status</th>
                  <th>Order Product Count</th>
                  <th>Total Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>#001</td>
                  <td>29 December, 2019</td>
                  <td>Pending Payment</td>
                  <td>6</td>
                  <td>BDT 1500</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>#002</td>
                  <td>29 December, 2019</td>
                  <td>Pending Payment</td>
                  <td>10</td>
                  <td>BDT 5000</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info"><i class="far fa-eye"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </div>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>SL NO:</th>
                  <th>Order ID</th>
                  <th>Order Date</th>
                  <th>Order Status</th>
                  <th>Order Product Count</th>
                  <th>Total Price</th>
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