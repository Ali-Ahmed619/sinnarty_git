<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Angler Egypt — Discover Egypt's Legendary Waters</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>

<!-- HERO -->
<section class="hero-light">
  <div class="hero-light-bg">
    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1800&q=80" alt="Fishing boat on calm water at sunset">
  </div>
  <div class="hero-light-content">
    <h1>Legendary Waters<br><span class="accent">Unforgettable Catches</span></h1>
    <p>Sinnarty combines real-time depth sensing with intelligent underwater fish detection, helping anglers make every cast with precision and confidence.</p>
    <div class="search-bar">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/>
        <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
      <input type="text" placeholder="Search spots, cities, or species...">
      <button>Start Exploring</button>
    </div>
  </div>
</section>

<!-- PREMIER SPOTS -->
<section class="section spots-section">
  <div class="section-heading-row">
    <div>
      <h2>Premier Spots</h2>
      <p class="section-subhead">The most productive fishing destinations across the country.</p>
    </div>
    <a href="spot.php" class="view-all">View full directory →</a>
  </div>

  <div class="spots-grid">
    <a href="spot_details.php" class="spot-card" style="display:block;text-decoration:none;color:inherit;">
      <img src="https://images.unsplash.com/photo-1596178060810-72d842c4e0d4?auto=format&fit=crop&w=700&q=80" alt="Alexandria harbor with boats">
      <div class="spot-overlay">
        <span class="spot-tag">Mediterranean</span>
        <h3>Alexandria</h3>
      </div>
    </a>
    <a href="spot_details.php" class="spot-card" style="display:block;text-decoration:none;color:inherit;">
      <img src="https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?auto=format&fit=crop&w=700&q=80" alt="Hurghada marina with yachts">
      <div class="spot-overlay">
        <span class="spot-tag">Red Sea</span>
        <h3>Hurghada</h3>
      </div>
    </a>
    <a href="spot_details.php" class="spot-card" style="display:block;text-decoration:none;color:inherit;">
      <img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21?auto=format&fit=crop&w=700&q=80" alt="Lake Nasser at sunset">
      <div class="spot-overlay">
        <span class="spot-tag">Freshwater</span>
        <h3>Lake Nasser</h3>
      </div>
    </a>
  </div>
</section>

<!-- KEY SPECIES -->
<section class="section species-section">
  <h2 class="centered-heading">Key Species</h2>
  <p class="centered-subhead">Essential profiles for the local favorites.</p>

  <div class="species-grid">
    <a href="fish_details.php" class="species-card" style="display:block;text-decoration:none;color:inherit;">
      <div class="species-image">
        <img src="https://images.unsplash.com/photo-1544943910-4c1dc44aab44?auto=format&fit=crop&w=500&q=80" alt="Nile Perch fish">
      </div>
      <h3>Nile Perch</h3>
      <span class="species-tag">Freshwater • Lake Nasser</span>
    </a>
    <a href="fish_details.php" class="species-card" style="display:block;text-decoration:none;color:inherit;">
      <div class="species-image">
        <img src="https://images.unsplash.com/photo-1522069169874-c58ec4b76be5?auto=format&fit=crop&w=500&q=80" alt="Nile Tilapia fish">
      </div>
      <h3>Nile Tilapia</h3>
      <span class="species-tag">Freshwater • River Nile</span>
    </a>
    <a href="fish_details.php" class="species-card" style="display:block;text-decoration:none;color:inherit;">
      <div class="species-image">
        <img src="https://images.unsplash.com/photo-1544966503-7cc531f8e39d?auto=format&fit=crop&w=500&q=80" alt="Red Sea Grouper among coral reef">
      </div>
      <h3>Red Sea Grouper</h3>
      <span class="species-tag">Saltwater • Red Sea</span>
    </a>
  </div>
</section>

<!-- GET IN TOUCH -->
<section class="section contact-section">
  <div class="contact-grid">
    <div class="contact-info">
      <h2>Get in Touch</h2>
      <p>Have questions about Egyptian fishing spots or need technical support? Our team of local experts is here to help you make the most of your next adventure.</p>

      <div class="contact-item">
        <div class="contact-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 4h16v16H4V4z" stroke="currentColor" stroke-width="1.6"/>
            <path d="M4 6l8 7 8-7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
          </svg>
        </div>
        <div>
          <strong>Email Us</strong>
          <p>support@angleregypt.com</p>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 21s7-6.2 7-11.5A7 7 0 105 9.5C5 14.8 12 21 12 21z" stroke="currentColor" stroke-width="1.6"/>
            <circle cx="12" cy="9.5" r="2.3" stroke="currentColor" stroke-width="1.6"/>
          </svg>
        </div>
        <div>
          <strong>Office</strong>
          <p>Zamalek, Cairo, Egypt</p>
        </div>
      </div>
    </div>

    <form class="contact-form">
      <label>Full Name</label>
      <input type="text" placeholder="Your name">

      <label>Email Address</label>
      <input type="email" placeholder="your@email.com">

      <label>Message</label>
      <textarea rows="4" placeholder="How can we help?"></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
</body>
</html>