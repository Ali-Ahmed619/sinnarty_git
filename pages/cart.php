<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Your Cart — Angler Egypt</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/cart.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<section class="page-wrap">

  <div class="page-title-row">
    <h1>Your Cart</h1>
    <span class="item-count">3 items</span>
  </div>

  <div class="cart-layout">

    <!-- ================= CART ITEMS ================= -->
    <div class="cart-items">

      <div class="cart-item" data-unit-price="4250">
        <img src="../assets/images/rod and reel combo.jpeg" alt="Senara Classic smart fishing rod">
        <div class="item-details">
          <h3>Senara Classic</h3>
          <span class="item-variant">2.4 m • Primary Blue</span>
          <button class="remove-link">Remove</button>
        </div>
        <div class="item-qty">
          <button class="qty-btn minus">−</button>
          <span class="qty-value">1</span>
          <button class="qty-btn plus">+</button>
        </div>
        <div class="item-price">EGP 4,250</div>
      </div>

      <div class="cart-item" data-unit-price="5600">
        <img src="../assets/images/Similar to my rod and reel.jpeg" alt="Senara Red Sea smart fishing rod">
        <div class="item-details">
          <h3>Senara Red Sea</h3>
          <span class="item-variant">2.7 m • Neutral Black</span>
          <button class="remove-link">Remove</button>
        </div>
        <div class="item-qty">
          <button class="qty-btn minus">−</button>
          <span class="qty-value">1</span>
          <button class="qty-btn plus">+</button>
        </div>
        <div class="item-price">EGP 5,600</div>
      </div>

      <div class="cart-item" data-unit-price="3200">
        <img src="../assets/images/WXM 500 2_20 m M 7-21 g lure fishing rod and reel combo.jpeg" alt="Senara Compact travel fishing rod">
        <div class="item-details">
          <h3>Senara Compact</h3>
          <span class="item-variant">1.8 m • Tertiary Cyan</span>
          <button class="remove-link">Remove</button>
        </div>
        <div class="item-qty">
          <button class="qty-btn minus">−</button>
          <span class="qty-value">1</span>
          <button class="qty-btn plus">+</button>
        </div>
        <div class="item-price">EGP 3,200</div>
      </div>

      <a href="product.php" class="continue-shopping">← Continue Shopping</a>
    </div>

    <!-- ================= ORDER SUMMARY ================= -->
    <aside class="order-summary">
      <h2>Order Summary</h2>

      <div class="promo-row">
        <input type="text" id="promo-input" placeholder="Promo code">
        <button id="promo-btn">Apply</button>
      </div>
      <div class="promo-message" id="promo-message"></div>

      <div class="summary-line">
        <span>Subtotal</span>
        <span id="subtotal-value">EGP 0</span>
      </div>
      <div class="summary-line" id="discount-row" style="display:none;">
        <span>Discount</span>
        <span id="discount-value" style="color:var(--green);">-EGP 0</span>
      </div>
      <div class="summary-line">
        <span>Shipping</span>
        <span>Free</span>
      </div>
      <div class="summary-line">
        <span>Tax (14%)</span>
        <span id="tax-value">EGP 0</span>
      </div>

      <div class="summary-total">
        <span>Total</span>
        <span id="total-value">EGP 0</span>
      </div>

      <a href="payment.php"><button class="btn-checkout">Proceed to Checkout →</button></a>

      <div class="secure-note">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="5" y="11" width="14" height="9" rx="2" stroke="currentColor" stroke-width="1.6"/>
          <path d="M8 11V7a4 4 0 018 0v4" stroke="currentColor" stroke-width="1.6"/>
        </svg>
        Secure checkout
      </div>
    </aside>

  </div>
</section>

<script src="../assets/js/cart.js"></script>

<?php include '../includes/footer.php'; ?>
</body>
</html>