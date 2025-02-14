<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
</head>

<body>
    <nav class="sidebar">
        <h4>Dashboard</h4>
        <a href="dashboard.php" class="nav-link">🏠 Home</a>
        <a href="schedule.php" class="nav-link">📅 Schedule</a>
        <a href="tuition.php" class="nav-link">💰 Tuition Fees</a>
        <a href="activities.php" class="nav-link">📚 Activities</a>
        <a href="assignments.php" class="nav-link">📖 Tasks/Assignments</a>

        <!-- Grade Levels Dropdown -->
        <div class="dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">🏫 Grade Levels</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="college.php">College</a></li>
                <li><a class="dropdown-item" href="primary.php">Primary School</a></li>
                <li><a class="dropdown-item" href="junior_high.php">Junior High</a></li>
                <li><a class="dropdown-item" href="senior_high.php">Senior High</a></li>
            </ul>
        </div>

        <!-- Admin Section (Protected) -->
        <a href="#" class="nav-link" onclick="checkAdmin()">🔐 Admin Section</a>

        <div class="logout-box">
            <a href="login.php">Logout</a>
        </div>
    </nav>

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

</body>

</html>