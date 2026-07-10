<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Fishing Assistant</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/spot.css">
</head>
<body>
<?php include '../includes/navbar.php'; ?>

    <header class="hero-section">
        <div class="hero-text">
            <h1>Egypt's Premier Fishing<br>Directory</h1>
            <p>Explore curated spots across the Nile and Red Sea. Real-time conditions and<br>expert community insights for your next catch.</p>
        </div>
        <div class="hero-badges">
            <span class="badge"><i class="fa-solid fa-water"></i> Moderate Tide</span>
            <span class="badge"><i class="fa-solid fa-temperature-half"></i> 24°C Water</span>
        </div>
    </header>

    <section class="search-section">
        <div class="search-container">
            <div class="search-input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" id="searchInput" placeholder="Search by spot name or region...">
            </div>
            <select class="search-select">
                <option>All Locations</option>
            </select>
            <select class="search-select">
                <option>All Fish Species</option>
            </select>
            <button class="btn-advanced" id="advancedBtn"><i class="fa-solid fa-sliders"></i> Advanced</button>
        </div>
    </section>

    <section class="cards-section">
        <article class="card">
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1572970799482-3d712ce62fc7?q=80&w=600&auto=format&fit=crop');">
                <span class="tag tag-active"><i class="fa-solid fa-circle" style="font-size: 8px; color: #10b981;"></i> Active Bite</span>
            </div>
            <div class="card-content">
                <h3>Alexandria Eastern Harbour</h3>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Mediterranean Coast</p>
                <p class="desc">A historic fishing ground offering a variety of Mediterranean species. Best known for sea bass and red mullet during the early mornin...</p>
                <div class="card-footer">
                    <div class="avatars">
                        <span class="avatar" style="background: #0d6efd;">SM</span>
                        <span class="avatar" style="background: #0dcaf0; left: -10px;">AJ</span>
                        <span class="avatar" style="background: #dee2e6; color: #495057; left: -20px; font-size: 10px;">+12</span>
                    </div>
                    <a href="./spot_details.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </article>

        <article class="card">
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1549487535-c3f25d3090cd?q=80&w=600&auto=format&fit=crop');">
                <span class="tag tag-pro">Pro Choice</span>
            </div>
            <div class="card-content">
                <h3>Lake Nasser</h3>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Upper Egypt</p>
                <p class="desc">Home to the legendary Nile Perch. This freshwater giant attracts anglers from around the world. Remote, peaceful, and technical...</p>
                <div class="card-footer">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #ffc107;"></i> 4.9 (2.4k reviews)
                    </div>
                    <a href="./spot_details.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </article>

        <article class="card">
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?q=80&w=600&auto=format&fit=crop');"></div>
            <div class="card-content">
                <h3>Hurghada Reefs</h3>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Red Sea Coast</p>
                <p class="desc">Vibrant reef fishing with target species including Emperor, Grouper, and Barracuda. Crystal clear waters with visibility up to 30...</p>
                <div class="card-footer">
                    <div class="tags-group">
                        <span class="small-tag">Saltwater</span>
                        <span class="small-tag">Deep Sea</span>
                    </div>
                    <a href="./spot_details.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </article>


        <article class="card">
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1549487535-c3f25d3090cd?q=80&w=600&auto=format&fit=crop');">
                <span class="tag tag-pro">Pro Choice</span>
            </div>
            <div class="card-content">
                <h3>Lake Nasser</h3>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Upper Egypt</p>
                <p class="desc">Home to the legendary Nile Perch. This freshwater giant attracts anglers from around the world. Remote, peaceful, and technical...</p>
                <div class="card-footer">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #ffc107;"></i> 4.9 (2.4k reviews)
                    </div>
                    <a href="./spot_details.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </article>

        <article class="card">
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1549487535-c3f25d3090cd?q=80&w=600&auto=format&fit=crop');">
                <span class="tag tag-pro">Pro Choice</span>
            </div>
            <div class="card-content">
                <h3>Lake Nasser</h3>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Upper Egypt</p>
                <p class="desc">Home to the legendary Nile Perch. This freshwater giant attracts anglers from around the world. Remote, peaceful, and technical...</p>
                <div class="card-footer">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #ffc107;"></i> 4.9 (2.4k reviews)
                    </div>
                    <a href="./spot_details.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </article>

        <article class="card">
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1549487535-c3f25d3090cd?q=80&w=600&auto=format&fit=crop');">
                <span class="tag tag-pro">Pro Choice</span>
            </div>
            <div class="card-content">
                <h3>Lake Nasser</h3>
                <p class="location"><i class="fa-solid fa-location-dot"></i> Upper Egypt</p>
                <p class="desc">Home to the legendary Nile Perch. This freshwater giant attracts anglers from around the world. Remote, peaceful, and technical...</p>
                <div class="card-footer">
                    <div class="rating">
                        <i class="fa-solid fa-star" style="color: #ffc107;"></i> 4.9 (2.4k reviews)
                    </div>
                    <a href="./spot_details.php" class="view-details">View Details <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </article>


    </section>

  

    <?php include '../includes/footer.php'; ?>

    <script src="../assets/js/spot.js"></script>
</body>
</html>