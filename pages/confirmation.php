<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Order Confirmed — Angler Egypt</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/confirmation.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<section class="page-wrap">

  <!-- ================= STEP INDICATOR ================= -->
  <div class="steps-row">
    <div class="step done">
      <span class="step-circle">✓</span>
      <span>Cart</span>
    </div>
    <div class="step-line done"></div>
    <div class="step done">
      <span class="step-circle">✓</span>
      <span>Payment</span>
    </div>
    <div class="step-line done"></div>
    <div class="step active">
      <span class="step-circle">✓</span>
      <span>Confirmation</span>
    </div>
  </div>

  <!-- ================= SUCCESS BLOCK ================= -->
  <div class="success-block">
    <div class="success-icon">
      <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 12l6 6L20 6" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <h1>Order Confirmed</h1>
    <p>Thank you — your gear is on its way. A confirmation email has been sent to your inbox.</p>
    <span class="order-number">Order #AE-48213</span>
  </div>

  <div class="confirmation-layout">

    <!-- ================= ORDER ITEMS ================= -->
  

    <!-- ================= DELIVERY INFO ================= -->
    

  </div>

  <div style="text-align:center;margin-top:2rem;">
    <a href="product.php" style="display:inline-block;padding:0.9rem 2rem;background:#0077B6;color:#fff;border-radius:8px;text-decoration:none;font-weight:600;">Continue Shopping</a>
    <a href="../pages/home.php" style="display:inline-block;margin-left:1rem;padding:0.9rem 2rem;background:transparent;color:#0077B6;border:2px solid #0077B6;border-radius:8px;text-decoration:none;font-weight:600;">Back to Home</a>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
</body>
</html>
