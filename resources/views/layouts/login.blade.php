<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>OCR | @yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('public/assets/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/assets/images/favicon.png')}}" />
  <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
  @yield('css')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        @yield('content')
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset('public/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('public/assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('public/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('public/assets/js/misc.js')}}"></script>
  <script src="{{ asset('public/assets/js/settings.js')}}"></script>
  <script src="{{ asset('public/assets/js/todolist.js')}}"></script>
   <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="{{asset('public/js/scrolling-nav.js')}}"></script>
  <script src="{{asset('public/js/jquery.maskedinput.js')}}"></script>
  <script src="{{asset('public/js/jquery-ui.js')}}"></script>
  <!-- endinject -->
  @yield('js')
</body>

</html>