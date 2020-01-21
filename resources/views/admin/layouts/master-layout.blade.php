<!DOCTYPE html>
<html>
<head>
  @include('admin.includes.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('admin.includes.navbar')
  @include('admin.includes.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('body')
  <!-- /.content-wrapper -->
  @include('admin.includes.footer')
</div>
<!-- ./wrapper -->

@include('admin.includes.js')
</body>
</html>