<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>MI NU SABILUN NAJAH 26 - Sistem Monitoring</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/templatemo-seo-dream.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.css')}}">
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

<script src="https://use.fontawesome.com/f2fc9ac3b2.js"></script>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
           <!--  <a href="" class="logo"> -->
             <!--  <h5>Area Wali Murid <img src="{{url('assets/images/logo-icon.png')}}" alt=""></h5> -->
           <!--  </a> -->
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{url('homewali')}}" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="{{url('homewali')}}#features">Layanan</a></li>
              <li class="scroll-to-section"><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="cursor: pointer;">Halo, 
                {{Auth::user()->name}}  
                , Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf </form>
              </li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  @yield('content')

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Sistem Monitoring © {{date('Y')}} MI NU SABILUN NAJAH 26. All Rights Reserved. 
          
          <br>Web Deployed by <a rel="nofollow" href="#" title="free CSS templates">Berjibaku Team</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js "></script>
  <script src="{{url('assets/js/owl-carousel.js')}}"></script>
  <script src="{{url('assets/js/animation.js')}}"></script>
  <script src="{{url('assets/js/imagesloaded.js')}}"></script>
  <script src="{{url('assets/js/custom.js')}}"></script>

</body>
</html>