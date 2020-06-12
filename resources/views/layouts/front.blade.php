<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shield Leasing | @yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('public/css/scrolling-nav.css')}}" rel="stylesheet">
  <link href="{{asset('public/css/jquery-ui.css')}}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.png')}}" />
  <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
  <!-- <script src="{{asset('public/assets/js/form-validation.js')}}" ></script> -->
  <script src="{{asset('public/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('public/assets/vendors/js/vendor.bundle.addons.js')}}"></script>

  <!-- me -->
  <script src="{{ asset('public/assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('public/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('public/assets/js/misc.js')}}"></script>
  <script src="{{ asset('public/assets/js/settings.js')}}"></script>
  <script src="{{ asset('public/assets/js/todolist.js')}}"></script>
  <style type="text/css">
  	h3 {
  	/*	border-bottom: 1px solid;*/
  		margin: 10px 0px;
  	}
  	label {
  		font-weight: 600;
  		color: #000;
  	}
  	label span {
  		color: #7b7b7b;
  	}
  </style>

<!-- @stack('header') -->
@yield('header')
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}">Shield Leasing</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">

        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @if(!Auth::check())
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{url('customer-guest-application')}}">Apply </a>
          </li>
          @endif
           @if(!Auth::check())
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{url('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{url('register')}}">Register</a>
          </li>
          @endif
         <!--  <li class="nav-item">
            @if(Auth::check())
            <a class="nav-link js-scroll-trigger" href="{{url('customer-registration-application')}}">Apply</a>

            @else
            <a class="nav-link js-scroll-trigger" href="{{url('customer-registration-application')}}">Apply</a>

            @endif
          </li>
           -->
           @if(Auth::check())
           <li class="nav-item">
           <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                Sign Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            	@csrf
            </form>
           </li>
           @endif

        </ul>
      </div>
    </div>
  </nav>
   
    @yield('content')

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="{{asset('public/js/scrolling-nav.js')}}"></script>
  <script src="{{asset('public/js/jquery.maskedinput.js')}}"></script>
  <script src="{{asset('public/js/jquery-ui.js')}}"></script>
<!-- <script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } );
  </script> -->
  <!-- @stack('footer') -->
  @yield('js')
</body>
</html>