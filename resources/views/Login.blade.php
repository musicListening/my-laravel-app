<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pricing - AquaLogix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Font Awesome & Icons -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300..800&family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- Animations & Carousel -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
.header {
    background-color: black !important;
}

.navmenu ul li a {
    font-size: 1.2rem;
    font-family: 'Open Sans', 'Playfair Display', Arial, sans-serif;
    font-weight: 500;
    color: white !important;
    transition: color 0.3s;
}
.navmenu ul li a.active-section,
.navmenu ul li a.active {
    color: gold !important;
}
    </style>
</head>
<body>

<!-- Navigation -->
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
      <h1 class="sitename">AquaLogix</h1>
    </a>

    <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/#about') }}">About</a></li>
      <li><a href="{{ url('/#services') }}">Services</a></li>
      <li><a href="{{ route('pricing') }}">Pricing</a></li>
      <li><a href="{{ route('Login') }}" class="active">Login</a></li>
      <li><a href="#contact">Register</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>

   
  </div>
</header>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
<div class="mb-4">
  <label class="form-label" for="form3Example3">Email address</label>
  <input type="email" id="form3Example3" class="form-control form-control-lg"
    placeholder="Enter a valid email address" />
</div>

<!-- Password input -->
<div class="mb-3">
  <label class="form-label" for="form3Example4">Password</label>
  <input type="password" id="form3Example4" class="form-control form-control-lg"
    placeholder="Enter password" />
</div>


          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<footer class="bg-dark text-light pt-5 pb-3 mt-5" style="font-family: 'Open Sans', 'Playfair Display', Arial, sans-serif;">
  <div class="container">
    <div class="row">
      <!-- Logo & About -->
      <div class="col-md-4 mb-4">
        <h3 class="mb-2" style="font-family: 'Playfair Display', serif; color: #00aaff;">AquaLogix</h3>
        <p style="font-size: 1rem;">
          The number one drinking water in Sri Lanka. Pure, natural, and bottled at the source for your health and refreshment.
        </p>
      </div>
      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5 class="mb-3 text-uppercase" style="letter-spacing:1px;">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
          <li><a href="{{ url('/#about') }}" class="text-light text-decoration-none">About</a></li>
          <li><a href="{{ url('/#services') }}" class="text-light text-decoration-none">Services</a></li>
          <li><a href="{{ route('pricing') }}" class="text-light text-decoration-none">Pricing</a></li>
          <li><a href="{{ route('Login') }}" class="text-light text-decoration-none">Login</a></li>
          <li><a href="#contact" class="text-light text-decoration-none">Register</a></li>
        </ul>
      </div>
      <!-- Contact & Social -->
      <div class="col-md-4 mb-4">
        <h5 class="mb-3 text-uppercase" style="letter-spacing:1px;">Contact Us</h5>
        <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>Padukka, Sri Lanka</p>
        <p class="mb-1"><i class="fas fa-envelope me-2"></i>info@aqualogix.lk</p>
        <p class="mb-3"><i class="fas fa-phone me-2"></i>+94 77 123 4567</p>
        <div>
          <a href="#" class="text-light me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
          <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="#" class="text-light me-3"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="#" class="text-light"><i class="fab fa-linkedin-in fa-lg"></i></a>
        </div>
      </div>
    </div>
    <hr class="border-secondary">
    <div class="row">
      <div class="col text-center">
        <small>&copy; {{ date('Y') }} AquaLogix. All rights reserved.</small>
      </div>
    </div>
  </div>
</footer>