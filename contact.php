<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Eagle Star Business Brokerage Inc</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .header-container {
            background-color: #000;
            color: #fff;
            padding: 10px 0;
        }

        .header-container .logo {
            width: 150px;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .navbar-nav .nav-link.active {
            border-bottom: 2px solid #fff;
        }

        .contact-section {
            padding: 50px 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        .contact-section h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .contact-form button:hover {
            background-color: #555;
        }

        .form-footer, .company-name {
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }

        .social-media-section {
            text-align: center;
            padding: 50px 20px;
        }

        .social-media-section h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .social-media-links a {
            margin: 0 10px;
            display: inline-block;
        }

        .social-media-links img {
            width: 40px;
            height: 40px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #000;
            color: #fff;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <img src="https://raw.githubusercontent.com/techrecursive/Eagleproject/main/logo.webp" alt="Eagle Star">
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="profile.html">Teams</a></li>
            <li><a href="jobs.html">Jobs</a></li>
            <li><a href="listings.html">Listing</a></li>
            <li><a href="other-services.html">Other Services</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </header>

    <!-- PHP Form Processing -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize input
        $name = strip_tags(trim($_POST["name"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        // Validate input
        if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Recipient email address (change this to your email address)
            $to = "your-email@example.com";  // Replace with your email

            // Subject and message body
            $subject = "New Contact Form Submission from $name";
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            // Email headers
            $headers = "From: $email";

            // Send email
            if (mail($to, $subject, $body, $headers)) {
                echo "<p class='alert alert-success'>Thank you! Your message has been sent.</p>";
            } else {
                echo "<p class='alert alert-danger'>Oops! Something went wrong and we couldn't send your message.</p>";
            }
        } else {
            echo "<p class='alert alert-warning'>Please complete all fields correctly.</p>";
        }
    }
    ?>

    <!-- Main Content Section -->
    <section class="contact-section">
        <div class="container">
            <h1>Drop us a line!</h1>
            <form action="contact.php" method="post" class="contact-form">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email*" required>
                <textarea name="message" placeholder="Message" rows="5" required></textarea>
                <button type="submit" class="btn btn-dark">Send</button>
            </form>
            <p class="form-footer">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
            <p class="company-name">Eagle Star Business Brokerage Inc</p>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="social-media-section">
        <div class="container">
            <h2>CONNECT WITH US</h2>
            <div class="social-media-links">
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" alt="Facebook"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram"></a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Eagle Star Business Brokerage Inc - All Rights Reserved.</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms and Conditions</a></p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
