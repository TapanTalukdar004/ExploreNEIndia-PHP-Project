# Explore Northeast India - PHP Travel Portal (Mini-Project)

## Overview

This repository contains a student mini-project focused on developing a travel portal for Northeast India. The primary goal was to build a functional static website using **PHP, MySQL, CSS, and vanilla JavaScript**, replicating core features and design elements inspired by modern web applications (like those built with React).

It serves as a practical exercise in:
*   Backend processing with PHP (user authentication, database interaction).
*   Database management with MySQL (users, packages, bookings).
*   Frontend development with HTML, CSS (including custom themes, responsive design).
*   Client-side interactions with vanilla JavaScript (UI effects, form handling simulations, interactive components).

The portal showcases the diverse states (Assam, Meghalaya, Sikkim, Nagaland, Manipur, Arunachal Pradesh, Tripura, Mizoram), popular destinations, cultural highlights, and simulates tour package booking for the region.

## Features Implemented

*   **Static Content Pages:**
    *   Homepage (`MiniPro.php`) with hero section.
    *   Destinations overview page (`destinations.php`) with horizontally scrolling state cards.
    *   Static State Detail pages (e.g., `assam.php`, `meghalaya.php`, etc.) showcasing state info, famous destinations within, cultural heritage, and relevant packages.
    *   Packages listing page (`packages.php`) with filtering/sorting placeholders and featured package display.
    *   Static Package Detail pages (e.g., `sikkim-adventure.php`, `assam-wildlife.php`, etc.) with comprehensive tour details (overview, itinerary, accommodation, gallery, FAQ).
    *   "Why Choose Us" page (`WhyUs.php`).
*   **User Authentication:**
    *   Signup (`signup_process.php`) with password hashing (`password_hash`).
    *   Login (`login_process.php`) with password verification (`password_verify`).
    *   Logout (`logout.php`).
    *   Session management using PHP `$_SESSION`.
*   **Account Management:**
    *   Basic Account page (`account.php`) displaying user's booked packages (fetched from the database).
*   **Booking Simulation:**
    *   "Book Now" functionality inserts a booking record into the database (`process_booking.php`).
    *   Booking status management (e.g., 'pending_payment', 'cancelled').
    *   Ability to cancel pending/confirmed bookings from the account page.
*   **Interactive UI:**
    *   Sticky navigation bar with background change on scroll (`navbar.js`, `universal.css`).
    *   Tabbed interface for package details (`package-interactions.js`).
    *   Accordion interface for itinerary and FAQs (`package-interactions.js`).
    *   State card hover effects (`destinations.css`).
    *   Basic interactive chat popup simulation (`contact.js`).
*   **Database Interaction:** Uses MySQL with prepared statements (via `mysqli`) for improved security against SQL injection.
*   **Responsive Design:** Basic responsiveness implemented across different page layouts using CSS media queries.

## Technology Stack

*   **Frontend:** HTML5, CSS3 (with CSS Variables), Vanilla JavaScript
*   **Backend:** PHP (Procedural style with `mysqli` for database connection)
*   **Database:** MySQL
*   **Web Server Environment:** XAMPP (Apache + MySQL + PHP) recommended (or similar like WAMP, MAMP, LAMP)
*   **Libraries/Assets:** Font Awesome (for icons)

## Setup and Installation

