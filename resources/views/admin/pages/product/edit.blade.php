@extends('admin.layouts.master-layout')
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0 text-dark"> Add New Product</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <form action="{{'/admin/products/'.$products->id}}" method="POST" role="form" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{method_field('PUT')}}
      <div class="container-fluid">
        <div class="row">
          <div class="col-9">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input name="title" type="text" class="form-control" value="{{$products->title}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="6" >{{$products->description}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fas fa-edit"></i>
                        Product Data
                      </h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-5 col-sm-3">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-general-tab" data-toggle="pill" href="#vert-tabs-general" role="tab" aria-controls="vert-tabs-general" aria-selected="true"><i class="fas fa-wrench"></i> General</a>
                            <a class="nav-link" id="vert-tabs-inventory-tab" data-toggle="pill" href="#vert-tabs-inventory" role="tab" aria-controls="vert-tabs-inventory" aria-selected="false"><i class="fas fa-warehouse"></i> Inventory</a>
                            <a class="nav-link" id="vert-tabs-attribute-tab" data-toggle="pill" href="#vert-tabs-attribute" role="tab" aria-controls="vert-tabs-attribute" aria-selected="false"><i class="fas fa-store-alt"></i> Attributes</a>
                          </div>
                        </div>
                        <div class="col-7 col-sm-9">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade active show" id="vert-tabs-general" role="tabpanel" aria-labelledby="vert-tabs-general-tab">
                              <div class="form-group">
                                <label>Regular Price</label>
                                <input name="regular_price" type="text" class="form-control" value="{{$products->regular_price}}">
                              </div>
                              <div class="form-group">
                                <label>Sale Price</label>
                                <input name="sale_price" type="text" class="form-control" value="{{$products->sale_price}}">
                              </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-inventory" role="tabpanel" aria-labelledby="vert-tabs-inventory-tab">
                              <div class="form-group">
                                <label>SKU</label>
                                <input name="sku" type="text" class="form-control" value="{{$products->sku}}">
                              </div>
                              <div class="form-group">
                                <label>Quantity</label>
                                <input name="quantity" type="text" class="form-control" value="{{$products->quantity}}">
                              </div>
                              <div class="form-group">
                                <label>Stock Status</label>
                                <select class="form-control">
                                  <option>In Stock</option>
                                  <option>Out of Stock</option>
                                </select>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-attribute" role="tabpanel" aria-labelledby="vert-tabs-attribute-tab">
                              <div class="card card-primary collapsed-card">
                                <div class="card-header">
                                  <h3 class="card-title">Attribute 1</h3>
                                  <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                    </button>
                                  </div>
                                  <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                  </div>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <div class="card card-primary collapsed-card">
                                <div class="card-header">
                                  <h3 class="card-title">Attribute 2</h3>
                                  <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                    </button>
                                  </div>
                                  <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                  </div>
                                  <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                  </div>
                                </div>
                                <!-- /.card-body -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card -->
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Update</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <dl class="dl-horizontal">
                    <dt><i class="fas fa-map-pin"></i> Status: Draft</dt>
                    <dt><i class="fas fa-eye"></i> Visibility: Public</dt>
                    <dt><i class="far fa-calendar-alt"></i> Published: 29 December, 2019</dt>
                  </dl>
                  <div class="form-group">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Save As Draft</button>
                      <button type="button" class="btn btn-default">Preview</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger">
                      <input name="fetproduct" type="checkbox" class="custom-control-input" id="customSwitch3" value="1">
                      <label class="custom-control-label" for="customSwitch3">Featured</label>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button name="productstatus" type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Categories</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- checkbox -->
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="category_id" type="checkbox" id="catCheckbox" value="{{$products->category_id}}" checked>
                      <label for="catCheckbox" class="custom-control-label">{{$products->category->name}}</label>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Brands</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- checkbox -->
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="brand_id" type="checkbox" id="brandCheckbox" value="{{$products->brand_id}}" checked>
                      <label for="brandCheckbox" class="custom-control-label">{{$products->brand->name}}</label>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Tags</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- checkbox -->
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tag_id" type="checkbox" id="tagCheckbox" value="{{$products->tag_id}}" checked>
                      <label for="tagCheckbox" class="custom-control-label">{{$products->tag->name}}</label>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Image</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- checkbox -->
                  <div class="form-group">
                    <div class="custom-file">
                      <img src="{{asset('backend/img/product/'.$products->feat_image)}}" alt="" width="100px" height="100px">
                    </div>
                    <div class="custom-file">
                      <input name="feat_image" type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Add Product Featured Image</label>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Gallery</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!-- checkbox -->
                  <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Add Product Gallery Images</label>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection