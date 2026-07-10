<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<link rel="stylesheet" href="/senarty/assets/css/nav.css">

<nav class="navbar">
  <div class="navbar-container">

    <a href="/senarty/pages/home.php" class="navbar-logo">Angler Egypt</a>

    <ul class="navbar-links" id="navbarLinks">
      <li><a href="/senarty/pages/spot.php" class="nav-link">Spots</a></li>
      <li><a href="/senarty/pages/fish.php" class="nav-link">Fish</a></li>
      <li><a href="/senarty/pages/product.php" class="nav-link">Shop</a></li>
      <li><a href="/senarty/pages/cart.php" class="nav-link">Cart</a></li>
      <li><a href="/senarty/pages/profile.php" class="nav-link">Profile</a></li>
      <?php if (!isset($_SESSION["UserID"])): ?>
      <li><a href="/senarty/login.php" class="nav-link">Login</a></li>
      <li><a href="/senarty/register.php" class="nav-link">Register</a></li>
      <?php endif; ?>
    </ul>

    <div class="navbar-icons">
      <button class="hamburger-btn" id="hamburgerBtn" aria-label="Menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

  </div>

  <ul class="mobile-menu" id="mobileMenu">
    <li><a href="/senarty/pages/spot.php" class="nav-link">Spots</a></li>
    <li><a href="/senarty/pages/fish.php" class="nav-link">Fish</a></li>
    <li><a href="/senarty/pages/product.php" class="nav-link">Shop</a></li>
    <li><a href="/senarty/pages/cart.php" class="nav-link">Cart</a></li>
    <li><a href="/senarty/pages/profile.php" class="nav-link">Profile</a></li>
    <?php if (!isset($_SESSION["UserID"])): ?>
    <li><a href="/senarty/login.php" class="nav-link">Login</a></li>
    <li><a href="/senarty/register.php" class="nav-link">Register</a></li>
    <?php endif; ?>
  </ul>
</nav>

<script src="/senarty/assets/js/nav.js"></script>
