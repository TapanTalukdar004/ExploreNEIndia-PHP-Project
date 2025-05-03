<?php
// File: sikkim.php

// Define page specifics BEFORE including the header
$page_title = "Explore Sikkim - Himalayan Wonderland";
$page_specific_css = 'css/state-details-static.css'; // Link the SHARED static CSS

// Define state theme class for CSS targeting
$body_class = "state-theme-sikkim";

include 'header.php'; // Include header
?>

<main id="state-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- ========================== -->
    <!-- ===    HERO SECTION    === -->
    <!-- ========================== -->
    <section class="sd-hero state-hero-sikkim"> <!-- Use theme class -->
        <div class="container sd-hero-container">
            <div class="sd-hero-content">
                <div class="sd-breadcrumbs">
                    <a href="destinations.php">Destinations</a> / <span>Sikkim</span>
                </div>
                <h1>Sikkim</h1>
                <div class="sd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Capital: Gangtok</span>
                    <span><i class="fas fa-calendar-alt icon"></i> Best Time: Mar-Jun & Sep-Dec</span>
                </div>
                <p class="sd-hero-description">
                    Experience the Himalayan wonderland of Sikkim, renowned for its breathtaking views of Mt. Kanchenjunga, serene Buddhist monasteries, vibrant culture, high-altitude lakes, and thrilling adventure opportunities.
                </p>
                 <a href="#sikkim-packages" class="btn sd-hero-cta">View Sikkim Packages</a>
            </div>
            <div class="sd-hero-image-wrapper">
                <!-- Specific Sikkim Image -->
                <img src="images/sik.jpeg" alt="Sikkim Monastery and Mountains" class="sd-hero-image">
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
                    <i class="fas fa-mountain icon"></i> <!-- Mountain Icon -->
                    <span>Mt. Kanchenjunga Views</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-gopuram icon"></i> <!-- Monastery Icon -->
                    <span>Buddhist Monasteries</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-hiking icon"></i> <!-- Trekking/Adventure Icon -->
                    <span>Adventure Tourism</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-leaf icon"></i> <!-- Nature/Organic Icon -->
                    <span>Organic Farming & Flora</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- === POPULAR DESTINATIONS === -->
    <!-- ============================== -->
    <section class="sd-section sd-popular-destinations">
        <div class="container">
            <h2 class="sd-section-title">Popular Destinations in Sikkim</h2>

            <!-- Destination 1: Gangtok -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/gangtok.jpg" alt="Gangtok City View" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Gangtok</h3>
                    <p>The clean and vibrant capital city offering panoramic Himalayan views. Explore monasteries like Rumtek and Enchey, stroll along the vehicle-free MG Marg, visit viewpoints like Hanuman Tok and Tashi Viewpoint, and enjoy the lively atmosphere.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Rumtek Monastery (or Enchey Monastery)</li>
                        <li>MG Marg (Mall Road)</li>
                        <li>Hanuman Tok & Ganesh Tok</li>
                        <li>Tashi Viewpoint</li>
                        <li>Flower Exhibition Centre (Seasonal)</li>
                        <li>Namgyal Institute of Tibetology</li>
                    </ul>
                     <!-- Link to a future gangtok.php page -->
                    <a href="gangtok.php" class="btn outline-btn sd-explore-btn">Explore Gangtok</a>
                </div>
            </div>

             <!-- Destination 2: Tsomgo Lake & Nathula -->
            <div class="sd-destination-row row-reverse">
                 <div class="sd-destination-image">
                    <img src="images/sikkim-slides.jpg" alt="Tsomgo Lake Sikkim" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Tsomgo Lake & Nathula Pass</h3>
                    <p>Embark on an excursion to the stunning high-altitude glacial Tsomgo Lake (Changu Lake). Visit the sacred Baba Mandir nearby. Optionally, continue to Nathula Pass on the Indo-China border (subject to permits and conditions) for a unique experience.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Tsomgo Lake (Changu Lake)</li>
                        <li>Baba Harbhajan Singh Mandir</li>
                        <li>Yak Rides (at Tsomgo)</li>
                        <li>Nathula Pass (Optional/Permit Req.)</li>
                    </ul>
                    <!-- Link could go to a generic East Sikkim page or package -->
                    <a href="east-sikkim-excursion.php" class="btn outline-btn sd-explore-btn">Explore Excursions</a>
                </div>
            </div>

             <!-- Destination 3: Pelling -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/pel.png" alt="Pelling Kanchenjunga View" loading="lazy"> <!-- Placeholder Image -->
                </div>
                <div class="sd-destination-content">
                    <h3>Pelling & West Sikkim</h3>
                    <p>Located in West Sikkim, Pelling offers arguably the best close-up views of Mount Kanchenjunga. Explore the serene Pemayangtse Monastery, walk to the Rabdentse Ruins (former capital), see the Khecheopalri Lake (Wishing Lake), and visit nearby waterfalls.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Kanchenjunga Viewpoints</li>
                        <li>Pemayangtse Monastery</li>
                        <li>Rabdentse Ruins</li>
                        <li>Khecheopalri Lake</li>
                        <li>Kanchenjunga Falls & Rimbi Falls</li>
                    </ul>
                    <!-- Link to a future pelling.php page -->
                    <a href="pelling.php" class="btn outline-btn sd-explore-btn">Explore Pelling</a>
                </div>
            </div>

             <!-- Destination 4: Lachung/Yumthang (North Sikkim) -->
            <div class="sd-destination-row row-reverse">
                 <div class="sd-destination-image">
                    <img src="images/8-5.jpg" alt="Yumthang Valley Sikkim" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Lachung & Yumthang Valley</h3>
                    <p>Venture into North Sikkim (requires permits) to the picturesque village of Lachung. Explore the stunning Yumthang Valley, known as the 'Valley of Flowers' (blooms in spring), visit hot springs, and optionally travel to Zero Point (Yumesamdong) for snow views.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Yumthang Valley</li>
                        <li>Lachung Village & Monastery</li>
                        <li>Yumesamdong / Zero Point (Optional)</li>
                        <li>Hot Springs at Yumthang</li>
                        <li>Scenic Drive through North Sikkim</li>
                    </ul>
                    <!-- Link could go to North Sikkim package or page -->
                    <a href="north-sikkim.php" class="btn outline-btn sd-explore-btn">Explore North Sikkim</a>
                </div>
            </div>


        </div>
    </section>

    <!-- ============================ -->
    <!-- === RECOMMENDED PACKAGES === -->
    <!-- ============================ -->
    <section id="sikkim-packages" class="sd-section sd-related-packages state-hero-sikkim"> <!-- Reuse theme class -->
        <div class="container">
             <h2 class="sd-section-title">Recommended Sikkim Packages</h2>
             <div class="sd-packages-grid">

                <!-- Package Card 1: Sikkim Himalayan Explorer -->
                <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/sikkim-slides.jpg" alt="Sikkim Himalayan Explorer Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">7 Days / 6 Nights</span>
                        <h3>Sikkim Himalayan Explorer</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.9
                        </div>
                        <p>Comprehensive tour covering Gangtok, Tsomgo Lake, Nathula & North Sikkim (Yumthang).</p>
                        <div class="sd-pkg-price">From ₹29,999</div>
                        <a href="sikkim-adventure.php" class="btn primary-btn sd-pkg-btn">View Details</a>
                     </div>
                 </div>

                <!-- Package Card 2: Gangtok & Pelling -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/pel.png" alt="Gangtok Pelling Tour" loading="lazy"> <!-- Placeholder -->
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">5 Days / 4 Nights</span>
                        <h3>Gangtok & Pelling Delight</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.6
                        </div>
                        <p>Focuses on the capital city and the stunning Kanchenjunga views from Pelling.</p>
                        <div class="sd-pkg-price">From ₹21,500</div>
                        <a href="gangtok-pelling.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                 <!-- Package Card 3: North Sikkim Focus -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/head3.jpg" alt="North Sikkim Tour" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">4 Days / 3 Nights (Ex-Gangtok)</span>
                        <h3>Enchanting North Sikkim</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.8
                        </div>
                        <p>Dedicated trip to Lachung, Yumthang Valley, and potentially Zero Point.</p>
                        <div class="sd-pkg-price">From ₹16,000</div>
                        <a href="north-sikkim-focus.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

             </div>
              <div class="sd-view-all-btn-container">
                 <a href="packages.php?state=Sikkim" class="btn related-btn">View All Sikkim Packages</a>
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
                    <h2 class="sd-section-title text-left">Cultural Heritage of Sikkim</h2>
                    <p>Sikkim's culture is a beautiful blend primarily influenced by its Nepali majority, alongside the indigenous Lepchas and Bhutias (of Tibetan ancestry). Tibetan Buddhism (Vajrayana school) is prominent, reflected in the numerous colourful monasteries like Rumtek and Pemayangtse, which host vibrant festivals like Losar (Tibetan New Year) and Saga Dawa.</p>
                    <p>Nepali traditions contribute festivals like Dashain and Tihar. The Lepchas have their own unique customs and nature-centric beliefs. This amalgamation results in rich traditions of mask dances, thangka painting, intricate handicrafts (carpets, wooden masks), unique cuisine (momos, thukpa, gundruk), and warm hospitality.</p>
                    <a href="#sikkim-packages" class="btn outline-btn">Explore Cultural Experiences</a>
                </div>
                <div class="sd-heritage-images">
                     <div class="about-ne-img-item"><img src="images/sik.jpeg" alt="Rumtek Monastery Monks" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/dress.jpg" alt="Sikkimese Traditional Dress" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/wheel.jpg" alt="Prayer Wheels Sikkim" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/mask.jpg" alt="Sikkim Mask Dance" loading="lazy"></div>
                 </div>
            </div>
         </div>
    </section>

    <!-- ============================ -->
    <!-- === PLAN YOUR VISIT (CTA) === -->
    <!-- ============================ -->
    <section class="sd-section sd-plan-visit state-hero-sikkim"> <!-- Reuse theme class -->
         <div class="container text-center">
              <h2 class="sd-section-title">Plan Your Visit to Sikkim</h2>
              <p class="sd-plan-text">
                The best seasons to visit Sikkim are Spring (<strong>March to June</strong>) for pleasant weather and blooming flowers (especially rhododendrons in Yumthang), and Autumn (<strong>September to December</strong>) for clear skies and excellent mountain views. Winter (Jan-Feb) is cold with potential snowfall at higher altitudes. Monsoon (July-August) sees heavy rain and potential landslides.
              </p>
              <a href="packages.php?state=Sikkim" class="btn related-btn">Browse Sikkim Tour Packages</a>
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