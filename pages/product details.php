<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Senara Smart Rod — Angler Egypt</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/product_details.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<!-- ================= BREADCRUMB ================= -->
<div class="breadcrumb">
  <a href="../pages/home.php">Home</a> / <a href="product.php">Gear</a> / <span>Senara Smart Rod</span>
</div>

<!-- ================= PRODUCT MAIN ================= -->
<section class="product-main">

  <!-- ---- GALLERY ---- -->
  <div class="gallery">
    <div class="gallery-main">
      <img id="mainImage" src="../assets/images/rod and reel combo.jpeg" alt="Senara smart fishing rod on a boat">
    </div>
    <div class="gallery-thumbs">
      <img class="thumb active" src="../assets/images/rod and reel combo.jpeg" alt="Senara rod thumbnail 1">
      <img class="thumb" src="../assets/images/Similar to my rod and reel.jpeg" alt="Senara rod thumbnail 2">
      <img class="thumb" src="../assets/images/WXM 500 2_20 m M 7-21 g lure fishing rod and reel combo.jpeg" alt="Senara rod thumbnail 3">
      <img class="thumb" src="../assets/images/fishing rods with reel - Google Search.jpeg" alt="Senara rod thumbnail 4">
    </div>
  </div>

  <!-- ---- INFO ---- -->
  <div class="product-info">
    <span class="stock-badge">In Stock</span>
    <h1>Senara Red Sea</h1>

    <div class="rating-row">
      <span class="stars">★★★★★</span>
      <span class="rating-count">4.9 (312 reviews)</span>
    </div>

    <p class="product-desc">
The first smart fishing rod built exclusively for the Red Sea. Featuring a live fish-activity sensor and a real-time depth gauge built into the handle — so you always know if fish are near, and exactly how deep you're casting.    </p>

    <div class="price-row">
  <span class="price" id="unitPrice" data-base="5600">5,600</span>
  <span class="price-old" id="oldPrice" data-base="6552">6,552</span>
  <span class="price-badge">-17%</span>
</div>

    <ul class="feature-checklist">
      <li><span class="check">✓</span> Live fish-detection sensor in the tip</li>
      <li><span class="check">✓</span> Real-time depth gauge on the handle display</li>
      <li><span class="check">✓</span> Syncs with the Angler Egypt app over Bluetooth</li>
      <li><span class="check">✓</span> Carbon-fiber build, saltwater resistant</li>
    </ul>

    <div class="option-group">
      <span class="option-label">Length</span>
      <div class="option-pills">
        <button class="pill">2.1 m</button>
        <button class="pill active">2.4 m</button>
        <button class="pill">2.7 m</button>
      </div>
    </div>

    <div class="option-group">
      <span class="option-label">Color</span>
      <div class="option-swatches">
        <button class="swatch" style="background:#212529;" aria-label="Neutral black"></button>
        <button class="swatch active" style="background:#0077B6;" aria-label="Primary blue"></button>
        <button class="swatch" style="background:#48CAE4;" aria-label="Tertiary cyan"></button>
      </div>
    </div>

    <div class="purchase-row">
      <div class="qty-selector">
        <button class="qty-btn" id="qtyMinus">−</button>
        <span class="qty-value" id="qtyValue">1</span>
        <button class="qty-btn" id="qtyPlus">+</button>
      </div>
      <button class="btn-add-cart">Add to Cart</button>
      <button class="btn-buy-now">Buy Now</button>
    </div>

    <div class="trust-row">
      <div class="trust-item">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 12l7 7L21 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        2-year warranty
      </div>
      <div class="trust-item">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 12l7 7L21 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Free delivery in Cairo &amp; Alexandria
      </div>
    </div>
  </div>
</section>

<!-- ================= SMART FEATURES SHOWCASE ================= -->
<section class="section smart-section">
  <h2 class="centered-heading">Built-In Intelligence</h2>
  <p class="centered-subhead">Two live readings, right on the handle.</p>

  <div class="smart-grid">
    <div class="smart-card">
      <div class="smart-visual fish-visual">
        <div class="status-dot"></div>
        <div>
          <strong>Fish Detected Nearby</strong>
          <p>High activity — Nile Perch &amp; Tilapia</p>
        </div>
      </div>
      <h3>Fish Presence Sensor</h3>
      <p>A sensor built into the rod tip reads vibration and movement patterns in the water to tell you — yes or no — whether fish are actively feeding around your line.</p>
    </div>

    <div class="smart-card">
      <div class="smart-visual depth-visual">
        <div class="depth-label">
          <span>Current Depth</span>
          <span class="depth-value">14.2 m</span>
        </div>
        <div class="depth-gauge">
          <div class="depth-marker" style="top:38%;">You are here</div>
        </div>
      </div>
      <h3>Live Depth Gauge</h3>
      <p>A pressure sensor near the reel seat streams your exact casting depth to the handle display in real time, so you stay in the feeding zone.</p>
    </div>
  </div>
</section>

<!-- ================= SPECIFICATIONS ================= -->
<section class="section specs-section">
  <h2 class="centered-heading">Specifications</h2>
  <table class="specs-table">
    <tr><td>Material</td><td>Carbon fiber composite, saltwater resistant</td></tr>
    <tr><td>Length options</td><td>2.1 m / 2.4 m / 2.7 m</td></tr>
    <tr><td>Weight</td><td>210 g (2.4 m version)</td></tr>
    <tr><td>Sensor battery life</td><td>18 hours continuous use</td></tr>
    <tr><td>Depth range</td><td>0 – 60 m</td></tr>
    <tr><td>Connectivity</td><td>Bluetooth 5.2, Angler Egypt app</td></tr>
    <tr><td>Warranty</td><td>2 years, manufacturer defects</td></tr>
  </table>
</section>



<script src="../assets/js/product_details.js"></script>

<?php include '../includes/footer.php'; ?>
</body>
</html>
