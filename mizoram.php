<?php
// File: mizoram.php

// Define page specifics BEFORE including the header
$page_title = "Explore Mizoram - Land of the Highlanders";
$page_specific_css = 'css/state-details-static.css'; // Link the SHARED static CSS

// Define state theme class for CSS targeting
$body_class = "state-theme-mizoram";

include 'header.php'; // Include header
?>

<main id="state-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- ========================== -->
    <!-- ===    HERO SECTION    === -->
    <!-- ========================== -->
    <section class="sd-hero state-hero-mizoram"> <!-- Use theme class -->
        <div class="container sd-hero-container">
            <div class="sd-hero-content">
                <div class="sd-breadcrumbs">
                    <a href="destinations.php">Destinations</a> / <span>Mizoram</span>
                </div>
                <h1>Mizoram</h1>
                <div class="sd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Capital: Aizawl</span>
                    <span><i class="fas fa-calendar-alt icon"></i> Best Time: October to May</span>
                </div>
                <p class="sd-hero-description">
                    Explore the serene 'Land of the Highlanders', Mizoram, known for its rolling hills, vibrant Mizo culture, intricate bamboo crafts, colourful festivals, and breathtaking landscapes like the Blue Mountain (Phawngpui).
                </p>
                 <a href="#mizoram-packages" class="btn sd-hero-cta">View Mizoram Packages</a>
            </div>
            <div class="sd-hero-image-wrapper">
                <!-- Specific Mizoram Image -->
                <img src="https://images.unsplash.com/photo-1589556264800-f01c1aae3e7a?q=80&w=800" alt="Mizoram Hills Landscape" class="sd-hero-image">
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
                    <i class="fab fa-pagelines icon"></i> <!-- Represents Bamboo -->
                    <span>Bamboo Handicrafts</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-mountain icon"></i> <!-- Represents Mountains -->
                    <span>Blue Mountains (Phawngpui)</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-users icon"></i> <!-- Represents Dance/Culture -->
                    <span>Cheraw (Bamboo Dance)</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-music icon"></i> <!-- Represents Music/Festivals -->
                    <span>Chapchar Kut Festival</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- === POPULAR DESTINATIONS === -->
    <!-- ============================== -->
    <section class="sd-section sd-popular-destinations">
        <div class="container">
            <h2 class="sd-section-title">Popular Destinations in Mizoram</h2>

            <!-- Destination 1: Aizawl -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="https://images.unsplash.com/photo-1626260113600-84c917a446f2?q=80&w=800" alt="Aizawl City Mizoram" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Aizawl</h3>
                    <p>The picturesque capital city built amphitheatrically on steep hills. Explore the Mizoram State Museum, visit Solomon's Temple (a unique church), get panoramic views from Durtlang Hills, and experience the local markets and Mizo way of life.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Mizoram State Museum</li>
                        <li>Durtlang Hills Viewpoint</li>
                        <li>Solomon's Temple</li>
                        <li>Bara Bazar (Main Market)</li>
                        <li>KV Paradise (Memorial)</li>
                    </ul>
                     <!-- Link to a future aizawl.php page -->
                    <a href="aizawl.php" class="btn outline-btn sd-explore-btn">Explore Aizawl</a>
                </div>
            </div>

             <!-- Destination 2: Phawngpui (Blue Mountain) -->
            <div class="sd-destination-row row-reverse">
                 <div class="sd-destination-image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Phawngpui_Blue_Mountain_National_Park.jpg/640px-Phawngpui_Blue_Mountain_National_Park.jpg" alt="Phawngpui Blue Mountain Mizoram" loading="lazy"> <!-- Wikimedia Example -->
                </div>
                <div class="sd-destination-content">
                    <h3>Phawngpui (Blue Mountain)</h3>
                    <p>The highest peak in Mizoram, located within the Phawngpui National Park. Offers breathtaking views, stunning cliffs (Thlazuang Kham), rich biodiversity including rare orchids and rhododendrons, and opportunities for trekking (seasonal).</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Phawngpui Peak Summit</li>
                        <li>Thlazuang Kham Cliffs</li>
                        <li>Blue Mountain National Park</li>
                        <li>Bird Watching & Flora</li>
                        <li>Trekking Routes (with guide)</li>
                    </ul>
                    <!-- Link to a future phawngpui.php page -->
                    <a href="phawngpui.php" class="btn outline-btn sd-explore-btn">Explore Phawngpui</a>
                </div>
            </div>

             <!-- Destination 3: Reiek Tlang -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                     <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/View_from_Reiek_Peak%2C_Mizoram.jpg/640px-View_from_Reiek_Peak%2C_Mizoram.jpg" alt="Reiek Tlang View Mizoram" loading="lazy"> <!-- Wikimedia Example -->
                </div>
                <div class="sd-destination-content">
                    <h3>Reiek Tlang</h3>
                    <p>A popular mountain peak near Aizawl (approx 30 km) offering panoramic views of the surrounding hills and valleys, including Aizawl city on clear days. Features a model Mizo heritage village at the base, showcasing traditional huts and lifestyle.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Hike to Reiek Peak Viewpoint</li>
                        <li>Explore Reiek Heritage Village</li>
                        <li>Enjoy Scenic Views</li>
                        <li>Bird Watching</li>
                    </ul>
                    <!-- Link to a future reiek.php page -->
                    <a href="reiek.php" class="btn outline-btn sd-explore-btn">Explore Reiek Tlang</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================ -->
    <!-- === RECOMMENDED PACKAGES === -->
    <!-- ============================ -->
    <section id="mizoram-packages" class="sd-section sd-related-packages state-hero-mizoram"> <!-- Reuse theme class -->
        <div class="container">
             <h2 class="sd-section-title">Recommended Mizoram Packages</h2>
             <div class="sd-packages-grid">

                <!-- Package Card 1: Mizoram Hills & Culture -->
                <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://images.unsplash.com/photo-1589556264800-f01c1aae3e7a?q=80&w=600" alt="Mizoram Hills Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">5 Days / 4 Nights</span>
                        <h3>Mizoram Hills & Culture</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.5
                        </div>
                        <p>Explore Aizawl city, visit Reiek Peak, and experience the scenic beauty of Mizoram.</p>
                        <div class="sd-pkg-price">From ₹21,000</div>
                        <a href="mizoram-hills.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                <!-- Package Card 2: Blue Mountain Expedition -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Phawngpui_Blue_Mountain_National_Park.jpg/640px-Phawngpui_Blue_Mountain_National_Park.jpg" alt="Phawngpui Blue Mountain Tour" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">6 Days / 5 Nights</span>
                        <h3>Blue Mountain Expedition</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.6
                        </div>
                        <p>Journey to South Mizoram to explore Phawngpui National Park and its peak.</p>
                        <div class="sd-pkg-price">From ₹28,000</div>
                        <a href="blue-mountain-expedition.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                 <!-- Package Card 3: Mizoram Festival Tour (Chapchar Kut) -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Chapchar_Kut_2018_-_Dance.jpg/640px-Chapchar_Kut_2018_-_Dance.jpg" alt="Chapchar Kut Festival Mizoram" loading="lazy"> <!-- Wikimedia Example -->
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">4 Days / 3 Nights</span>
                        <h3>Chapchar Kut Festival Tour</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.8
                        </div>
                        <p>Experience the vibrant Chapchar Kut spring festival in Aizawl (Seasonal - March).</p>
                        <div class="sd-pkg-price">Contact Us</div>
                        <a href="chapchar-kut-tour.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>


             </div>
              <div class="sd-view-all-btn-container">
                 <a href="packages.php?state=Mizoram" class="btn related-btn">View All Mizoram Packages</a>
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
                    <h2 class="sd-section-title text-left">Cultural Heritage of Mizoram</h2>
                    <p>Mizoram's culture is largely homogenous, dominated by the Mizo tribes (including Lusei, Ralte, Hmar, etc.) who share common traditions, language (Mizo), and religious beliefs (predominantly Christianity). They are known for their strong community bonds ('Tlawmngaihna' - selfless service), intricate bamboo and cane crafts, and vibrant woven textiles (Puan).</p>
                    <p>Music and dance are integral, with the famous 'Cheraw' (Bamboo Dance) being a spectacular display of skill and rhythm. Major festivals like Chapchar Kut (Spring Festival), Mim Kut (Maize Festival), and Pawl Kut (Harvest Festival) showcase Mizo traditions, dances, music, and cuisine.</p>
                    <a href="#mizoram-packages" class="btn outline-btn">Explore Cultural Experiences</a>
                </div>
                <div class="sd-heritage-images">
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Cheraw_dance%2C_Mizoram%2C_India.jpg/640px-Cheraw_dance%2C_Mizoram%2C_India.jpg" alt="Cheraw Bamboo Dance Mizoram" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Mizo_women_in_traditional_dress%2C_Chapchar_Kut.jpg/640px-Mizo_women_in_traditional_dress%2C_Chapchar_Kut.jpg" alt="Mizo Women Traditional Dress" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Bamboo_Handicrafts_from_Mizoram.jpg/640px-Bamboo_Handicrafts_from_Mizoram.jpg" alt="Mizoram Bamboo Handicrafts" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/View_from_Reiek_Peak%2C_Mizoram.jpg/640px-View_from_Reiek_Peak%2C_Mizoram.jpg" alt="Reiek Village Hut" loading="lazy"></div>
                 </div>
            </div>
         </div>
    </section>

    <!-- ============================ -->
    <!-- === PLAN YOUR VISIT (CTA) === -->
    <!-- ============================ -->
    <section class="sd-section sd-plan-visit state-hero-mizoram"> <!-- Reuse theme class -->
         <div class="container text-center">
              <h2 class="sd-section-title">Plan Your Visit to Mizoram</h2>
              <p class="sd-plan-text">
                 The best time to explore the scenic beauty of Mizoram is from <strong>October to May</strong>. Winter (November to February) offers pleasant, cool weather ideal for sightseeing and trekking. Spring (March to May) is also beautiful, coinciding with the Chapchar Kut festival (usually March). Avoid the monsoon (June-September) due to heavy rains.
              </p>
              <a href="packages.php?state=Mizoram" class="btn related-btn">Browse Mizoram Tour Packages</a>
         </div>
    </section>

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- Link Scripts -->
<script src="js/state-details-interactions.js"></script>
<script src="js/navbar.js"></script>

</body>
</html>