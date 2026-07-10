<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lake Nasser – Wadi El Rayan | Smart Fishing Assistant</title>
<link rel="preconnect" href="https://unpkg.com">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="../assets/css/spot_detailes.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>

  <!-- ============ HERO ============ -->
  <section class="hero">
    <img src="https://images.unsplash.com/photo-1508739773434-c26b3d09e071?q=80&w=1600&auto=format&fit=crop"
         alt="Wadi El Rayan lake at sunset" class="hero-img">
    <div class="hero-overlay">
      <div class="hero-content">
        <div class="breadcrumb"><a href="spot.php" style="color:inherit;text-decoration:underline;opacity:0.8;">Spots</a> &nbsp;›&nbsp; Faiyum</div>
        <h1>Lake Nasser – Wadi El Rayan</h1>
        <div class="hero-meta">
          <span class="pin">📍 Southern Egypt</span>
          <span class="rating">⭐ 4.8 (124 reviews)</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ MAIN CONTENT ============ -->
  <main class="page-wrap">
    <div class="content-grid">

      <!-- LEFT COLUMN -->
      <div class="left-col">

        <div class="card">
          <h2>About this Spot</h2>
          <p>
            Discover the serenity of Lake Nasser's Wadi El Rayan, a premier destination for serious anglers.
            This man-made reservoir offers a unique desert fishing experience with crystal clear waters and a
            thriving ecosystem. Known for its challenging yet rewarding conditions, it's a sanctuary for those
            seeking trophy catches away from the coastal crowds.
          </p>
          <div class="tag-row">
            <span class="tag">〰️ Fresh Water</span>
            <span class="tag">👁️ High Clarity</span>
            <span class="tag">🚣 Boat Access</span>
          </div>
        </div>

        <h2 class="section-title">Available Species</h2>
        <div class="species-grid">
          <div class="species-card">
            <img src="https://images.unsplash.com/photo-1544966503-7cc531be16e7?q=80&w=400&auto=format&fit=crop" alt="Tilapia">
            <div>
              <h3>Tilapia</h3>
              <p>Active year-round, most abundant in shallow reeds.</p>
            </div>
          </div>
          <div class="species-card">
            <img src="https://images.unsplash.com/photo-1544943910-4c1dc44aab44?q=80&w=400&auto=format&fit=crop" alt="Catfish">
            <div>
              <h3>Catfish</h3>
              <p>Best at dusk/night in deep channels.</p>
            </div>
          </div>
        </div>

        <div class="reviews-header">
          <h2 class="section-title">Angler Reviews</h2>
          <a href="#" class="write-review">Write a Review ✎</a>
        </div>

        <div class="review-card">
          <div class="review-top">
            <div class="avatar">MK</div>
            <div class="review-user">
              <div class="name">Mahmoud K.</div>
              <div class="sub">2 days ago • Pro Member</div>
            </div>
            <div class="stars">★★★★★</div>
          </div>
          <p>"Great weekend at the Wadi. Water levels are perfect right now. Caught 3 large Catfish near the north ridge just after sunset."</p>
        </div>

        <div class="review-card">
          <div class="review-top">
            <div class="avatar alt">AH</div>
            <div class="review-user">
              <div class="name">Ahmed H.</div>
              <div class="sub">1 week ago</div>
            </div>
            <div class="stars">★★★★☆</div>
          </div>
          <p>"Tilapia were biting well in the morning. Use light tackle for the best results. Beautiful scenery as always."</p>
        </div>

      </div>

      <!-- RIGHT COLUMN -->
      <div class="right-col">

        <div class="card weather-card" id="weatherCard">
          <div class="weather-top">
            <div>
              <div class="weather-label">Current Weather</div>
              <div class="weather-temp" id="weatherTemp">--°C</div>
            </div>
            <div class="weather-icon" id="weatherIcon">⏳</div>
          </div>
          <div class="weather-stats">
            <div class="weather-stat">
              <div class="stat-label">💨 Wind</div>
              <div class="stat-value" id="windValue">-- km/h</div>
            </div>
            <div class="weather-stat">
              <div class="stat-label">💧 Humidity</div>
              <div class="stat-value" id="humidityValue">--%</div>
            </div>
          </div>
          <div class="weather-updated" id="weatherUpdated"></div>
         
        </div>

        <div class="card">
          <h2>Best Times</h2>
          <div class="best-time-row">
            <div class="bt-left">☀️ Morning Peak</div>
            <div class="bt-right">05:00 – 08:30</div>
          </div>
          <div class="best-time-row">
            <div class="bt-left">🌙 Night Peak</div>
            <div class="bt-right">20:00 – 23:00</div>
          </div>
          
        </div>

        <div class="card map-card">
          <div id="map"></div>
          <a id="openInMapsLink" class="open-maps" href="#" target="_blank" rel="noopener">📍 Open in Maps</a>
        </div>

      </div>
    </div>
  </main>

 

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="../assets/js/spot_details.js"></script>
<?php include '../includes/footer.php'; ?>
</body>
</html>