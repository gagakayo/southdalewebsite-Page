<?php
session_start();
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "An unknown error occurred.";
unset($_SESSION['error_message']); // Clear error message after displaying
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        .error-icon {
            font-size: 50px;
            color: red;
        }

        p {
            color: #333;
            font-size: 16px;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="error-icon">⚠️</div>
        <h2>Error</h2>
        <p><?php echo $error_message; ?></p>
        <a href="javascript:history.back()">Go Back</a>
    </div>

</body>

</html>