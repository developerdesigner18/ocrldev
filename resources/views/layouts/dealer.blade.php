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
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('public/css/animate.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.png')}}" />
  <script src="{{ asset('public/js/sweetalert2@9.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('public/css/dealer.css')}}">
  <style>
    .nav-item.dropdown .icon-briefcase {
      font-size: 14px !important;
    }

    nav.navbar {
      z-index: 1;
    }

/*     .dropdown-menu.dropdown-menu-right.navbar-dropdown {
  right: -50px !important;
  } */

  .swal2-icon {
    font-size: 20px !important;
  }

  body {
    padding-right: 0px !important;
  }

  .error {
    font-size: 12px !important;
    color: red;
  }
</style>

@yield('css')
</head>

<body class="horizontal-menu">
  <div class="container-scroller">
    <!-- Horizontal Menu Start -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="container d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top">
          <a class="navbar-brand brand-logo" href="{{url('dealer-admin/index/')}}">
            Shield Leasing
            <!-- <img src="{{ asset('public/assets/images/logo.svg')}}" alt="logo" /> -->

          </a>
          <a class="navbar-brand brand-logo-mini" href="{{url('dealer-admin//')}}">
            Shield
            <!-- <img src="{{ asset('public/assets/images/logo-mini.svg')}}" alt="logo" /> -->

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
        <small class="profile-text small">Dealer</small>
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
  </a> <a class="dropdown-item mt-2">
    Manage Accounts
  </a>
  <a class="dropdown-item">
    Change Password
  </a>
  <a class="dropdown-item">
    Check Inbox
  </a>
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
<ul class="nav page-navigation">
  <li class="nav-item dropdown">
    <a class="nav-link count-indicator dropdown-toggle" id="invoices-dropdown" href="#"
    data-toggle="dropdown">
    <i class="menu-icon icon-briefcase"></i>
    <span class="menu-title">Menus</span>
    </a>
    <div class="dropdown-menu dropdown-left navbar-dropdown" aria-labelledby="invoices-dropdown"
    id="invoices">
      <ul>
        <li class="dropdown-item">
          <a class="nav-link"  href="{{url('dealer-admin/applications')}}">Applications</a>
        </li>
        <li class="dropdown-item">
          <a class="nav-link" href="{{url('dealer-admin/customers')}}">Customers</a>
        </li>

        <li class="dropdown-item">
          <a class="nav-link" href="{{url('dealer-admin/contracts/contract-list')}}"> Contracts</a>
        </li>
        <li class="dropdown-item">
          <a class="nav-link" href="{{url('dealer-admin/invoices/create-invoice')}}">Invoices - Create Invoice </a>
        </li>
        <li class="dropdown-item">
          <a class="nav-link" href="{{url('dealer-admin/invoices/list-invoice')}}">Invoices - List Invoice </a>
        </li>
        <li class="dropdown-item">
          <a class="nav-link" href="{{route('dealer.lease.index')}}">List Lease</a>
        </li>
       <!--  <li class="dropdown-item">
          <a class="nav-link" href="{{url('dealer-admin/applications/bills')}}">Bills - List Bills</a>
        </li> -->
      </ul>
    </div>
  </li>
<li class="nav-item dropdown">
  <a class="nav-link" id="activity-log" href="{{url('dealer-admin/activitylog')}}">
    <i class="menu-icon icon-briefcase"></i>
    <span class="menu-title">Activity Dashboard</span>
  </a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link" id="activity-log" href="{{url('dealer-admin/applications/create')}}">
    <i class="menu-icon icon-briefcase"></i>
    <span class="menu-title">New Application</span>
  </a>
</li>
<!-- <li class="nav-item dropdown">
              <a class="nav-link" id="activity-log" href="{{url('dealer-admin/applications/dealerAccountSetting')}}">
                <i class="menu-icon icon-briefcase"></i>
                <span class="menu-title">Account Setting</span>
              </a>
            </li> -->
<!-- <li class="nav-item dropdown">
  <a class="nav-link" id="activity-log" href="{{url('dealer-admin/tools')}}">
    <i class="menu-icon icon-briefcase"></i>
    <span class="menu-title">Tools</span>
  </a>
</li> -->
</ul>
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
  <div class="container main-panel">@yield('content')</div>
</div>
<!-- page-body-wrapper ends -->
</div>

