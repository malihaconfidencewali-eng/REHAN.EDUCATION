<?php
// connect to the database
include('db.php');

// if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if ($name != "" && $email != "" && $message != "") {
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql)) {
            // redirect to success page using JS (so it works even if headers are already sent)
            echo "<script>window.location='success.php';</script>";
            exit;
        } else {
            echo "<script>alert('Database error: Unable to save message');window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Please fill all fields');window.history.back();</script>";
    }
} else {
    // if someone opens file directly in browser
    echo "
    <!DOCTYPE html>
    <html>
    <head>
    <title>Submit Contact - Rehan.Education</title>
    <style>
    body {font-family: Arial; background: #f8f9fa; text-align: center; padding-top: 100px;}
    .card {background: white; display: inline-block; padding: 40px; border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);}
    a {text-decoration: none; background: #007bff; color: white; padding: 10px 20px;
    border-radius: 5px;}
    a:hover {background: #0056b3;}
    </style>
    </head>
    <body>
    <div class='card'>
        <h2>Contact Form Page</h2>
        <p>This page is used to process form submissions. Please go to <a href='contact.php'>Contact Page</a> to send a message.</p>
    </div>
    </body>
    </html>
    ";
}
?>
