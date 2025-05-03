<?php
// File: WhyUs.php

// Define page specifics BEFORE including the header
$page_title = "Why Choose TripNE - Northeast India Experts";
$page_specific_css = 'css/why-us.css'; // Link the NEW specific CSS

// Optional: Define a theme class if needed, or use default
// $body_class = "theme-default";

include 'header.php'; // Include header (make sure path is correct)
?>

<main id="why-us-page">

    <!-- Page Header Section -->
    <section class="page-header why-us-header-bg"> <!-- Use specific class for bg -->
        <div class="container text-center">
            <h1 class="page-title">Why Choose TripNE</h1>
            <p class="page-subtitle">
                Discover why we're the trusted name in Northeast India tourism
            </p>
        </div>
    </section>

    <!-- Feature Cards Section -->
    <section class="wu-section wu-features-section">
        <div class="container">
            <div class="wu-grid wu-grid-3"> <!-- 3 columns -->

                <!-- Feature Card 1: Local Expertise -->
                <div class="wu-feature-card">
                    <div class="wu-feature-icon-wrapper">
                        <i class="fas fa-compass wu-feature-icon"></i>
                    </div>
                    <h3 class="wu-feature-title">Local Expertise</h3>
                    <p class="wu-feature-description">
                        Our team consists of local experts who have grown up in Northeast India and know the region inside out. From hidden gems to the best times to visit, we provide insider knowledge.
                    </p>
                </div>

                <!-- Feature Card 2: Award-Winning -->
                <div class="wu-feature-card">
                     <div class="wu-feature-icon-wrapper">
                        <i class="fas fa-trophy wu-feature-icon"></i>
                    </div>
                    <h3 class="wu-feature-title">Award-Winning Service</h3>
                    <p class="wu-feature-description">
                        With multiple tourism excellence awards, we pride ourselves on exceptional service, attention to detail, and customer satisfaction, making us top-rated for the Northeast.
                    </p>
                </div>

                <!-- Feature Card 3: Community-Based -->
                <div class="wu-feature-card">
                     <div class="wu-feature-icon-wrapper">
                        <i class="fas fa-users wu-feature-icon"></i>
                    </div>
                    <h3 class="wu-feature-title">Community-Based Tourism</h3>
                    <p class="wu-feature-description">
                        We partner with local communities for authentic experiences that benefit residents. Choosing us supports sustainable tourism preserving cultures and environments.
                    </p>
                </div>

                <!-- Feature Card 4: Safe & Secure -->
                <div class="wu-feature-card">
                     <div class="wu-feature-icon-wrapper">
                        <i class="fas fa-shield-alt wu-feature-icon"></i> <!-- fas fa-shield-alt -->
                    </div>
                    <h3 class="wu-feature-title">Safe & Secure Travel</h3>
                    <p class="wu-feature-description">
                        Your safety is priority. We follow strict protocols, use reliable partners, offer insurance options, and have trained staff for emergency response.
                    </p>
                </div>

                <!-- Feature Card 5: Personalized -->
                <div class="wu-feature-card">
                     <div class="wu-feature-icon-wrapper">
                        <i class="fas fa-heart wu-feature-icon"></i>
                    </div>
                    <h3 class="wu-feature-title">Personalized Experiences</h3>
                    <p class="wu-feature-description">
                        Every traveler is unique. We offer customizable itineraries tailored to your interests, budget, and travel style, creating your perfect journey.
                    </p>
                </div>

                 <!-- Feature Card 6: 24/7 Support -->
                <div class="wu-feature-card">
                     <div class="wu-feature-icon-wrapper">
                        <i class="fas fa-headphones-alt wu-feature-icon"></i> <!-- fas fa-headphones-alt -->
                    </div>
                    <h3 class="wu-feature-title">24/7 Support</h3>
                    <p class="wu-feature-description">
                        Travel with peace of mind knowing our dedicated support team is available round-the-clock from booking until your return home.
                    </p>
                </div>

            </div> <!-- End wu-grid -->
        </div> <!-- End container -->
    </section>

    <!-- Testimonials Section -->
    <section class="wu-section wu-testimonials-section">
        <div class="container">
            <h2 class="wu-section-title">What Our Travelers Say</h2>
            <div class="wu-grid wu-grid-3">

                <!-- Testimonial 1 -->
                <div class="wu-testimonial-card">
                    <div class="wu-testimonial-header">
                        <img src="https://randomuser.me/api/portraits/women/67.jpg" alt="Sarah Johnson" class="wu-testimonial-avatar">
                        <div>
                            <h4 class="wu-testimonial-name">Sarah Johnson</h4>
                            <div class="wu-testimonial-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="wu-testimonial-text">
                        "Our trip to Meghalaya was absolutely magical thanks to TripNE. The living root bridges, crystal-clear rivers, and local homestays were unforgettable. Our guide was knowledgeable and friendly..."
                    </p>
                </div>

                 <!-- Testimonial 2 -->
                <div class="wu-testimonial-card">
                    <div class="wu-testimonial-header">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="wu-testimonial-avatar">
                         <div>
                            <h4 class="wu-testimonial-name">Michael Chen</h4>
                            <div class="wu-testimonial-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="wu-testimonial-text">
                        "As a wildlife photographer, I was amazed by the Kaziranga safari experience arranged by TripNE. Spotted numerous rhinos and even tigers! The team went above and beyond..."
                    </p>
                </div>

                 <!-- Testimonial 3 -->
                <div class="wu-testimonial-card">
                    <div class="wu-testimonial-header">
                        <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Priya Sharma" class="wu-testimonial-avatar">
                         <div>
                            <h4 class="wu-testimonial-name">Priya Sharma</h4>
                            <div class="wu-testimonial-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="wu-testimonial-text">
                        "I traveled solo to Arunachal Pradesh and felt completely safe. TripNE handled all permits and logistics seamlessly, and the cultural experiences were authentic and respectful."
                    </p>
                </div>

            </div> <!-- End wu-grid -->
        </div> <!-- End container -->
    </section>

    <!-- Booking Process Section -->
    <section class="wu-section wu-process-section">
        <div class="container">
            <h2 class="wu-section-title">Our Booking Process</h2>
            <div class="wu-process-steps">

                <!-- Step 1 -->
                <div class="wu-process-step">
                    <div class="wu-process-number">1</div>
                    <div class="wu-process-text">
                        <h3>Initial Consultation</h3>
                        <p>We start by understanding your travel preferences, interests, budget, and timeline.</p>
                    </div>
                </div>

                 <!-- Step 2 -->
                 <div class="wu-process-step">
                    <div class="wu-process-number">2</div>
                    <div class="wu-process-text">
                        <h3>Customized Itinerary</h3>
                        <p>Our experts craft a personalized travel plan showcasing the best of the Northeast.</p>
                    </div>
                </div>

                 <!-- Step 3 -->
                 <div class="wu-process-step">
                    <div class="wu-process-number">3</div>
                    <div class="wu-process-text">
                        <h3>Refinement & Confirmation</h3>
                        <p>We fine-tune the itinerary based on your feedback and confirm with secure payment.</p>
                    </div>
                </div>

                 <!-- Step 4 -->
                 <div class="wu-process-step">
                    <div class="wu-process-number">4</div>
                    <div class="wu-process-text">
                        <h3>Seamless Travel Experience</h3>
                        <p>Enjoy your adventure with pre-arranged logistics and 24/7 support.</p>
                    </div>
                </div>

            </div> <!-- End wu-process-steps -->
        </div> <!-- End container -->
    </section>

    <!-- Call to Action (CTA) Section -->
    <section class="wu-section wu-cta-section">
        <div class="container text-center">
            <h2 class="wu-cta-title">Ready to Explore Northeast India?</h2>
            <p class="wu-cta-text">
                Let us create your perfect Northeast adventure filled with unforgettable experiences and authentic cultural encounters.
            </p>
            <a href="packages.php" class="btn wu-cta-button">Browse Our Packages</a> <!-- Link to packages -->
        </div>
    </section>

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- Link Global/Navbar JS -->
<script src="js/navbar.js"></script>
<!-- No page-specific JS needed for this static page -->

</body>
</html>