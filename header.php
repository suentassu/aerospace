<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<?php wp_head(); ?>
</head>
<body>

<header>
    <nav id="navbar">
        <div class="nav-container">
            <div class="main-title">
                <a href="<?php echo esc_url(get_home_url()); ?>"><?php bloginfo(); ?></a>
            </div>
            <div class="nav-icon">
                <span class="icon-mobile" onclick="openNavi()"><i class="fa-solid fa-bars"></i></span>
                <span class="icon-tablet" onclick="openNaviTablet()"><i class="fa-solid fa-bars"></i></span>
                <span class="icon-desk" onclick="openNaviDesk()"><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>

        <div id="aeroNav" class="nav-overlay">
            <a href="javascript:void(0)" class="nav-closebtn" onclick="closeNav()">
                <i class="fa-solid fa-x"></i>
            </a>

            <div class="nav-overlay-content">
                <?php wp_nav_menu(); ?>
            </div>
        </div>
    </nav>
    <div class="nav-back">
        <div class="nav-container ">
            <button id="back-button" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Go Back</button>
        </div>
    </div>
</header>

<main class="main-overlay">

    <div class="back-button nav-container ">
        <a href="#" title="Back"><i class="fa-solid fa-circle-chevron-left"></i> Go back</a>
    </div>

    <!-- Button to open the popup -->
    <button id="openButton" onclick="togglePopup()"><i class="fas fa-envelope"></i></button>

    <!-- The popup form -->
    <div id="contactForm" class="popup">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Contact Us</h2>
        <form action="process_contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" cols="30"></textarea>

            <!-- Honeypot field (hidden from users) -->
            <div style="display:none">
                <label for="honeypot">Do not fill out this field</label>
                <input type="text" id="honeypot" name="honeypot">
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the honeypot field is empty and all required fields are filled
        if (!empty($_POST['honeypot']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
            // If honeypot field is filled or required fields are empty, it's likely a spam submission
            echo "Please fill in all required fields.";
            // You can choose to handle this however you want, e.g., display an error message, log, etc.
        } else {
            // Proceed with processing the form submission
            // Get form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];


            // Set up email
            $to = "your_email@example.com"; // Your email address
            $subject = empty($subject) ? "New Contact Form Submission" : $subject; // Default subject if subject field is empty
            $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message"; // Include subject in the email body
            $headers = "From: $email";

            // Send email
            if (mail($to, $subject, $body, $headers)) {
                echo "Thank you for your message. We'll get back to you shortly!";
            } else {
                echo "Oops! Something went wrong and we couldn't send your message.";
            }
        }
    }
    ?>


