<?php
// File: assam.php

// Define page specifics BEFORE including the header
$page_title = "Explore Assam - Gateway to the Northeast";
$page_specific_css = 'css/state-details-static.css'; // Link the NEW static CSS

// Define state theme class for CSS targeting
$body_class = "state-theme-assam";

include 'header.php'; // Include header
?>

<main id="state-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- ========================== -->
    <!-- ===    HERO SECTION    === -->
    <!-- ========================== -->
    <section class="sd-hero state-hero-assam"> <!-- Use theme class for bg -->
        <div class="container sd-hero-container">
            <div class="sd-hero-content">
                <div class="sd-breadcrumbs">
                    <a href="destinations.php">Destinations</a> / <span>Assam</span>
                </div>
                <h1>Assam</h1>
                <div class="sd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Capital: Dispur</span>
                    <span><i class="fas fa-calendar-alt icon"></i> Best Time: October to May</span>
                </div>
                <p class="sd-hero-description">
                    Known as the land of tea gardens and the mighty Brahmaputra river, Assam serves as the vibrant gateway to Northeast India, rich in wildlife and unique cultural heritage.
                </p>
                 <a href="#assam-packages" class="btn sd-hero-cta">View Assam Packages</a>
            </div>
            <div class="sd-hero-image-wrapper">
                <!-- Specific Assam Image -->
                <img src="images/Assam-slide.jpg" alt="Assam Tea Gardens" class="sd-hero-image">
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
                    <i class="fas fa-leaf icon"></i> <!-- Tea Icon -->
                    <span>Tea Gardens</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-paw icon"></i> <!-- Wildlife Icon -->
                    <span>Kaziranga (Rhinos)</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-water icon"></i> <!-- River/Island Icon -->
                    <span>Majuli Island</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-gopuram icon"></i> <!-- Temple Icon -->
                    <span>Kamakhya Temple</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- === POPULAR DESTINATIONS === -->
    <!-- ============================== -->
    <section class="sd-section sd-popular-destinations">
        <div class="container">
            <h2 class="sd-section-title">Popular Destinations in Assam</h2>

            <!-- Destination 1: Kaziranga -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/1.jpg" alt="Kaziranga National Park Rhino" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Kaziranga National Park</h3>
                    <p>Home to the iconic one-horned rhinoceros, this UNESCO World Heritage site offers thrilling jeep and elephant safaris amidst grasslands teeming with wildlife, including tigers, elephants, and diverse bird species.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Jeep Safari (Western/Central/Eastern Range)</li>
                        <li>Elephant Safari (Central Range)</li>
                        <li>Kaziranga Orchid Park</li>
                        <li>Nearby Tea Gardens</li>
                    </ul>
                     <!-- Link to a future kaziranga.php page -->
                    <a href="kaziranga.php" class="btn outline-btn sd-explore-btn">Explore Kaziranga</a>
                </div>
            </div>

             <!-- Destination 2: Majuli -->
            <div class="sd-destination-row row-reverse"> <!-- Note the row-reverse class -->
                 <div class="sd-destination-image">
                    <img src="images/2-5.jpg" alt="Majuli Island Satra" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Majuli Island</h3>
                    <p>The world's largest river island, Majuli is a unique hub of Assamese Neo-Vaishnavite culture. Explore ancient Satras (monasteries), witness traditional mask-making, and experience serene rural life on the Brahmaputra.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Auniati & Kamalabari Satras</li>
                        <li>Samaguri Satra (Mask Making)</li>
                        <li>Sunset over the Brahmaputra</li>
                        <li>Tribal Village Exploration</li>
                    </ul>
                    <!-- Link to a future majuli.php page -->
                    <a href="majuli.php" class="btn outline-btn sd-explore-btn">Explore Majuli</a>
                </div>
            </div>

             <!-- Add more destinations within Assam if needed -->

        </div>
    </section>

    <!-- ============================ -->
    <!-- === RECOMMENDED PACKAGES === -->
    <!-- ============================ -->
    <section id="assam-packages" class="sd-section sd-related-packages state-hero-assam"> <!-- Reuse theme class -->
        <div class="container">
             <h2 class="sd-section-title">Recommended Assam Packages</h2>
             <div class="sd-packages-grid"> <!-- Or use a carousel structure if preferred -->

                <!-- Package Card 1: Assam Wildlife -->
                <div class="sd-package-card"> <!-- Re-use package card styling if possible -->
                     <div class="sd-pkg-image">
                        <img src="images/6.jpg" alt="Assam Wildlife Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">5 Days / 4 Nights</span>
                        <h3>Assam Wildlife & Culture</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.7
                        </div>
                        <p>Focus on Kaziranga's rhinos and Majuli's unique island culture.</p>
                        <div class="sd-pkg-price">From ₹22,999</div>
                        <a href="assam-wildlife.php" class="btn primary-btn sd-pkg-btn">View Details</a>
                     </div>
                 </div>

                <!-- Add more Assam-specific package cards here if available -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/tea.webp" alt="Assam Tea Trail" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">4 Days / 3 Nights</span>
                        <h3>Assam Tea Trail</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.5
                        </div>
                        <p>Explore lush tea estates, stay in heritage bungalows, enjoy tea tasting.</p>
                        <div class="sd-pkg-price">From ₹18,500</div>
                        <a href="assam-tea-trail.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

             </div>
              <div class="sd-view-all-btn-container">
                 <a href="packages.php?state=Assam" class="btn related-btn">View All Assam Packages</a> <!-- Link to filtered packages -->
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
                    <h2 class="sd-section-title text-left">Cultural Heritage of Assam</h2>
                    <p>Assam boasts a rich tapestry of cultures, influenced by various ethnic groups like the Bodos, Mishings, and Ahoms. It's renowned for its vibrant Bihu dance, intricate silk weaving (Muga, Eri, Pat), unique Vaishnavite traditions centered around the Satras of Majuli, and the powerful Shakti Peeth of Kamakhya Temple.</p>
                    <p>The state's history is marked by the powerful Ahom kingdom, leaving behind impressive architectural remnants. Assamese cuisine, with its distinct use of herbs, bamboo shoots, and fish, offers a unique culinary experience.</p>
                    <a href="#assam-packages" class="btn outline-btn">Explore Cultural Experiences</a>
                </div>
                <div class="sd-heritage-images"> <!-- Reuse styling from about-ne-images -->
                     <div class="about-ne-img-item"><img src="images/bihu.jpg" alt="Bihu Dance" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/muga.jpg" alt="Muga Silk Worms" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/2.jpg" alt="Kamakhya Temple" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/2-5.jpg" alt="Majuli Satra Art" loading="lazy"></div>
                 </div>
            </div>
         </div>
    </section>

    <!-- ============================ -->
    <!-- === PLAN YOUR VISIT (CTA) === -->
    <!-- ============================ -->
    <section class="sd-section sd-plan-visit state-hero-assam"> <!-- Reuse theme class -->
         <div class="container text-center">
              <h2 class="sd-section-title">Plan Your Visit to Assam</h2>
              <p class="sd-plan-text">
                The best time to visit Assam is generally from <strong>October to May</strong>, offering pleasant weather for wildlife safaris, exploring tea gardens, and visiting cultural sites. Avoid the heavy monsoon season (June-September).
              </p>
              <a href="packages.php?state=Assam" class="btn related-btn">Browse Assam Tour Packages</a>
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