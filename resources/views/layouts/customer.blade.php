<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HLD | @yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet"
    href="{{ asset('assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css')}}">
  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />
  <!-- <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script> -->
  <script src="{{ asset('js/sweetalert2@9.js')}}"></script>
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
<style type="text/css">
  .payment-table .payment-thead
  {
    background: #F9FBFD;
  }
  .payment-table 
  {
    width:450px;
  }
  .payment-table thead
  {
    border-top: none;
    border-bottom: 1px solid black;
  }
  .pay-modal .modal-dialog .modal-content .modal-body {
    padding: 10px 26px;
  }
  .pay-modal .modal-dialog .modal-content .modal-header {
    padding: 10px 26px;
  }
  .payment-table tr td
  {
    vertical-align: top;
  }
  .payment-submit-btn{
    border-radius: none!important;
  }
  .loader
  {
      position: fixed;
      left: 47%;
      top: 47%;
      display: none;
      z-index: 1000;
      height: 31px;
      width: 31px;
  }
</style>
<body class="horizontal-menu">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="container d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="{{url('customer/index/')}}">
            HLD
            <!-- <img src="{{ asset('assets/images/logo.svg')}}" alt="logo" /> -->

          </a>
          <a class="navbar-brand brand-logo-mini" href="#">
            HLD
            <!-- <img src="{{ asset('assets/images/logo-mini.svg')}}" alt="logo" /> -->

          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"> <span
              class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item search-wrapper d-none d-md-block">
              <form action="#">
                <div class="form-group mb-0">
                  <div class="input-group search-field">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </form>
            </li>
          </ul>
          <ul class="navbar-nav header-links ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown"
                aria-expanded="false"> <i class="flag-icon flag-icon-us"></i>
                English</a>
              <div class="dropdown-menu navbar-dropdown pb-0" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item preview-item px-3 py-0">
                  <div class="preview-thumbnail">
                    <div class="preview-icon"> <i class="flag-icon flag-icon-cn"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="font-weight-light mb-0 small-text">Chinese</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item px-3 py-0">
                  <div class="preview-thumbnail">
                    <div class="preview-icon"> <i class="flag-icon flag-icon-es"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="font-weight-light mb-0 small-text">Spanish</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item px-3 py-0">
                  <div class="preview-thumbnail">
                    <div class="preview-icon"> <i class="flag-icon flag-icon-bl"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="font-weight-light mb-0 small-text">French</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item px-3 py-0">
                  <div class="preview-thumbnail">
                    <div class="preview-icon"> <i class="flag-icon flag-icon-ae"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="font-weight-light mb-0 small-text">Arabic</p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas"> <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="nav-bottom">
          <ul class="nav ml-auto dropdown-menus">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown"
                aria-expanded="false">
                <i class="mdi mdi-message-text-outline"></i>
                <span class="count bg-warning">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list"
                aria-labelledby="messageDropdown">
                <div class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails
                  </p>
                  <span class="badge badge-inverse-info badge-pill float-right">View all</span>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="https://www.placehold.it/37x37" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">David Grey
                      <span class="float-right font-weight-light small-text text-gray">1 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="https://www.placehold.it/37x37" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">Tim Cook
                      <span class="float-right font-weight-light small-text text-gray">15 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="https://www.placehold.it/37x37" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1"> Johnson
                      <span class="float-right font-weight-light small-text text-gray">18 Minutes ago</span>
                    </h6>
                    <p class="font-weight-light small-text mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count bg-success">4</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                  </p>
                  <span class="badge badge-pill badge-inverse-info float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-success">
                      <i class="mdi mdi-alert-circle-outline mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0">
                      Just now
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-warning">
                      <i class="mdi mdi-comment-text-outline mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0">
                      Private message
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-info">
                      <i class="mdi mdi-email-outline mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown" id="user-li">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                aria-expanded="false">
                <div class="dropdown-toggle-wrapper">
                  <div class="inner">
                    <div class="inner"> <span class="profile-text font-weight-bold">{{ Auth::user()->name }}</span>
                      <small class="profile-text small">User</small>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a class="dropdown-item p-0">
                  <div class="d-flex border-bottom">
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center"> <i
                        class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right"> <i
                        class="mdi mdi-account-outline mr-0 text-gray"></i>
                    </div>
                    <div class="py-3 px-4 d-flex align-items-center justify-content-center"> <i
                        class="mdi mdi-alarm-check mr-0 text-gray"></i>
                    </div>
                  </div>
                </a> 
                <a class="dropdown-item mt-2" href="{{url('standard-user/profile/'.Auth::user()->id)}}">
                  My Accounts
                </a>
               <!--  <a class="dropdown-item">
                  Change Password
                </a>
                <a class="dropdown-item">
                  Check Inbox
                </a> -->
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">

                  Sign Out

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
              </div>
            </li>
            <li class="nav-item">
              <img class="img-xs rounded-circle" src="https://www.placehold.it/37x37" alt="profile image">
            </li>
          </ul>
          <!-- <ul class="nav page-navigation">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" href="#"
                data-toggle="dropdown">
                <i class="menu-icon icon-briefcase"></i>
                <span class="menu-title">Old Menus</span>
              </a>
              <div class="dropdown-menu dropdown-left navbar-dropdown">
                <ul>
                  <li class="dropdown-item">
                    <a class="nav-link" href="{{url('customer/applications/newapplication/')}}">Application - New  Application </a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="{{url('customer/applications/index/')}}">Application - List Application </a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="{{url('customer/applications/lease/')}}">Leases - My Leases
                    </a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="{{url('customer/applications/contracts')}}">Contract - Review & Sign Contract</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="{{url('customer/applications/bills')}}">Bills - List Bills</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="activity-log" href="{{url('customer/applications/currentLease')}}">
                <i class="menu-icon icon-briefcase"></i>
                <span class="menu-title">Current Leases</span>
              </a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link" id="activity-log" href="{{url('customer/applications/customerAccountSetting')}}">
                <i class="menu-icon icon-briefcase"></i>
                <span class="menu-title">Account Setting</span>
              </a>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="theme-settings" class="settings-panel"> <i class="settings-close mdi mdi-close"></i>
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins
            </p>
          </div>
          <div class="sidebar-bg-options" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
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
      <div class="container main-panel">
      @yield('content')

      </div>
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <!-- Plugin JavaScript -->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('assets/js/misc.js')}}"></script>
  <script src="{{ asset('assets/js/settings.js')}}"></script>
  <script src="{{ asset('assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  <!-- Custom JavaScript for this theme -->
  <script src="{{asset('js/scrolling-nav.js')}}"></script>
  <script src="{{asset('js/jquery.maskedinput.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  @yield('js')
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
</body>

</html>