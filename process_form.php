<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate input
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Set up email
        $to = "treks@travelitinerary.com.np";  // Replace with your email
        $subject = "New Message from Contact Form";
        $headers = "From: $email";
        $emailBody = "Name: $name\nEmail: $email\nMessage:\n$message";

        // Send the email
        if (mail($to, $subject, $emailBody, $headers)) {
            echo "Thank you for contacting us, $name. We will get back to you shortly.";
        } else {
            echo "Oops! Something went wrong. Please try again.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
    #packages {
    background-color: #f9f9f9;
    padding: 50px 0;
}

.package {
    background-color: white;
    padding: 20px;
    margin-bottom: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-wrap: wrap;
}

.package img {
    flex: 1;
    max-width: 100%;
    border-radius: 10px;
    margin-right: 20px;
}

.package h3 {
    flex: 1 100%;
    font-size: 1.8rem;
    margin-bottom: 15px;
}

.package p {
    flex: 1;
    line-height: 1.6;
    margin-bottom: 20px;
}

.package .btn {
    margin-top: 15px;
    text-align: center;
}

@media (max-width: 768px) {
    .package {
        flex-direction: column;
        text-align: center;
    }

    .package img {
        margin: 0 auto;
    }
}

?>
