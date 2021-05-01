<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eStartup Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="asset/vendor/modal-video/css/modal-video.min.css" rel="stylesheet">
  <!-- <link href="asset/vendor/owl.carousel/asset/owl.carousel.min.css" rel="stylesheet"> -->
  <link href="asset/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <!-- <div class="container"> -->

      <div id="logo" class="pull-left">
        <h1><a href="index.html"><span>e</span>Startup</a></h1>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <!-- <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="#about-us">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#blog">Blog</a></li> -->
          @if (Route::has('login'))
            @auth
            <li><a href="{{ url('/home') }}">Home</a></li>
            @else
            <li><a href="{{ route('login') }}">Login</a></li>
            @endauth
          @endif

        </ul>
      </nav><!-- #nav-menu-container -->
    <!-- </div> -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="padding-top:60px; padding-left:0px;">
    @yield('content')
  </section><!-- End Hero Section -->

  

  

  <!-- Vendor JS Files -->
  <script src="asset/vendor/jquery/jquery.min.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>
  <script src="asset/vendor/modal-video/js/modal-video.min.js"></script>
  <script src="asset/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="asset/vendor/superfish/superfish.min.js"></script>
  <script src="asset/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="asset/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

  @yield('footer')

</body>

</html>