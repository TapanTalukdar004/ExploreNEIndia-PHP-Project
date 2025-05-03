<?php
// File: meghalaya.php

// Define page specifics BEFORE including the header
$page_title = "Explore Meghalaya - Abode of Clouds";
$page_specific_css = 'css/state-details-static.css'; // Link the SHARED static CSS

// Define state theme class for CSS targeting
$body_class = "state-theme-meghalaya";

include 'header.php'; // Include header
?>

<main id="state-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- ========================== -->
    <!-- ===    HERO SECTION    === -->
    <!-- ========================== -->
    <section class="sd-hero state-hero-meghalaya"> <!-- Use theme class -->
        <div class="container sd-hero-container">
            <div class="sd-hero-content">
                <div class="sd-breadcrumbs">
                    <a href="destinations.php">Destinations</a> / <span>Meghalaya</span>
                </div>
                <h1>Meghalaya</h1>
                <div class="sd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Capital: Shillong</span>
                    <span><i class="fas fa-calendar-alt icon"></i> Best Time: October to June</span>
                </div>
                <p class="sd-hero-description">
                    Known as 'The Abode of Clouds', Meghalaya mesmerizes with its lush landscapes, cascading waterfalls, unique living root bridges, and fascinating Khasi, Garo, and Jaintia cultures.
                </p>
                 <a href="#meghalaya-packages" class="btn sd-hero-cta">View Meghalaya Packages</a>
            </div>
            <div class="sd-hero-image-wrapper">
                <!-- Specific Meghalaya Image -->
                <img src="images/2-4.jpg" alt="Meghalaya Waterfalls" class="sd-hero-image">
                 <div class="sd-hero-image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- ========================== -->
    <!-- ===   FAMOUS FOR SECTION === -->
    <!-- ========================== -->
    <section class="sd-section sd-famous-for">
        <div class="container">
            <h2 class="sd-section-title">Famous For</h2>
            <div class="sd-famous-grid">
                <div class="sd-famous-item">
                    <i class="fas fa-project-diagram icon"></i> <!-- Represents bridge structure -->
                    <span>Living Root Bridges</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-cloud-showers-heavy icon"></i> <!-- Represents rain -->
                    <span>Cherrapunji (Sohra)</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-city icon"></i> <!-- City icon -->
                    <span>Shillong City</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-dungeon icon"></i> <!-- Represents caves -->
                    <span>Caves & Caverns</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- === POPULAR DESTINATIONS === -->
    <!-- ============================== -->
    <section class="sd-section sd-popular-destinations">
        <div class="container">
            <h2 class="sd-section-title">Popular Destinations in Meghalaya</h2>

            <!-- Destination 1: Cherrapunji -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/cherra.jpg" alt="Nohkalikai Falls Cherrapunji" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Cherrapunji (Sohra)</h3>
                    <p>Once recorded as the wettest place on Earth, Cherrapunji (locally known as Sohra) offers dramatic cliffs, stunning waterfalls like Nohkalikai and Seven Sisters Falls, mesmerizing caves, and is the gateway to the famous Living Root Bridges.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Nohkalikai Falls</li>
                        <li>Seven Sisters Falls</li>
                        <li>Mawsmai Cave & Arwah Cave</li>
                        <li>Double Decker Root Bridge (Nongriat Trek)</li>
                    </ul>
                     <!-- Link to a future cherrapunji.php page -->
                    <a href="cherrapunji.php" class="btn outline-btn sd-explore-btn">Explore Cherrapunji</a>
                </div>
            </div>

             <!-- Destination 2: Shillong -->
            <div class="sd-destination-row row-reverse"> <!-- Note the row-reverse class -->
                 <div class="sd-destination-image">
                    <img src="images/shillong.jpg" width="600"  alt="Shillong City View" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Shillong</h3>
                    <p>The charming capital city, often called the 'Scotland of the East'. Shillong boasts pleasant weather, beautiful lakes like Ward's Lake, scenic viewpoints like Shillong Peak, impressive museums (Don Bosco), and a vibrant cafe and music culture.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Shillong Peak & Elephant Falls</li>
                        <li>Ward's Lake & Lady Hydari Park</li>
                        <li>Don Bosco Museum</li>
                        <li>Police Bazar & Cafe Hopping</li>
                    </ul>
                    <!-- Link to a future shillong.php page -->
                    <a href="shillong.php" class="btn outline-btn sd-explore-btn">Explore Shillong</a>
                </div>
            </div>

             <!-- Destination 3: Dawki -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/dawki.jpg" alt="Dawki River Clear Water Boating" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Dawki & Shnongpdeng</h3>
                    <p>Famous for the crystal-clear waters of the Umngot River near the Indo-Bangladesh border. Enjoy boating where boats seem to float in mid-air, camping by the riverside in Shnongpdeng, and adventure activities like cliff jumping and snorkeling.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Umngot River Boating</li>
                        <li>Dawki Border Crossing Viewpoint</li>
                        <li>Shnongpdeng Riverside Camping</li>
                        <li>Adventure Sports (Seasonal)</li>
                    </ul>
                    <!-- Link to a future dawki.php page -->
                    <a href="dawki.php" class="btn outline-btn sd-explore-btn">Explore Dawki</a>
                </div>
            </div>

             <!-- Destination 4: Mawlynnong -->
            <div class="sd-destination-row row-reverse">
                 <div class="sd-destination-image">
                    <img src="images/mylong.jpg" alt="Mawlynnong Village Clean Pathway" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Mawlynnong</h3>
                    <p>Renowned as 'Asia's Cleanest Village', Mawlynnong offers a glimpse into sustainable community living. Walk through its immaculate pathways, see the local living root bridge, marvel at the balancing rock, and climb the Sky Walk for panoramic views.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Clean Village Walk</li>
                        <li>Mawlynnong Living Root Bridge</li>
                        <li>Balancing Rock</li>
                        <li>Sky Walk (Treehouse Viewpoint)</li>
                    </ul>
                    <!-- Link to a future mawlynnong.php page -->
                    <a href="mawlynnong.php" class="btn outline-btn sd-explore-btn">Explore Mawlynnong</a>
                </div>
            </div>


        </div>
    </section>

    <!-- ============================ -->
    <!-- === RECOMMENDED PACKAGES === -->
    <!-- ============================ -->
    <section id="meghalaya-packages" class="sd-section sd-related-packages state-hero-meghalaya"> <!-- Reuse theme class -->
        <div class="container">
             <h2 class="sd-section-title">Recommended Meghalaya Packages</h2>
             <div class="sd-packages-grid">

                <!-- Package Card 1: Meghalaya Adventure Explorer -->
                <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/2-4.jpg" alt="Meghalaya Adventure Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">6 Days / 5 Nights</span>
                        <h3>Meghalaya Adventure Explorer</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.8
                        </div>
                        <p>Comprehensive tour including root bridge trek, Dawki, Mawlynnong & Cherrapunji.</p>
                        <div class="sd-pkg-price">From ₹24,999</div>
                        <a href="meghalaya-adventure.php" class="btn primary-btn sd-pkg-btn">View Details</a>
                     </div>
                 </div>

                <!-- Package Card 2: Short Meghalaya Trip -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/2-2.jpg" alt="Short Meghalaya Trip" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">4 Days / 3 Nights</span>
                        <h3>Glimpse of Meghalaya</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.6
                        </div>
                        <p>A shorter trip focusing on Shillong and Cherrapunji's main attractions.</p>
                        <div class="sd-pkg-price">From ₹17,500</div>
                        <a href="meghalaya-glimpse.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                 <!-- Package Card 3: Meghalaya Offbeat -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/caves.jpg" alt="Meghalaya Offbeat Caves" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">7 Days / 6 Nights</span>
                        <h3>Meghalaya Caving & Offbeat</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.7
                        </div>
                        <p>Explore deeper caves like Krem Liat Prah, visit less crowded waterfalls and villages.</p>
                        <div class="sd-pkg-price">From ₹29,000</div>
                        <a href="meghalaya-offbeat.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>


             </div>
              <div class="sd-view-all-btn-container">
                 <a href="packages.php?state=Meghalaya" class="btn related-btn">View All Meghalaya Packages</a>
             </div>
        </div>
    </section>

     <!-- ============================ -->
    <!-- === CULTURAL HERITAGE === -->
    <!-- ============================ -->
    <section class="sd-section sd-cultural-heritage">
         <div class="container">
            <div class="sd-heritage-content">
                <div class="sd-heritage-text">
                    <h2 class="sd-section-title text-left">Cultural Heritage of Meghalaya</h2>
                    <p>Meghalaya is predominantly home to three major tribal communities: the Khasis (central hills), the Garos (western hills), and the Jaintias (eastern hills), each with distinct customs, languages, and traditions. The unique matrilineal system (lineage traced through the mother) is prevalent among the Khasis and Jaintias.</p>
                    <p>Traditional music, dance (like Wangala Dance of Garos), intricate handlooms, bamboo crafts, and unique practices like building living root bridges showcase their deep connection with nature. Festivals like Shad Suk Mynsiem, Behdienkhlam, and Wangala are vibrant celebrations of their culture.</p>
                    <a href="#meghalaya-packages" class="btn outline-btn">Explore Cultural Experiences</a>
                </div>
                <div class="sd-heritage-images">
                     <div class="about-ne-img-item"><img src="images/2-3.jpg" alt="Living Root Bridge Detail" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/wangala.jpg" alt="Wangala Dance" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/khasi.jpg" alt="Khasi Lady" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/hut.jpg" alt="Traditional Khasi Hut" loading="lazy"></div> <!-- Reusing homestay image -->
                 </div>
            </div>
         </div>
    </section>

    <!-- ============================ -->
    <!-- === PLAN YOUR VISIT (CTA) === -->
    <!-- ============================ -->
    <section class="sd-section sd-plan-visit state-hero-meghalaya"> <!-- Reuse theme class -->
         <div class="container text-center">
              <h2 class="sd-section-title">Plan Your Visit to Meghalaya</h2>
              <p class="sd-plan-text">
                The ideal time to visit Meghalaya is from <strong>October to June</strong>. Post-monsoon (Oct-Nov) offers lush green landscapes and full waterfalls. Winter (Dec-Feb) is cool and pleasant. Spring/early summer (Mar-Jun) is also good, though pre-monsoon showers can occur. Avoid peak monsoon (Jul-Sep) for easier travel and trekking.
              </p>
              <a href="packages.php?state=Meghalaya" class="btn related-btn">Browse Meghalaya Tour Packages</a>
         </div>
    </section>

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- Link Scripts -->
<script src="js/state-details-interactions.js"></script> <!-- For Carousel if used -->
<script src="js/navbar.js"></script>

</body>
</html>