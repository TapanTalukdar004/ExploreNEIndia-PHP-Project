<?php
// Start the session FIRST
session_start();

// Check if user is logged in by checking session variables
$is_logged_in = isset($_SESSION['user_id']) && isset($_SESSION['username']);
if ($is_logged_in) {
    $username = $_SESSION['username']; // Get username if logged in
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripNE - Explore Northeast India</title>
    <!-- Link Universal CSS -->
    <link rel="stylesheet" href="css/universal.css">
    <!-- Link Page-Specific CSS (Link all for this example, or dynamically load) -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about-8states.css">
    <link rel="stylesheet" href="css/destinations.css">
    <link rel="stylesheet" href="css/about-guide.css">
    <link rel="stylesheet" href="css/packages.css">
    <link rel="stylesheet" href="css/contact.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Remove this inline style for production -->
    <style>
        .blank {
            height: 100vh;
            background-color: aliceblue;
            /* Just for spacing visualization */
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>
    <!-- Main Content Wrapper (Recommended) -->
    <!-- <main> -->

    <!-- Hero Section (Home): ID matches nav link -->
    <section id="home" class="hero">
        <!-- Overlay div for background dimming/effects -->
        <div class="overlay"></div>
        <!-- Content container for text and button -->
        <div class="hero-content">
            <h1>EXPLORE NORTHEAST INDIA</h1>

            <p>
                <span class="para1">WANDER <span class="highlight-yellow">MORE</span></span>
                <!-- Add some space between the phrases -->
                <span class="para2">SPEND <span class="highlight-blue">LESS</span></span>
            </p>

            <button class="explore-btn"><a href="packages.php">EXPLORE PACKAGES</a></button>
        </div>
    </section>
    <!-- Northeast States Section -->
    <section id="northeast-states" class="states-section">
        <div class="container">
            <div class="states-content">

                <!-- Left Side: Text Content -->
                <div class="states-text-content">
                    <h2 class="states-title">Explore the Eight Jewels:<br><span>Seven Sisters & One Brother</span></h2>
                    <p class="states-intro">
                        Discover the unique charm of Northeast India, a region encompassing eight distinct states. Often
                        called the "Seven Sisters" along with their "brother" state Sikkim, each offers a vibrant
                        tapestry of culture, breathtaking landscapes, and unforgettable adventures.
                    </p>
                    <ul class="states-list">
                        <li><strong>Arunachal Pradesh:</strong> Land of the Dawn-Lit Mountains</li>
                        <li><strong>Assam:</strong> Home of the One-Horned Rhino & Tea Gardens</li>
                        <li><strong>Manipur:</strong> The Jeweled Land</li>
                        <li><strong>Meghalaya:</strong> Abode of Clouds</li>
                        <li><strong>Mizoram:</strong> Land of the Highlanders</li>
                        <li><strong>Nagaland:</strong> Land of Festivals</li>
                        <li><strong>Tripura:</strong> Princely State with Rich History</li>
                        <li><strong>Sikkim (Brother):</strong> Himalayan Wonderland</li>
                    </ul>
                </div>

                <!-- Right Side: Image Slideshow -->
                <div class="states-image-slideshow">
                    <!-- Add 8 images, one for each state -->
                    <img src="images/AP-slide.jpg" alt="Scenic mountain landscape in Arunachal Pradesh"
                        class="slideshow-image">
                    <img src="images/Assam-slide.jpg" alt="Tea gardens stretching across hills in Assam"
                        class="slideshow-image">
                    <img src="images/manipur-slide.jpg" alt="Loktak Lake with floating phumdis in Manipur"
                        class="slideshow-image">
                    <img src="images/meghalaya-slide.jpg" alt="Living root bridge in Meghalaya" class="slideshow-image">
                    <img src="images/mizoram-slide.webp" alt="View over rolling hills in Mizoram"
                        class="slideshow-image">
                    <img src="images/nagaland-slide.webp"
                        alt="Naga tribespeople in traditional attire during a festival" class="slideshow-image">
                    <img src="images/tripura-slides.jpg" alt="Ujjayanta Palace in Agartala, Tripura"
                        class="slideshow-image">
                    <img src="images/sikkim-slides.jpg" alt="Monastery with Kanchenjunga peak in the background, Sikkim"
                        class="slideshow-image">
                    <!-- Ensure you have these images in your images folder -->
                </div>

            </div>
        </div>
    </section>
    <!-- End Northeast States Section -->
    <!-- Blank Section: Temporary spacer -->


    <!-- Destinations Section: ID matches nav link -->
    <section id="destinations" class="destinations">
        <!-- Removed <div class="overlay1"></div> as CSS was commented out -->
        <h1 class="page-title">POPULAR DESTINATIONS</h1>
        <p class="destination-quote">"Discover the unseen beauty and diverse cultures of Northeast India. Your next
            adventure awaits!"</p>
        <!-- Container for the horizontally scrolling destination cards -->
        <div class="destinations-container">
            <!-- Individual destination card -->
            <div class="destination-card">
                <img src="images/mizoram.jpg" alt="Mizoram">
                <h3>MIZORAM</h3>
                <!-- Button Added for interaction (hidden by default via CSS) -->
                <button class="explore-button">Explore</button>
            </div>
            <div class="destination-card">
                <img src="images/ap2.jpg" alt="Arunachal Pradesh">
                <h3>ARUNACHAL PRADESH</h3>
                <button class="explore-button">Explore</button>
            </div>
            <!-- ... other destination cards ... -->
            <div class="destination-card"><img src="images/assam.jpg" alt="Assam">
                <h3>ASSAM</h3> <button class="explore-button">Explore</button>
            </div>
            <div class="destination-card"><img src="images/meghalaya.jpg" alt="Meghalaya">
                <h3>MEGHALAYA</h3> <button class="explore-button">Explore</button>
            </div>
            <div class="destination-card"><img src="images/Dzukovalley.jpg" alt="Nagaland">
                <h3>NAGALAND</h3> <button class="explore-button">Explore</button>
            </div>
            <div class="destination-card"><img src="images/sikkim.jpg" alt="Sikkim">
                <h3>SIKKIM</h3> <button class="explore-button">Explore</button>
            </div>
            <div class="destination-card"><img src="images/Manipur.webp" alt="Manipur">
                <h3>MANIPUR</h3> <button class="explore-button">Explore</button>
            </div>
            <div class="destination-card"><img src="images/Ujjayanta-Palace.jpg" alt="Tripura">
                <h3>TRIPURA</h3> <button class="explore-button">Explore</button>
            </div>
        </div>
    </section>

    <!-- Blank Section: Temporary spacer -->
    <!-- About / Guide Section -->
    <section id="about-guide" class="about-guide-section">
        <div class="container">
            <div class="about-guide-content">

                <!-- Left Side: Text Content -->
                <div class="about-text-content">
                    <h2 class="guide-title">Discover the Northeast India with our <span>Guide</span></h2>
                    <div class="features-list">
                        <!-- Feature 1: Local Support -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i> <!-- Font Awesome Icon -->
                            </div>
                            <div class="feature-text">
                                <h4>Genuine Local Support</h4>
                                <p>Connect with local communities and guides for authentic experiences and support.</p>
                            </div>
                        </div>
                        <!-- Feature 2: Accommodation -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-hotel"></i> <!-- Font Awesome Icon -->
                            </div>
                            <div class="feature-text">
                                <h4>Best Hotels & Lodges</h4>
                                <p>Access curated recommendations for comfortable stays, from luxury resorts to cozy
                                    homestays.</p>
                            </div>
                        </div>
                        <!-- Feature 3: Hidden Gems -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-map-marked-alt"></i> <!-- Font Awesome Icon -->
                            </div>
                            <div class="feature-text">
                                <h4>Explore Unknown Locations</h4>
                                <p>Venture beyond the typical tourist spots to uncover hidden waterfalls, villages, and
                                    viewpoints.</p>
                            </div>
                        </div>
                        <!-- Feature 4: Custom Itineraries -->
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-route"></i> <!-- Font Awesome Icon -->
                            </div>
                            <div class="feature-text">
                                <h4>Tailored Itineraries</h4>
                                <p>Get personalized travel plans designed around your interests, budget, and travel
                                    style.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Image -->
                <div class="about-image-content">
                    <img src="images/guide.jpg" alt="Scenic view of Northeast India landscape with mountains and river"
                        class="guide-image">
                    <!-- Make sure you have an image at 'images/northeast-guide.jpg' -->
                </div>

            </div>
        </div>
    </section>
    <!-- End About / Guide Section -->

    <!-- Packages Section: ID matches nav link -->
    <section id="packages" class="packages">
        <h1 class="page-title">POPULAR PACKAGES</h1>
        <p class="destination-quote">"Embark on curated journeys through the heart of Northeast India - experiences
            crafted for memories that last a lifetime."</p>
        <!-- Container for the package cards -->
        <div class="packages-container">
            <!-- Individual package card -->
            <div class="package-card">
                <div class="package-image-container">
                    <img src="images/dawki.jpg" alt="Meghalaya Package">
                    <span class="duration-tag">6 Day Tour</span>
                </div>
                <div class="package-content">
                    <!-- Added span for state -->
                    <span class="package-state">Meghalaya</span>
                    <!-- Title (CSS targets h2 or needs class change) -->
                    <h2>Meghalaya Adventure Explorer</h2>
                    <!-- Description -->
                    <p class="package-description">Explore the magical land of clouds. Trek to living root bridges, swim in crystal clear rivers, experience Khasi culture.</p>
                    <!-- Pricing -->
                    <div class="package-pricing"><span>₹29,999 per person on twin sharing</span></div>
                    <!-- Button -->
                    <button class="explore-package-btn"><a href="meghalaya-adventure.php">Explore</a></button>
                </div>
            </div>
            <!-- ... other package cards ... -->
            <div class="package-card">
                <div class="package-image-container">
                    <img src="images/Kaziranga-National-Park.jpg" alt="Assam Package">
                    <span class="duration-tag">5 Day Tour</span>
                </div>
                <div class="package-content">
                    <span class="package-state">Assam</span>
                    <h2>Assam Wildlife Safari</h2>
                    <p class="package-description">Experience rich wildlife, focusing on the one-horned rhino at Kaziranga and the unique cultural heritage of Majuli Island.</p>
                    <div class="package-pricing"><span>₹22,999 per person on twin sharing</span></div>
                    <button class="explore-package-btn"><a href="assam-wildlife.php">Explore</a></button>
                </div>
            </div>
            <div class="package-card">
                <div class="package-image-container">
                    <img src="images/ap_package.jpg" alt="Arunachal Pradesh Package">
                    <span class="duration-tag">8 Day Tour</span>
                </div>
                <div class="package-content">
                    <span class="package-state">Arunachal Pradesh</span>
                    <h2>Arunachal Cultural Discovery</h2>
                    <p class="package-description">Discover unexplored Arunachal Pradesh with visits to ancient monasteries, tribal villages, and stunning mountain landscapes.</p>
                    <div class="package-pricing"><span>₹34,999 per person on twin sharing</span></div>
                    <button class="explore-package-btn"><a href="arunachal-discovery.php">Explore</a></button>
                </div>
            </div>
        </div>

        <!-- Load More Button Container -->
        <div class="load-more-container">
            <!-- Added <i> tag for potential icon -->
            <button class="load-more-btn"><a href="packages.php">More Packages </a><!-- <i class="fas fa-chevron-down"></i> --> </button>
        </div>

    </section>
    <!-- End Packages Section -->

    <!-- Contact Us Section: ID matches nav link -->
    <section id="contact" class="contact-main-section">
        <div class="container contact-container">

            <div class="contact-header">
                <h1 class="page-title contact-title">Get In Touch</h1>
                <p class="destination-quote contact-subtitle">We'd love to hear from you! Reach out with questions or
                    booking inquiries.</p>
            </div>

            <!-- Contact Info Cards -->
            <div class="contact-info">
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <h3>Call Us</h3>
                    <p>+123 456 7890</p> <!-- Replace with real number -->
                </div>
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <h3>Email Us</h3>
                    <p>contact@tripne.com</p> <!-- Replace with real email -->
                </div>
                <div class="contact-card">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Visit Us</h3>
                    <p>Azara, Guwahati, Assam</p> <!-- Confirm address -->
                </div>
                <div class="contact-card">
                    <div class="icon"><i class="fa-brands fa-instagram"></i></div>
                    <h3>Instagram</h3>
                    <p>@tripne_official</p> <!-- Replace with real handle -->
                </div>
            </div>

            <!-- Form and Map Container -->
            <div class="contact-form-map">
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <form id="contactForm" action="process_contact.php" method="POST"> <!-- Added action & method -->
                        <div class="form-group">
                            <label for="contact-name" class="sr-only">Your Name</label>
                            <input type="text" id="contact-name" name="contact_name" placeholder="Your Name" required />
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="sr-only">Your Email</label>
                            <input type="email" id="contact-email" name="contact_email" placeholder="Your Email"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="contact-message" class="sr-only">Your Message</label>
                            <textarea id="contact-message" name="contact_message" placeholder="Your Message" rows="5"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn submit-btn">Send Message</button>
                    </form>
                </div>

                <div class="map-container">
                    <!-- The iframe is used directly for embedding -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28657.781329027064!2d91.59369023561125!3d26.124281936026694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a43f487601b9f%3A0xf5fadffc8e2150d8!2sAzara%2C%20Guwahati%2C%20Assam%20781017!5e0!3m2!1sen!2sin!4v1743570769144!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <!-- Note: The script tag for Google Maps API (with key) is usually placed before </body> -->
                </div>
            </div>

        </div> <!-- End .contact-container -->
    </section>
    <!-- === End Contact Us Section === -->

    <!-- ============================ -->
    <!-- === Chat Feature Elements === -->
    <!-- ============================ -->
    <!-- Live Chat Button -->
    <div class="chat-btn" id="chatBtn" title="Chat with us">
    <i class="fas fa-comment-dots"></i>
</div>

<!-- Chat Popup -->
<div class="chat-popup" id="chatPopup">
    <div class="chat-header">
        <div class="agent-avatar">
            <img src="images/agent.jpg" alt="Support Agent" />
        </div>
        <div class="agent-info">
            <h4>TRIPNE Support</h4>
            <p>Online</p>
        </div>
        <button class="close-chat" id="closeChat" aria-label="Close chat">×</button>
    </div>
    <div class="chat-messages" id="chatMessages">
        <!-- Initial Agent Message -->
        <div class="message agent">
            <p>Hello! How can I help you with your travel plans today? Select a category or type your question.</p>
        </div>
        <!-- ****** ADD CATEGORY BUTTONS CONTAINER ****** -->
        <div class="chat-categories" id="chatCategories">
            <button class="category-btn" data-category="trekking">
                <i class="fas fa-hiking icon"></i> Trekking & Adventure
            </button>
            <button class="category-btn" data-category="sightseeing">
                <i class="fas fa-binoculars icon"></i> Culture & Sightseeing
            </button>
            <button class="category-btn" data-category="mountains">
                <i class="fas fa-mountain icon"></i> Mountains & Views
            </button>
            <button class="category-btn" data-category="waterfalls">
                <i class="fas fa-water icon"></i> Waterfalls & Lakes
            </button>
             <button class="category-btn" data-category="wildlife">
                <i class="fas fa-paw icon"></i> Wildlife & Nature
            </button>
             <button class="category-btn" data-category="packages">
                <i class="fas fa-suitcase-rolling icon"></i> View Packages
            </button>
        </div>
        <!-- ****** END CATEGORY BUTTONS CONTAINER ****** -->

    </div>
    <div class="chat-input">
        <input type="text" placeholder="Type your message..." id="userMessage" aria-label="Chat message input" />
        <button id="sendMessage" aria-label="Send chat message"><i class="fas fa-paper-plane"></i></button>
    </div>
</div>

    <!-- </main> --> <!-- End Main Content Wrapper -->


    <!-- Add your script link before closing body -->
    <script src="js/destinations.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>