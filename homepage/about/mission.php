<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission Section</title>
    <link rel="stylesheet" href="/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav id="nav-box">
        <img class="logo" src="/homepage/photos/logo.jpg" alt="Logo">

        <ul id="nav-bar">
            <li><a href="/homepage.php">Home</a></li>

            <li><a href="#">Admission</a>
                <ul>
                    <li><a href="/form/register.php">Admission Form</a></li>
                    <li><a href="/homepage/inquiry_section/inquiry.php">FAQS</a></li>
                </ul>
            </li>

        </ul>


    </nav>



    <div class="wrapper">
        <div class="container-mission">
            <div class="card">
                <img src="/photos/pic1.jpg" alt="Vision">
                <h3>Our Vision</h3>
                <p>To be a leading institution of excellence, shaping future leaders with knowledge and integrity.</p>
            </div>
            <div class="card">
                <img src="/photos/pic2.jpg" alt="Mission">
                <h3>Our Mission</h3>
                <p>To provide quality education, foster innovation, and nurture values that empower students for lifelong success.</p>
            </div>
            <div class="card">
                <img src="/photos/pic3.jpg" alt="Core Values">
                <h3>Our Core Values</h3>
                <p>Integrity, Excellence, Innovation, Compassion, and Leadership in service to society.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?> <!-- This will insert the footer -->

</body>

</html>