<!-- Modal -->
<div class="modal fade" id="invoiceEdit" tabindex="-1" role="dialog" aria-labelledby="invoiceEdit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="inoviceModalTitle">Edit Invoice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="invoiceEditForm" id="invoiceEditForm" action="{{url('dealer-admin/invoices/addnew')}}"
      method="post">
      <div class="modal-body">
        @csrf
        <input type="hidden" name="invoice_id" id="invoice_id">
        <div class="form-group">
          <label for="role">Applications</label>
          <div class="form-group">
            <input type="text" class="form-control" id="invoice_display" disabled>
            <input type="hidden" class="form-control" id="application_id" name="application_id">
          </div>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Work Order Description</label>
          <textarea name="notes" id="notes" placeholder="Work Order Description" class="form-control" rows="2"></textarea>
        </div>
        <div class="form-group">
          <label for="name">Work Order #</label>
          <input type="text" name="order_number" class="form-control" id="order_number" placeholder="Work Order Number" readonly="">
        </div>
        <div class="form-group">
          <label for="name">Work Order Total</label>
          <input type="number" name="amount" class="form-control" id="amount" placeholder="Lease Amount">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Date</label>
          <div id="inline-datepicker" class="input-group date datepicker">
            <input name="date" id="date" type="text" class="form-control">
            <span class="input-group-addon input-group-append border-left">
              <span class="mdi mdi-calendar input-group-text"></span>
            </span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success mr-2">Update Agreement</button>
        <a class="btn btn-danger modal-cancel">Cancel</a>
      </div>
    </form>
  </div>
</div>
</div>
<!-- Modal ends-->

<!-- container-scroller -->
<!-- plugins:js -->

<script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{ asset('public/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/formpickers.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('public/assets/js/off-canvas.js')}}"></script>
<script src="{{ asset('public/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{ asset('public/assets/js/misc.js')}}"></script>
<script src="{{ asset('public/assets/js/settings.js')}}"></script>
<script src="{{ asset('public/assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('public/assets/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->

<script src="{{ asset('public/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/js/jquery.maskedinput.js')}}"></script>
<script src="{{ asset('public/js/bootstrap-notify.js')}}"></script>
<!-- @yield('script') -->
@yield('js')
<script>
  
  $(".invoice-edit").click(function() {
    Swal.fire({
      title: 'Are you sure?',
      text: "If you edit the invoice the existing agreement signing will be cancelled and a new agreement will be sent to the client for signing, if the agreement is already signed it will be retained and instead a new agreement will be sent for signing.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, edit it!'
    }).then((result) => {
      if (result.value) 
      {
        var invoice = $(this).data("id");
        var name = $(this).data("name");
        $.ajax({
          url: '{{url("dealer-admin/invoices/get-invoice")}}/'+invoice,
          type:'GET',
          processData: false,
          contentType: false,
          datatype: "json",
          success: function(data) {
            $("#invoiceEditForm #invoice_id").val(invoice);
            $("#invoiceEditForm #invoice_display").val("#"+data['application_id']+" "+name);
            $("#invoiceEditForm #application_id").val(data['application_id']);
            $("#invoiceEditForm #amount").val(data['amount']);
            $("#invoiceEditForm #notes").html(data['notes']);
            $("#invoiceEditForm #date").val(data['date']);
            $("#invoiceEditForm #order_number").val(data['order_number']);
            $("#invoiceEdit").modal('show');
          }
        })
      }
    })
  });

  $(".modal-cancel").click(function() {
    $("#invoiceEdit").modal('hide');
  })

  if ($("#invoiceEditForm").length > 0) {
    $("#invoiceEditForm").validate({
      rules: {
        amount:{
          required: true,
          number: true
        },
        notes: {
          required: true,
        },
        date: {
          required: true,
          date: true
        }
      },
      messages: {
        amount:{
          required: "Please enter amount",
          number: "Amount can only entered in numbers"
        },
        notes: {
          required: "Please enter note",
        },
        date: {
          required: "Please select date",
          date: "Please enter valid date"
        }
      },
      submitHandler: function(form, e) {
        e.preventDefault();
        var formData = new FormData($("#invoiceEditForm")[0]);
        $.ajax({
         url: '{{url("dealer-admin/invoices/update-invoice")}}',
         type:'POST',
         data: formData,
         processData: false,
         contentType: false,
         datatype: "json",
         success: function(data) {
          console.log(data);
          location.reload();
        },
        error: function (data) {
          console.log(data);
        }
      });
      }
    });
  }
</script>
</body>

</html>