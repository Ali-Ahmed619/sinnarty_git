<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Checkout — Angler Egypt</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/payment.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<section class="page-wrap">

  <div class="page-title-row">
    <h1>Checkout</h1>
  </div>

  <!-- ================= STEP INDICATOR ================= -->
  <div class="steps-row">
    <div class="step done">
      <span class="step-circle">✓</span>
      <span>Cart</span>
    </div>
    <div class="step-line done"></div>
    <div class="step active">
      <span class="step-circle">2</span>
      <span>Payment</span>
    </div>
    <div class="step-line"></div>
    <div class="step">
      <span class="step-circle">3</span>
      <span>Confirmation</span>
    </div>
  </div>

  <div class="checkout-layout">

    <!-- ================= FORM ================= -->
    <div class="checkout-form">

      <div class="form-card">
        <h2>Shipping Information</h2>
        <div class="form-grid">
          <div class="field">
            <label>Full Name</label>
            <input type="text" placeholder="Your name">
          </div>
          <div class="field">
            <label>Phone Number</label>
            <input type="text" placeholder="01xxxxxxxxx">
          </div>
          <div class="field span-2">
            <label>Address</label>
            <input type="text" placeholder="Street, building, apartment">
          </div>
          <div class="field">
            <label>City</label>
            <input type="text" placeholder="e.g. Cairo">
          </div>
          <div class="field">
            <label>Postal Code</label>
            <input type="text" placeholder="e.g. 11511">
          </div>
        </div>
      </div>

      <div class="form-card">
        <h2>Payment Method</h2>

        <div class="payment-methods">
          <label class="method-option selected" data-method="card">
            <input type="radio" name="method" checked>
            <span class="method-icon">💳</span>
            <span>Credit / Debit Card</span>
          </label>
          <label class="method-option" data-method="cod">
            <input type="radio" name="method">
            <span class="method-icon">💵</span>
            <span>Cash on Delivery</span>
          </label>
        </div>

        <div class="card-fields" id="cardFields">
          <div class="field span-2">
            <label>Card Number</label>
            <input type="text" placeholder="1234 5678 9012 3456">
          </div>
          <div class="field">
            <label>Expiry Date</label>
            <input type="text" placeholder="MM / YY">
          </div>
          <div class="field">
            <label>CVV</label>
            <input type="text" placeholder="123">
          </div>
          <div class="field span-2">
            <label>Name on Card</label>
            <input type="text" placeholder="As shown on card">
          </div>
        </div>
      </div>

    </div>

    <!-- ================= ORDER SUMMARY ================= -->
    <aside class="order-summary">
      <h2>Order Summary</h2>

      <div class="mini-item">
        <img src="../assets/images/rod and reel combo.jpeg" alt="Senara Classic">
        <div>
          <strong>Senara Classic</strong>
          <span>Qty 1 • 2.4 m</span>
        </div>
        <span class="mini-price">EGP 4,250</span>
      </div>

      <div class="mini-item">
        <img src="../assets/images/Similar to my rod and reel.jpeg" alt="Senara Red Sea">
        <div>
          <strong>Senara Red Sea</strong>
          <span>Qty 1 • 2.7 m</span>
        </div>
        <span class="mini-price">EGP 5,600</span>
      </div>

      <div class="mini-item">
        <img src="../assets/images/WXM 500 2_20 m M 7-21 g lure fishing rod and reel combo.jpeg" alt="Senara Compact">
        <div>
          <strong>Senara Compact</strong>
          <span>Qty 1 • 1.8 m</span>
        </div>
        <span class="mini-price">EGP 3,200</span>
      </div>

      <div class="summary-line">
        <span>Subtotal</span>
        <span>EGP 13,050</span>
      </div>
      <div class="summary-line">
        <span>Shipping</span>
        <span>Free</span>
      </div>
      <div class="summary-line">
        <span>Tax (14%)</span>
        <span>EGP 1,827</span>
      </div>

      <div class="summary-total">
        <span>Total</span>
        <span>EGP 14,877</span>
      </div>

      <a href="confirmation.php"><button class="btn-pay">Pay Now →</button></a>

      <div class="secure-note">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="5" y="11" width="14" height="9" rx="2" stroke="currentColor" stroke-width="1.6"/>
          <path d="M8 11V7a4 4 0 018 0v4" stroke="currentColor" stroke-width="1.6"/>
        </svg>
        Your payment is encrypted and secure
      </div>
    </aside>

  </div>
</section>

<script src="../assets/js/payment.js"></script>

<?php include '../includes/footer.php'; ?>
</body>
</html>