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

?>
