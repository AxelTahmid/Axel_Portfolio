<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Area</title>
  <link rel="shortcut icon" href="images/fav.ico">

  {{-- <link rel="stylesheet" href="../../vendors/feather/feather.css"> --}}
  {{-- <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css"> --}}
  <link rel="stylesheet" type='text/css' href="{{ asset('admin/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" type='text/css' href="{{ asset('admin/css/main.css') }}">
</head>

<body>

    @yield('content')


  <script type="text/javascript" src="{{  asset('admin/js/vendor/bundle.base.js') }}"></script>

  <script type="text/javascript" src="{{ asset('admin/js/partials/off-canvas.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/partials/hoverable-collapse.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/partials/template.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/partials/settings.js')}}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/partials/todolist.js')}}"></script>
</body>

</html>