<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shop Gear — Angler Egypt</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/product.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>
<!-- ================= PAGE HEADER ================= -->
<section class="page-header">
  <span class="eyebrow-dark">Smart Gear</span>
  <h1>Shop Senara Rods</h1>
  <p>Every rod comes with a built-in fish-detection sensor and live depth gauge. Pick the build that fits your water.</p>
</section>

<!-- ================= FILTER ROW ================= -->
<div class="filter-row">
  <div class="filter-chips">
    <button class="chip active">All</button>
    <button class="chip">Freshwater</button>
    <button class="chip">Saltwater</button>
    <button class="chip">Travel</button>
  </div>
  <select class="sort-select">
    <option>Sort by: Featured</option>
    <option>Price: Low to High</option>
    <option>Price: High to Low</option>
    <option>Highest Rated</option>
  </select>
</div>

<!-- ================= PRODUCTS GRID ================= -->
<section class="products-grid">

  <a href="../pages/product details.php" class="product-card">
    <div class="card-image">
      <img src="../assets/images/rod and reel combo.jpeg" alt="Senara Classic smart fishing rod">
      <span class="card-badge">Bestseller</span>
    </div>
    <div class="card-body">
      <h3>Senara Classic</h3>
      <span class="card-spec">2.4 m • Freshwater</span>
      <div class="card-rating">★★★★★ <span>4.9</span></div>
      <div class="card-price-row">
        <span class="card-price">EGP 4,250</span>
        <span class="card-price-old">EGP 5,100</span>
      </div>
    </div>
  </a>

  <a href="../pages/product details.php" class="product-card">
    <div class="card-image">
      <img src="../assets/images/Similar to my rod and reel.jpeg" alt="Senara Red Sea smart fishing rod">
      <span class="card-badge new">New</span>
    </div>
    <div class="card-body">
      <h3>Senara Red Sea</h3>
      <span class="card-spec">2.7 m • Saltwater</span>
      <div class="card-rating">★★★★★ <span>4.8</span></div>
      <div class="card-price-row">
        <span class="card-price">EGP 5,600</span>
      </div>
    </div>
  </a>

  <a href="../pages/product details.php" class="product-card">
    <div class="card-image">
      <img src="../assets/images/532409987212782138.jpeg" alt="Senara Nile smart fishing rod">
    </div>
    <div class="card-body">
      <h3>Senara Nile</h3>
      <span class="card-spec">2.1 m • Freshwater</span>
      <div class="card-rating">★★★★☆ <span>4.6</span></div>
      <div class="card-price-row">
        <span class="card-price">EGP 3,800</span>
      </div>
    </div>
  </a>

  <a href="../pages/product details.php" class="product-card">
    <div class="card-image">
      <img src="../assets/images/Amazon_com_ Quantum Invade Baitcasting Reel and….jpeg" alt="Senara Compact travel fishing rod">
      <span class="card-badge">-15%</span>
    </div>
    <div class="card-body">
      <h3>Senara Compact</h3>
      <span class="card-spec">1.8 m (folding) • Travel</span>
      <div class="card-rating">★★★★★ <span>4.7</span></div>
      <div class="card-price-row">
        <span class="card-price">EGP 3,200</span>
        <span class="card-price-old">EGP 3,750</span>
      </div>
    </div>
  </a>

  <a href="../pages/product details.php" class="product-card">
    <div class="card-image">
      <img src="../assets/images/download.jpeg" alt="Senara Pro smart fishing rod">
      <span class="card-badge new">New</span>
    </div>
    <div class="card-body">
      <h3>Senara Pro</h3>
      <span class="card-spec">2.7 m • Saltwater</span>
      <div class="card-rating">★★★★★ <span>5.0</span></div>
      <div class="card-price-row">
        <span class="card-price">EGP 6,900</span>
      </div>
    </div>
  </a>

  <a href="../pages/product details.php" class="product-card">
    <div class="card-image">
      <img src="../assets/images/Telescopic fishing rod light carbon cast rod 1_5M-3M outdoor fishing tool accessories for night.jpeg" alt="Senara Lake smart fishing rod">
    </div>
    <div class="card-body">
      <h3>Senara Lake</h3>
      <span class="card-spec">2.4 m • Freshwater</span>
      <div class="card-rating">★★★★☆ <span>4.5</span></div>
      <div class="card-price-row">
        <span class="card-price">EGP 3,950</span>
      </div>
    </div>
  </a>

</section>


<?php include '../includes/footer.php'; ?>
<script src="../assets/js/product.js"></script>

</body>
</html>
