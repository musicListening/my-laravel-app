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
      body {
  font-family: 'Lora', sans-serif;
}

     

/* Image titles (Playfair Display) */
.product-card h5 {
    font-family: 'Playfair Display', serif;
    font-weight: 700; /* Make it bold for better display */
}
         #header {
      background-color: #000;
  }

  .navmenu ul li a {
      font-size: 1.2rem;
      font-weight: 500;
      color: white;
      transition: color 0.3s ease;
  }

  .navmenu ul li a:hover {
      color: #FFD700;
  }

  .navmenu ul li a.active {
      color: #FFD700;
  }

  .product-card {
      border: none;
      padding: 15px;
      text-align: center;
      background-color: transparent;
      transition: transform 0.3s ease;
  }

  .product-card img {
      width: 115%;
      height: 350px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 10px;
      transition: transform 0.3s ease;
  }

  .product-card:hover img {
      transform: scale(1.05);
  }

  .product-card h5 {
      font-weight: bold;
  }

  .stock-status {
      font-weight: bold;
  }

  .left-panel {
      max-width: 250px;
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
      <li><a href="{{ route('pricing') }}" class="active">Pricing</a></li>
      <li><a href="{{ route('Login') }}#pricing">Login</a></li>
      <li><a href="#contact">Register</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>

   
  </div>
</header>

<!-- Main Content -->
<div class="container mt-5 pt-5">
  <div class="row">

    <!-- LEFT PANEL -->
    <div class="col-md-3 left-panel">
      <h4>Delivery Options</h4>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="homeDelivery" checked>
        <label class="form-check-label" for="homeDelivery">🏠 Home Delivery</label>
      </div>
      <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" id="eventSupplies" checked>
        <label class="form-check-label" for="eventSupplies">🎉 Event Supplies</label>
      </div>

      <h5>Filter by Stock Status</h5>
      <div class="form-check">
        <input class="form-check-input stock-filter" type="checkbox" id="filterInStock" value="in-stock" checked>
        <label class="form-check-label" for="filterInStock">In Stock</label>
      </div>
      <div class="form-check">
        <input class="form-check-input stock-filter" type="checkbox" id="filterOutStock" value="out-stock" checked>
        <label class="form-check-label" for="filterOutStock">Out of Stock</label>
      </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="col-md-9">
      <h3 class="mb-4">Available Bottled Water</h3>
      <div class="row g-4" id="product-list">

        @foreach([
          ['img' => '1.5LSparkling Water.webp', 'name' => '1.5L Sparkling Water', 'price' => 150, 'stock' => 'in-stock'],
          ['img' => '1LPurified Water.webp', 'name' => '1L Purified Water', 'price' => 170, 'stock' => 'out-stock'],
          ['img' => '5LMineral Water.webp', 'name' => '5L Mineral Water', 'price' => 160, 'stock' => 'in-stock'],
          ['img' => '10LSpring Water.webp', 'name' => '10L Spring Water', 'price' => 140, 'stock' => 'in-stock'],
          ['img' => '20LBulk Water.webp', 'name' => '20L Bulk Water', 'price' => 180, 'stock' => 'out-stock'],
          ['img' => '500mlSpring Water.webp', 'name' => '500ml Spring Water', 'price' => 155, 'stock' => 'in-stock']
        ] as $product)
        <div class="col-md-6 col-lg-4 product-item" data-stock="{{ $product['stock'] }}">
          <div class="product-card">
            <img src="{{ asset('img/' . $product['img']) }}" alt="{{ $product['name'] }}">
            <h5 class="mt-2">{{ $product['name'] }}</h5>
            <p>Rs. {{ number_format($product['price'], 2) }}</p>
            <span class="stock-status {{ $product['stock'] === 'in-stock' ? 'text-success' : 'text-danger' }}">
              {{ $product['stock'] === 'in-stock' ? 'In Stock' : 'Out of Stock' }}
            </span>
          </div>
        </div>
        @endforeach

      </div>
    </div>

  </div>
</div>
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

<!-- Product Filter Script -->
<script>
  const stockCheckboxes = document.querySelectorAll('.stock-filter');
  const products = document.querySelectorAll('.product-item');

  function filterProducts() {
    const checkedStocks = Array.from(stockCheckboxes)
      .filter(cb => cb.checked)
      .map(cb => cb.value);

    products.forEach(product => {
      const stock = product.getAttribute('data-stock');
      product.style.display = checkedStocks.includes(stock) ? 'block' : 'none';
    });
  }

  stockCheckboxes.forEach(cb => {
    cb.addEventListener('change', filterProducts);
  });

  filterProducts();
</script>

</body>
</html>
