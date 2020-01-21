@extends('admin.layouts.master-layout');
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark"> Store Settings</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
              <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-general" aria-selected="true">General</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-product-tab" data-toggle="pill" href="#custom-tabs-one-product" role="tab" aria-controls="custom-tabs-one-product" aria-selected="false">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-shipping-tab" data-toggle="pill" href="#custom-tabs-one-shipping" role="tab" aria-controls="custom-tabs-one-shipping" aria-selected="false">Shipping</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-one-payments-tab" data-toggle="pill" href="#custom-tabs-one-payments" role="tab" aria-controls="custom-tabs-one-payments" aria-selected="false">Payments</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                  <form role="form">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card card-warning">
                          <div class="card-header">
                            <h3 class="card-title">Store Address</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Country / State</label>
                                    <select class="custom-select">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>City</label>
                                    <select class="custom-select">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card card-warning">
                          <div class="card-header">
                            <h3 class="card-title">General Options</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label>Selling location(s)</label>
                                    <select class="custom-select">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Shipping location(s)</label>
                                    <select class="custom-select">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Default customer location</label>
                                    <select class="custom-select">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Tax Rate</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card card-warning">
                          <div class="card-header">
                            <h3 class="card-title">Currency options</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label>Currency</label>
                                    <select class="custom-select">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Thousand separator</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Decimal separator</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Number of decimals</label>
                                    <input type="text" class="form-control" placeholder="Enter ...">
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>

                </div>
                <div class="tab-pane fade" id="custom-tabs-one-product" role="tabpanel" aria-labelledby="custom-tabs-one-product-tab">
                  <form role="form">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card card-warning">
                          <div class="card-header">
                            <h3 class="card-title">Measurements</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Weight unit</label>
                                    <select class="custom-select">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- textarea -->
                                  <div class="form-group">
                                    <label>Dimensions unit</label>
                                    <select class="custom-select">
                                      <option>option 1</option>
                                      <option>option 2</option>
                                      <option>option 3</option>
                                      <option>option 4</option>
                                      <option>option 5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-shipping" role="tabpanel" aria-labelledby="custom-tabs-one-shipping-tab">

                </div>
                <div class="tab-pane fade" id="custom-tabs-one-payments" role="tabpanel" aria-labelledby="custom-tabs-one-payments-tab">
                  <form role="form">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-warning">
                          <div class="card-header">
                            <h3 class="card-title">Payment methods</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Method</th>
                                <th>Enabled</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>Direct bank transfer</td>
                                <td>
                                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Take payments in person via BACS. More commonly known as direct bank/wire transfer</label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Check payments</td>
                                <td>
                                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2">Take payments in person via checks. This offline gateway can also be useful to test purchases.</label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Cash on delivery</td>
                                <td>
                                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                    <label class="custom-control-label" for="customSwitch3">Have your customers pay with cash (or by other means) upon delivery.</label>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>Paypal</td>
                                <td>
                                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                    <label class="custom-control-label" for="customSwitch4">PayPal Standard redirects customers to PayPal to enter their payment information.</label>
                                  </div>
                                </td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>Method</th>
                                <th>Enabled</th>
                              </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
<!-- /.content-wrapper -->
@endsection