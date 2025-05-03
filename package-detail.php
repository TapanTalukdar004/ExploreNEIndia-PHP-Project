<?php
// You might want to fetch package data based on ID here if using a DB later,
// but for now, JavaScript will handle finding the data based on URL param.
$page_specific_css = 'css/package-detail.css'; // Path relative to header.php or web root
$page_title = "Package Details"; // Default title, JS will update it
include 'header.php'; // Includes your standard header/navbar
?>

<main id="package-detail-page"> <!-- Add ID for potential styling -->

    <!-- Hero Section -->
    <section id="pd-hero-section" class="pd-hero">
        <div class="container pd-hero-container">
            <!-- Left Side: Title, Info, Price, Button -->
            <div class="pd-hero-content">
                <div class="pd-breadcrumbs">
                    <a href="packages.php">Packages</a> / <span id="package-breadcrumb-title">Package Name</span>
                </div>
                <h1 id="package-title">Loading Package...</h1>
                <div class="pd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> <span id="package-state">State</span></span>
                    <span><i class="fas fa-calendar-alt icon"></i> <span id="package-duration">Duration</span></span>
                    <span><i class="fas fa-star icon"></i> <span id="package-rating">Rating</span>/5</span>
                </div>
                <div class="pd-hero-price-box">
                    <h2 id="package-price">₹ ---</h2>
                    <p>per person on twin sharing basis</p>
                </div>
                <button id="hero-book-now-btn" class="btn primary-btn hero-btn">Book Now</button>
            </div>
            <!-- Right Side: Image -->
            <div class="pd-hero-image-wrapper">
                <img id="package-image" src="placeholder-image.jpg" alt="Package Image" class="pd-hero-image">
                <div class="pd-hero-image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Section (Tabs & Sidebar) -->
    <section class="pd-main-content-section">
        <div class="container pd-main-layout">

            <!-- Left Column: Tabs -->
            <div class="pd-tabs-area">
                <!-- Tab Triggers -->
                <div class="pd-tabs-list">
                    <button class="pd-tab-trigger active" data-tab="overview">Overview</button>
                    <button class="pd-tab-trigger" data-tab="itinerary">Itinerary</button>
                    <button class="pd-tab-trigger" data-tab="accommodation">Accommodation</button>
                    <button class="pd-tab-trigger" data-tab="gallery">Gallery</button>
                </div>

                <!-- Tab Content Panels -->
                <div class="pd-tabs-content">
                    <!-- Overview Content -->
                    <div id="content-overview" class="pd-tab-content active">
                        <div class="pd-card">
                            <h2>Package Overview</h2>
                            <p id="package-description" class="pd-description">Loading description...</p>
                            <hr class="pd-separator">
                            <div class="pd-includes-excludes-grid">
                                <div>
                                    <h3>Package Includes</h3>
                                    <ul id="package-includes" class="pd-checklist includes">
                                        <li><i class="fas fa-check icon"></i> Loading...</li>
                                    </ul>
                                </div>
                                <div id="exclusions-section">
                                    <h3>Package Excludes</h3>
                                    <ul id="package-excludes" class="pd-checklist excludes">
                                         <li><i class="fas fa-times icon"></i> Loading...</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="pd-separator">
                            <div id="highlights-section">
                                <h3>Highlights</h3>
                                <ul id="package-highlights" class="pd-highlights-list">
                                    <li>Loading...</li>
                                </ul>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Destinations Covered</h3>
                                <div id="package-destinations" class="pd-destinations-tags">
                                    <span>Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Itinerary Content -->
                    <div id="content-itinerary" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Detailed Itinerary</h2>
                             <div id="itinerary-accordion" class="pd-accordion">
                                 <!-- Itinerary items will be loaded here -->
                                 <p>Loading itinerary...</p>
                             </div>
                             <div class="pd-notes-box">
                                 <h3>Important Notes</h3>
                                 <ul>
                                    <li>• Itinerary may change due to weather or local conditions.</li>
                                    <li>• Activities subject to availability; may require extra fees.</li>
                                    <li>• Inform us of dietary/special requirements.</li>
                                 </ul>
                             </div>
                         </div>
                    </div>

                    <!-- Accommodation Content -->
                    <div id="content-accommodation" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Accommodation Details</h2>
                             <div id="accommodation-details" class="pd-accommodation-grid">
                                 <!-- Specific hotels or generic info loaded here -->
                                 <p>Loading accommodation details...</p>
                             </div>
                             <hr class="pd-separator">
                             <h3>Accommodation Policy</h3>
                             <div class="pd-policy-list">
                                 <p>• Check-in: 2:00 PM, Check-out: 11:00 AM</p>
                                 <p>• Room upgrades subject to availability & charges</p>
                                 <p>• Early check-in/late check-out subject to availability</p>
                                 <p>• Based on twin-sharing basis</p>
                             </div>
                         </div>
                    </div>

                    <!-- Gallery Content -->
                    <div id="content-gallery" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Package Gallery</h2>
                             <div id="package-gallery-grid" class="pd-gallery-grid">
                                 <!-- Gallery images loaded here -->
                                  <p>Loading gallery...</p>
                             </div>
                         </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <aside class="pd-sidebar">
                <div class="pd-sidebar-sticky-wrapper">
                    <!-- Quick Booking Card -->
                    <div class="pd-sidebar-card">
                        <h3>Quick Booking</h3>
                        <p id="sidebar-price" class="pd-sidebar-price">₹ ---</p>
                        <p class="pd-sidebar-price-note">per person on twin sharing</p>
                        <button id="sidebar-book-now-btn" class="btn primary-btn full-width">Book Now</button>
                        <button class="btn outline-btn full-width">Send Inquiry</button>
                    </div>

                    <!-- Travel Info Card -->
                    <div class="pd-sidebar-card">
                        <h3>Travel Information</h3>
                        <div class="pd-sidebar-info-list">
                            <div>
                                <i class="fas fa-mountain icon"></i>
                                <div>
                                    <h4>Best Time to Visit</h4>
                                    <p id="sidebar-best-time">October to May</p>
                                </div>
                            </div>
                             <div>
                                <i class="fas fa-route icon"></i>
                                <div>
                                    <h4>Difficulty Level</h4>
                                    <p id="sidebar-difficulty">Easy to Moderate</p>
                                </div>
                            </div>
                             <div>
                                <i class="fas fa-language icon"></i>
                                <div>
                                    <h4>Languages</h4>
                                    <p id="sidebar-languages">English, Hindi, Local</p>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Why Choose Card -->
                    <div class="pd-sidebar-card">
                        <h3>Why Choose This Package</h3>
                         <ul class="pd-sidebar-why-list">
                            <li><i class="fas fa-check icon"></i> Expert local guides</li>
                            <li><i class="fas fa-check icon"></i> Selected accommodations</li>
                            <li><i class="fas fa-check icon"></i> Authentic experiences</li>
                            <li><i class="fas fa-check icon"></i> 24/7 customer support</li>
                            <li><i class="fas fa-check icon"></i> Customizable itinerary</li>
                        </ul>
                    </div>
                </div>
            </aside>

        </div>
    </section>

     <!-- FAQ Section -->
    <section class="pd-faq-section">
        <div class="container">
            <h2 class="pd-section-title">Frequently Asked Questions</h2>
            <div class="pd-faq-accordion pd-accordion">
                <!-- FAQ 1 -->
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">
                        What is the booking process?
                        <i class="fas fa-chevron-down icon"></i>
                    </button>
                    <div class="pd-accordion-content">
                        <p>Click "Book Now", fill details. Our team contacts you in 24h to confirm & provide payment instructions.</p>
                    </div>
                </div>
                 <!-- FAQ 2 -->
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">
                        Is there a cancellation policy?
                         <i class="fas fa-chevron-down icon"></i>
                    </button>
                    <div class="pd-accordion-content">
                        <p>Yes. 30+ days prior: 90% refund. 15-30 days: 50% refund. Less than 15 days: Non-refundable. (Policy may vary slightly).</p>
                    </div>
                </div>
                 <!-- FAQ 3 -->
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">
                        Can the itinerary be customized?
                         <i class="fas fa-chevron-down icon"></i>
                    </button>
                    <div class="pd-accordion-content">
                        <p>Yes, absolutely! Contact our travel consultants to discuss your preferences for a tailor-made experience.</p>
                    </div>
                </div>
                 <!-- FAQ 4 -->
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">
                        What should I pack?
                         <i class="fas fa-chevron-down icon"></i>
                    </button>
                    <div class="pd-accordion-content">
                        <p>Comfortable walking shoes, layered clothing, rainwear (essential for NE!), sunscreen, insect repellent, hat, personal medications. Detailed list provided post-booking.</p>
                    </div>
                </div>
                <!-- Add more FAQs as needed -->
            </div>
        </div>
    </section>

    <!-- Related Packages Section -->
    <section id="pd-related-section" class="pd-related-packages">
         <div class="container text-center">
              <h2 class="pd-section-title">Related Packages</h2>
              <p id="related-packages-subtitle">Discover more amazing adventures!</p>
              <a href="packages.php" class="btn related-btn">Explore All Packages</a>
         </div>
    </section>


</main>

<?php // include 'footer.php'; // Add footer include if you have one ?>

<!-- Link JavaScript -->
<script src="js/packagesData.js"></script> <!-- Separate file for data -->
<script src="js/package-detail.js"></script>
<script src="js/navbar.js"></script> <!-- For sticky navbar -->

</body>
</html>