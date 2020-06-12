<!DOCTYPE html>

<html lang="en">

<head>

  <!-- Required meta tags -->

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Hlddev | @yield('title')</title>

  <!-- plugins:css -->

  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">

  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css')}}">

  <!-- endinject -->

  <!-- plugin css for this page -->

  <!-- End plugin css for this page -->

  <!-- inject:css -->

  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

  <!-- endinject -->

  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
 @yield('css')
<body>

  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

        <a class="navbar-brand brand-logo" href="{{url('admin/index/')}}">
          Hlddev
          <!-- <img src="{{ asset('assets/images/logo.svg')}}" alt="logo" /> -->

        </a>

        <a class="navbar-brand brand-logo-mini" href="{{url('admin/index/')}}">
          Shield
          <!-- <img src="{{ asset('assets/images/logo-mini.svg')}}" alt="logo" /> -->

        </a>

      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">

        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">

          <span class="mdi mdi-menu"></span>

        </button>

        <ul class="navbar-nav d-none d-md-block">

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

              <i class="flag-icon flag-icon-us"></i>

              English

            </a>

            <div class="dropdown-menu navbar-dropdown pb-0" aria-labelledby="LanguageDropdown">

              <a class="dropdown-item preview-item px-3 py-0">

                <div class="preview-thumbnail">

                  <div class="preview-icon">

                    <i class="flag-icon flag-icon-cn"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <p class="font-weight-light mb-0 small-text">

                    Chinese

                  </p>

                </div>

              </a>

              <a class="dropdown-item preview-item px-3 py-0">

                <div class="preview-thumbnail">

                  <div class="preview-icon">

                    <i class="flag-icon flag-icon-es"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <p class="font-weight-light mb-0 small-text">

                    Spanish

                  </p>

                </div>

              </a>

              <a class="dropdown-item preview-item px-3 py-0">

                <div class="preview-thumbnail">

                  <div class="preview-icon">

                    <i class="flag-icon flag-icon-bl"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <p class="font-weight-light mb-0 small-text">

                    French

                  </p>

                </div>

              </a>

              <a class="dropdown-item preview-item px-3 py-0">

                <div class="preview-thumbnail">

                  <div class="preview-icon">

                    <i class="flag-icon flag-icon-ae"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <p class="font-weight-light mb-0 small-text">

                    Arabic

                  </p>

                </div>

              </a>

            </div>

          </li>

        </ul>

        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item search-wrapper d-none d-md-block">

            <form action="#">

              <div class="form-group mb-0">

                <div class="input-group">

                  <div class="input-group-prepend">

                    <span class="input-group-text">

                      <i class="mdi mdi-magnify"></i>

                    </span>

                  </div>

                  <input type="text" class="form-control" placeholder="Search">

                </div>

              </div>

            </form>

          </li>

          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">

            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

              <div class="dropdown-toggle-wrapper">

                <div class="inner">

                  <img class="img-xs rounded-circle" src="https://www.placehold.it/37x37" alt="Profile image">

                </div>

                <div class="inner">

                  <div class="inner">

                    <span class="profile-text font-weight-bold">{{ Auth::user()->name }}</span>

                    <small class="profile-text small">User</small>

                  </div>

                  <div class="inner">

                    <div class="icon-wrapper">

                      <i class="mdi mdi-chevron-down"></i>

                    </div>

                  </div>

                </div>

              </div>

            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

              <a class="dropdown-item p-0">

                <div class="d-flex border-bottom">

                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">

                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>

                  </div>

                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">

                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>

                  </div>

                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">

                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>

                  </div>

                </div>

              </a>

              <a class="dropdown-item mt-2" href="{{url('standard-user/profile/'.Auth::user()->id)}}">
                  My Accounts
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                Sign Out

              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>

          </li>

          <li class="nav-item dropdown">

            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">

              <i class="mdi mdi-bell-outline"></i>

              <span class="count">4</span>

            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">

              <a class="dropdown-item">

                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications

                </p>

                <span class="badge badge-pill badge-warning float-right">View all</span>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <div class="preview-icon bg-success">

                    <i class="mdi mdi-alert-circle-outline mx-0"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>

                  <p class="font-weight-light small-text">

                    Just now

                  </p>

                </div>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <div class="preview-icon bg-warning">

                    <i class="mdi mdi-comment-text-outline mx-0"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>

                  <p class="font-weight-light small-text">

                    Private message

                  </p>

                </div>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <div class="preview-icon bg-info">

                    <i class="mdi mdi-email-outline mx-0"></i>

                  </div>

                </div>

                <div class="preview-item-content">

                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>

                  <p class="font-weight-light small-text">

                    2 days ago

                  </p>

                </div>

              </a>

            </div>

          </li>

          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

              <i class="mdi mdi-email-outline"></i>

            </a>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">

              <div class="dropdown-item">

                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails

                </p>

                <span class="badge badge-info badge-pill float-right">View all</span>

              </div>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <img src="https://www.placehold.it/36x36" alt="image" class="profile-pic">

                </div>

                <div class="preview-item-content flex-grow">

                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey

                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>

                  </h6>

                  <p class="font-weight-light small-text">

                    The meeting is cancelled

                  </p>

                </div>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <img src="https://www.placehold.it/36x36" alt="image" class="profile-pic">

                </div>

                <div class="preview-item-content flex-grow">

                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook

                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>

                  </h6>

                  <p class="font-weight-light small-text">

                    New product launch

                  </p>

                </div>

              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item preview-item">

                <div class="preview-thumbnail">

                  <img src="https://www.placehold.it/36x36" alt="image" class="profile-pic">

                </div>

                <div class="preview-item-content flex-grow">

                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson

                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>

                  </h6>

                  <p class="font-weight-light small-text">

                    Upcoming board meeting

                  </p>

                </div>

              </a>

            </div>

          </li>

          <li class="nav-item dropdown color-setting d-none d-md-block">

            <a class="nav-link count-indicator" href="#">

              <i class="mdi mdi-invert-colors"></i>

            </a>

          </li>

        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">

          <span class="mdi mdi-menu"></span>

        </button>

      </div>

    </nav>

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->

      <div class="theme-setting-wrapper">

        <div id="theme-settings" class="settings-panel">

          <i class="settings-close mdi mdi-close"></i>

          <div class="d-flex align-items-center justify-content-between border-bottom">

            <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>

          </div>

          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>

          <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>

          <p class="settings-heading font-weight-bold mt-2">Header Skins</p>

          <div class="color-tiles mx-0 px-4">

            <div class="tiles primary"></div>

            <div class="tiles success"></div>

            <div class="tiles warning"></div>

            <div class="tiles danger"></div>

            <div class="tiles pink"></div>

            <div class="tiles info"></div>

            <div class="tiles dark"></div>

            <div class="tiles default"></div>

          </div>

        </div>

      </div>

      <!-- partial -->

      <!-- partial:partials/_sidebar.html -->

      <nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">

        <ul class="nav">

          <li class="nav-item nav-profile">

            <img src="https://www.placehold.it/100x100" alt="profile image">

            <p class="text-center font-weight-medium">{{ Auth::user()->name }}</p>

          </li>


         

         
        </ul>
      </nav>

      <!-- partial -->

<div class="main-panel">
     @yield('content')
<!-- partial:../../partials/_footer.html -->
       <!--  <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://urbanui.com" target="_blank">UrbanUI</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart-outline text-danger"></i>
            </span>
          </div>
        </footer> -->
        <!-- partial -->
      </div>
    </div>

    <!-- page-body-wrapper ends -->

  </div>

  <!-- container-scroller -->



  <!-- plugins:js -->

  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>

  <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>

  <!-- endinject -->

  <!-- Plugin js for this page-->

  <!-- End plugin js for this page-->

  <!-- inject:js -->

  <script src="{{ asset('assets/js/off-canvas.js')}}"></script>

  <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>

  <script src="{{ asset('assets/js/misc.js')}}"></script>

  <script src="{{ asset('assets/js/settings.js')}}"></script>

  <script src="{{ asset('assets/js/todolist.js')}}"></script>

  <!-- endinject -->

  <!-- Custom js for this page-->

  <script src="{{ asset('assets/js/dashboard.js')}}"></script>

  <!-- End custom js for this page-->
 @yield('script')
</body>



</html>