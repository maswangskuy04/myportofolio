<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Virtual Folio - Portfolio HTML5 Template</title>

  <link rel="shortcut icon" href="{{ asset('porto/assets/favicon.ico') }}" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/css/themify-icons.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/css/bootstrap.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/vendor/animate/animate.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/vendor/owl-carousel/owl.carousel.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/vendor/nice-select/css/nice-select.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/vendor/fancybox/css/jquery.fancybox.min.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/css/virtual.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ asset('porto/assets/css/topbar.virtual.css') }}">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Help -->
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
    </div>
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url({{ asset('porto/assets/img/bg_image_1.jpg') }})">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">My Portfolio</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('about') }}" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('experiences') }}" class="nav-link">Experience</a>
            </li>
            <li class="nav-item">
              <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome</h5>
      <h1 class="fw-light mb-4">I'm <b class="fg-theme">Stephen</b> Doe</h1>
      <div class="badge">UI/UX & Web Designer</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
  @yield('content')
  
  <!-- Contact -->
  <div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Contact</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
      <div class="row py-5">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
          <div class="vg-maps">
            <div id="google-maps" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
        <div class="col-lg-5">
          <form class="vg-contact-form">
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Name" placeholder="Your Name">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Email" placeholder="Email Address">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Subject" placeholder="Subject">
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="Message" rows="6" placeholder="Enter message here.."></textarea>
              </div>
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->
  
  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Virtual Folio</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">1600 Amphitheatre Parkway Mountain View, California 94043 US</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Follow me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Contact me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li>info@virtual.com</li>
              <li>+8890234</li>
              <li>+813023</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-12 mb-3">
          <h3 class="fw-normal text-center">Subscribe</h3>
        </div>
        <div class="col-lg-6">
          <form class="mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email address">
              <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
            </div>
          </form>
        </div>
        <div class="col-12">
          <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made with <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode ID</a></p>
        </div>
      </div>
    </div>
  </div> <!-- End footer -->
  
  
  <script src="{{ asset('porto/assets/js/jquery-3.5.1.min.js') }}"></script>
    
  <script src="{{ asset('porto/assets/js/bootstrap.bundle.min.js') }}"></script>
    
  <script src="{{ asset('porto/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    
  <script src="{{ asset('porto/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    
  <script src="{{ asset('porto/assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    
  <script src="{{ asset('porto/assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    
  <script src="{{ asset('porto/assets/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>

  <script src="{{ asset('porto/assets/vendor/wow/wow.min.js') }}"></script>

  <script src="{{ asset('porto/assets/vendor/animateNumber/jquery.animateNumber.min.js') }}"></script>

  <script src="{{ asset('porto/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>

  <script src="{{ asset('porto/assets/js/google-maps.js') }}"></script>
    
  <script src="{{ asset('porto/assets/js/topbar-virtual.js') }}"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>