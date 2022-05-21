<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Area</title>
  <!-- plugins:css -->

  {{-- <link rel="stylesheet" href="../../vendors/feather/feather.css"> --}}
  {{-- <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css"> --}}
  {{-- <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css"> --}}

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" type='text/css' href="{{ asset('admin/css/main.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/fav.ico">
</head>

<body>

    @yield('content')

  <!-- plugins:js -->
  <script type="text/javascript" src="{{  asset('admin/js/vendor/jquery.min.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script type="text/javascript" src="{{ asset('admin/js/partials/off-canvas.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/partials/hoverable-collapse.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/partials/template.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/partials/settings.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/partials/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>