<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About — Angler Egypt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/aboutus.css">

</head>

<body>
<?php include 'includes/navbar.php'; ?>
    <!-- HERO -->
    <section class="about-hero">

        <div class="about-hero-text">
            <h1>The water hides the unknown; we uncover it with intelligence</h1>
            <p>Where artificial intelligence meets the water, safer fishing begins.</p>
        </div>
    </section>


    <!-- OUR STORY -->
    <section class="section story-section">
        <div class="story-grid">
            <div class="story-collage">
                <img class="collage-top"
                    src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=700&q=80"
                    alt="Fishing map application on a tablet">
                <img class="collage-bottom"
                    src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=700&q=80"
                    alt="Team reviewing river maps together">
            </div>
            <div class="story-text">
                <span class="eyebrow-dark">The Beginning</span>
                <h2>Our Story</h2>
                <p>Our project started as part of a learning journey where we explored real-world challenges through a series of workshops in data analysis, marketing, and technology. Throughout these sessions, we learned how to identify problems, understand users' needs, and transform ideas into practical solutions.

Inspired by these experiences, we chose to focus on fishing safety. We designed a smart system that uses artificial intelligence and sensors to detect underwater obstacles and estimate their distance, helping fishermen navigate with greater confidence and awareness.

This project represents more than just a technical solution—it reflects our commitment to learning, innovation, teamwork, and applying technology to solve meaningful real-life problems.
</p>
                <p>We spent years traversing from the Mediterranean coast to the Red Sea, collecting data, talking to
                    veteran fishermen, and refining algorithms. Today, Angler Egypt serves thousands of pros and
                    hobbyists daily.</p>
                <blockquote>The water holds hidden challenges; we reveal them with intelligence.</blockquote>
            </div>
        </div>
    </section>


    <!-- MISSION -->
    <section class="section mission-section">
        <div class="mission-grid">
            <div class="mission-card">
                <div class="icon-badge">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 21V4a1 1 0 011-1h9l-1.5 4.5L16 12H6" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h2>Our Mission</h2>
                <p>Our mission is to make fishing safer and more efficient through smart technology. We are developing an intelligent system that detects underwater obstacles and measures the distance between the boat and potential hazards in real time.

Using advanced sensors and artificial intelligence, our solution helps fishermen better understand their surroundings, avoid hidden underwater objects, and make safer decisions while navigating or fishing. We aim to reduce risks, improve awareness, and provide a reliable companion that enhances every fishing trip.

Our vision is to combine innovation with safety, creating a smarter and more secure fishing experience for everyone.
</p>
                <div class="tag-row">
                    <span class="tag">Sustainable Fishing</span>
                    <span class="tag">Data Accuracy</span>
                </div>
            </div>
            <div class="mission-image">
                <img src="./assets/images/gene-gallin-_-PALv-NrN8-unsplash.jpg"
                    alt="Angler on a boat using a fish finder device on the Nile">
            </div>
        </div>
    </section>

    <!-- CREW -->
    <section class="section crew-section">
        <h2 class="crew-heading">Meet the Crew</h2>
        <p class="crew-subhead">The experts behind the data, dedicated to making every cast count.</p>

        <div class="crew-grid">
            <div class="crew-card">
                <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?auto=format&fit=crop&w=500&q=80"
                    alt="Omar Farouk, Founder and Lead Engineer">
                <h3>Omar Farouk</h3>
                <span class="crew-role">Founder &amp; Lead Engineer</span>
                <p>Hydro-engineering expert with 10 years of competitive fishing experience in the Red Sea.</p>
            </div>
            <div class="crew-card">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=500&q=80"
                    alt="Leila Mansour, Chief Data Scientist">
                <h3>Leila Mansour</h3>
                <span class="crew-role">Chief Data Scientist</span>
                <p>Specializes in predictive modeling for aquatic species migration and seasonal bite patterns.</p>
            </div>
            <div class="crew-card">
                <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?auto=format&fit=crop&w=500&q=80"
                    alt="Captain Ahmed Zaki, Community Liaison">
                <h3>Capt. Ahmed Zaki</h3>
                <span class="crew-role">Community Liaison</span>
                <p>A legendary Nile fisherman who ensures our technology stays true to the needs of local communities.
                </p>
            </div>
        </div>
    </section>


<?php include 'includes/footer.php'; ?>
</body>

</html>