1.  **Prerequisites:**
    *   A local web server environment like [XAMPP](https://www.apachefriends.org/index.html), WAMP, MAMP, or LAMP stack installed. This provides Apache, MySQL, and PHP.
    *   A web browser (Chrome, Firefox, Edge recommended).
    *   A code editor (like VS Code).
    *   Git (optional, for cloning).

2.  **Clone the Repository:**
    ```bash
    git clone https://github.com/TapanTalukdar004/ExploreNEIndia-PHP-Project.git
    # Or download the ZIP file and extract it
    ```

3.  **Place Project:**
    *   Move the entire project folder into the web server's document root.
        *   For XAMPP: `C:\xampp\htdocs\` (Windows) or `/Applications/XAMPP/htdocs/` (macOS).
        *   For WAMP: `C:\wamp\www\` or `C:\wamp64\www\`.
        *   For MAMP: `/Applications/MAMP/htdocs/`.

4.  **Database Setup:**
    *   **Start Apache & MySQL** services from your XAMPP/WAMP/MAMP control panel.
    *   Open your web browser and navigate to `http://localhost/phpmyadmin/`.
    *   Click on "New" or the "Databases" tab.
    *   Create a new database named `tripne_db`. Select `utf8mb4_general_ci` or `utf8mb4_unicode_ci` as the collation.
    *   Select the newly created `tripne_db` database.
    *   Go to the "SQL" tab.
    *   Copy and paste the following SQL commands to create the necessary tables and run them:

        ```sql
        -- Users Table
        CREATE TABLE `users` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `username` varchar(50) NOT NULL UNIQUE,
          `email` varchar(100) NOT NULL UNIQUE,
          `password_hash` varchar(255) NOT NULL,
          `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

        -- Packages Table
        CREATE TABLE `packages` (
          `id` varchar(255) NOT NULL,
          `title` varchar(255) NOT NULL,
          `state` varchar(100) DEFAULT NULL,
          `duration` varchar(100) DEFAULT NULL,
          `price` decimal(10,2) NOT NULL,
          `image_url` varchar(512) DEFAULT NULL,
          `description` text DEFAULT NULL,
          `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

        -- Bookings Table
        CREATE TABLE `bookings` (
          `booking_id` int(11) NOT NULL AUTO_INCREMENT,
          `user_id` int(11) NOT NULL,
          `package_id` varchar(255) NOT NULL,
          `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
          `travel_date` date DEFAULT NULL,
          `num_people` int(11) DEFAULT 1,
          `total_price` decimal(10,2) NOT NULL,
          `status` enum('pending_payment','confirmed','cancelled','completed') DEFAULT 'pending_payment',
          `payment_id` varchar(255) DEFAULT NULL,
          `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
          PRIMARY KEY (`booking_id`),
          KEY `user_id` (`user_id`),
          KEY `package_id` (`package_id`),
          CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
          CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE RESTRICT
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

        ```
    *   Go back to the "SQL" tab.
    *   Copy and paste the `INSERT` statements (provided previously) to populate the `packages` table with the tour data. Run these statements.

5.  **Database Connection Configuration:**
    *   Open the `db_connect.php` file in your code editor.
    *   Verify the database credentials (`$dbHost`, `$dbUser`, `$dbPass`, `$dbName`). The defaults (`localhost`, `root`, ``, `tripne_db`) usually work for a standard XAMPP setup. Adjust if your setup differs.

6.  **Run the Project:**
    *   Open your web browser and navigate to: `http://localhost/[Your Project Folder Name]/` (e.g., `http://localhost/ExploreNEIndia-PHP-Project/`)
    *   You should see the homepage (`MiniPro.php`).

## How to Use

1.  Navigate through the different sections using the navbar (Home, Destinations, Packages, Why Us).
2.  Browse the static state detail pages via the Destinations page.
3.  Browse the static package detail pages via the Packages page.
4.  **Sign Up:** Go to the Account/Login page (`login.php`) and use the Sign Up form.
5.  **Login:** Use the credentials you just created on the Login page.
6.  **Simulate Booking:** While logged in, navigate to a package detail page (e.g., `sikkim-adventure.php`) and click one of the "Book Now" buttons.
7.  **View Bookings:** Go to the Account page (`account.php` - accessible via the username button in the navbar when logged in). You should see the booking listed with "Pending Payment" status.
8.  **Cancel Booking:** On the Account page, click the "Cancel Booking" button next to a pending/confirmed booking and confirm the action. The page will reload, and the booking should disappear from the list (as its status is updated to 'cancelled' in the database).
9.  **Logout:** Click the logout icon in the navbar when logged in.

## Screenshots

*(Optional but Recommended)*

*Add screenshots here to showcase your project!*

*   *Example: Homepage Hero Section*
    ```
    [Insert Screenshot of Homepage Here]
    ```
*   *Example: Packages Page*
    ```
    [Insert Screenshot of Packages Page Here]
    ```
*   *Example: Package Detail Page*
    ```
    [Insert Screenshot of a Package Detail Page Here]
    ```
*   *Example: Account Page (Logged In)*
    ```
    [Insert Screenshot of Account Page Here]
    ```

## Project Status & Limitations

*   This is a **student mini-project** demonstrating core concepts.
*   **Static Content:** Package and State detail pages are static PHP files. Adding new ones requires creating new files manually.
*   **Basic Validation:** Input validation (client-side and server-side) is minimal and should be enhanced for a production application.
*   **Booking:** The booking process is simulated. It creates a database record but does not involve real payment gateway integration or detailed travel date/passenger selection.
*   **Chatbot:** The chat feature is a UI simulation with predefined responses and does not connect to any real backend or AI.
*   **Error Handling:** Server-side error handling is basic (uses redirects with GET params or logs errors). User-facing error messages could be improved.
