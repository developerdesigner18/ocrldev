<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MyShield | @yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('public/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet"
    href="{{ asset('public/assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('public/css/custom.css')}}">
  <link href="{{asset('public/css/scrolling-nav.css')}}" rel="stylesheet">
  <link href="{{asset('public/css/jquery-ui.css')}}" rel="stylesheet">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.png')}}" />
  <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('public/js/sweetalert2@9.js')}}"></script>
  <style>
    .nav-item.dropdown .icon-briefcase {
      font-size: 14px !important;
    }

    nav.navbar {
      z-index: 1;
    }

    .dropdown-menu.dropdown-menu-right.navbar-dropdown {
      right: -50px !important;
    }
  </style>
</head>