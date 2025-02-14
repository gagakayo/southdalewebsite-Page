<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';
if ($status === "success") {
    $message = "Successfully submitted!";
    $detail  = "Thank you for your inquiry. We will get back to you shortly.";
    $color   = "#28a745"; // Green
} else {
    $message = "Submitted unsuccessful!";
    $detail  = "There was an error processing your inquiry. Please try again later.";
    $color   = "#dc3545"; // Red
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Feedback</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 20px;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 12px 20px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 style="color: <?php echo $color; ?>;"><?php echo $message; ?></h2>
        <p><?php echo $detail; ?></p>
        <a href="/homepage/inquiry_section/inquiry.php">Back </a>
    </div>
</body>

</html>