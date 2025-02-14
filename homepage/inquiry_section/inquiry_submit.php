<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Database configuration
$servername = "localhost";
$username   = "root";  // Change if needed
$password   = "";      // Change if needed
$database   = "student_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    header("Location: inquiry_message.php?status=failure");
    exit;
}

// Retrieve form data
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    // Send email using PHPMailer
    $mail = new PHPMailer(true);
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'southdaleinquiry@gmail.com'; // Your Gmail
        $mail->Password   = ' fmzs vgqa qmlq gshd'; // Your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email to admin (Your Email)
        $mail->setFrom($email, $name);
        $mail->addAddress('southdaleinquiry@gmail.com'); // Your email
        $mail->addReplyTo($email, $name);

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from $name";
        $mail->Body    = "<strong>Name:</strong> $name<br>
                          <strong>Email:</strong> $email<br><br>
                          <strong>Message:</strong><br>$message";

        $mail->send(); // Send the first email

        // === Auto-Reply to Sender ===
        $autoReply = new PHPMailer(true);
        $autoReply->isSMTP();
        $autoReply->Host       = 'smtp.gmail.com';
        $autoReply->SMTPAuth   = true;
        $autoReply->Username   = 'southdaleinquiry@gmail.com';
        $autoReply->Password   = 'fmzs vgqa qmlq gshd ';
        $autoReply->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $autoReply->Port       = 587;

        // Auto-Reply Email Settings
        $autoReply->setFrom('southdaleinquiry@gmail.com', 'Southdale International School');
        $autoReply->addAddress($email, $name); // Send auto-reply to user
        $autoReply->isHTML(true);
        $autoReply->Subject = "Thank You for Contacting Us!";
        $autoReply->Body    = "
            <p>Dear $name,</p>
            <p>Thank you for reaching out to Southdale international School. We have received your inquiry and will get back to you as soon as possible.</p>
            <p>For urgent concerns, you may contact us at <strong> 0997 251 0502 </strong>.</p>
            <p>Best regards,</p>
            <p><strong>Southdale School Support Team</strong></p>
        ";

        $autoReply->send(); // Send auto-reply email

        header("Location: inquiry_message.php?status=success");
        exit;
    } catch (Exception $e) {
        header("Location: inquiry_message.php?status=failure");
        exit;
    }
} else {
    header("Location: inquiry_message.php?status=failure");
}

$stmt->close();
$conn->close();
