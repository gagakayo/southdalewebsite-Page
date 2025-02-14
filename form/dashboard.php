<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header("Location: login.php");
    exit();
}
$first_name = $_SESSION['first_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Portal Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dash.css">
</head>

<body>

    <!-- Sidebar Navigation -->
    <nav class="sidebar">
        <h4>Dashboard</h4>
        <a href="#" class="nav-link">📅 Schedule</a>
        <a href="#" class="nav-link">💰 Tuition Fees</a>
        <a href="#" class="nav-link">📚 Activities</a>
        <a href="#" class="nav-link">📖 Tasks/Assignments</a>

        <!-- Grade Levels Dropdown -->
        <div class="dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">🏫 Grade Levels</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">College</a></li>
                <li><a class="dropdown-item" href="#">Primary School</a></li>
                <li><a class="dropdown-item" href="#">Junior High</a></li>
                <li><a class="dropdown-item" href="#">Senior High</a></li>
            </ul>
        </div>

        <!-- Admin Section (Protected) -->
        <a href="#" class="nav-link" onclick="checkAdmin()">🔐 Admin Section</a>

        <div class="logout-box">
            <a href="login.php">Logout</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <header class="text-center mb-4">
            <h1 class="fw-bold text-primary">Welcome, <?php echo htmlspecialchars($first_name); ?>!</h1>
            <p class="text-muted">You have successfully logged in.</p>
        </header>

        <div class="row g-4">
            <!-- Schedule -->
            <div class="col-md-4">
                <div class="info-box bg-primary">
                    <h2>📅 Schedule</h2>
                    <ul>
                        <li>GE 7 - Fri 1:00 PM</li>
                        <li>GE 8 - Tue 2:00 PM</li>
                        <li>lit 1 - Sat 10:00 AM</li>
                        <li>ICS 2605 - Sat 1:00 PM</li>
                        <li>ICS 2626 - Sat 2:00 PM</li>
                        <li>ICS 2626L - Sat 2:00 PM</li>
                        <li>ICS 262610 - Sat 3:00 PM</li>
                    </ul>
                </div>
            </div>

            <!-- Tuition Fee -->
            <div class="col-md-4">
                <div class="info-box bg-danger">
                    <h2>💰 Tuition Fee</h2>
                    <p><strong>₱25,000.00</strong></p>
                    <p>Due Date: March 15, 2025</p>
                    <button><a href="#">Update</a></button>
                </div>
            </div>

            <!-- Assignments -->
            <div class="col-md-4">
                <div class="info-box bg-success">
                    <h2>📖 Assignments</h2>
                    <ul>
                        <li>Math - Due Feb 15</li>
                        <li>English Essay - Due Feb 20</li>
                    </ul>
                </div>
            </div>

            <!-- Notices -->
            <div class="col-md-4">
                <div class="info-box bg-info">
                    <h2>📢 Notices</h2>
                    <ul>
                        <li>Parents' meeting: Feb 14</li>
                        <li>Final exam schedule next week</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        function checkAdmin() {
            let password = prompt("Enter Admin Password:");
            if (password !== "admin123") {
                alert("Access Denied!");
            } else {
                window.location.href = "admin.php";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>