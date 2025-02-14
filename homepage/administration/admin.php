<?php
// Registrar Office Webpage Design
echo "<html>
    <head>
        <title>Registrar's Office</title>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='styles.css'>
    </head>
    <body class='container mt-4'>
        <header class='text-center mb-4'>
            <h1 class='text-primary'>Registrar's Office</h1>
            <nav class='navbar navbar-expand-lg navbar-light bg-light'>
                <div class='container-fluid'>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarNav'>
                        <ul class='navbar-nav'>
                            <li class='nav-item'><a class='nav-link' href='#schedule'>Class Schedules</a></li>
                            <li class='nav-item'><a class='nav-link' href='#grades'>Grades</a></li>
                            <li class='nav-item'><a class='nav-link' href='#subjects'>Subjects</a></li>
                            <li class='nav-item'><a class='nav-link' href='#teachers'>Teachers</a></li>
                            <li class='nav-item'><a class='nav-link' href='#enrollment'>Enrollment</a></li>
                            <li class='nav-item'><a class='nav-link' href='#fees'>Fees & Payments</a></li>
                            <li class='nav-item'><a class='nav-link' href='#documents'>Student Documents</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section id='schedule' class='mb-4'><h2>Class Schedules</h2><p>View your latest class schedules here.</p></section>
        <section id='grades' class='mb-4'><h2>Grades</h2><p>Check your academic grades and performance.</p></section>
        <section id='subjects' class='mb-4'><h2>Subjects</h2><p>List of available subjects for this semester.</p></section>
        <section id='teachers' class='mb-4'><h2>Teachers</h2><p>Know your professors and their office hours.</p></section>
        <section id='enrollment' class='mb-4'><h2>Enrollment</h2><p>Information on how to enroll in courses.</p></section>
        <section id='fees' class='mb-4'><h2>Fees & Payments</h2><p>View tuition fees, payment methods, and deadlines.</p></section>
        <section id='documents' class='mb-4'><h2>Student Documents</h2><p>Request transcripts, certificates, and other documents.</p></section>
    </body>
    </html>";
?>

<?php
// President's Office Webpage Design
echo "<html>
    <head>
        <title>President's Office</title>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='styles.css'>
   
    </head>
    <body class='container mt-4'>
        <header class='text-center mb-4'>
            <h1 class='text-primary'>President's Office</h1>
            <nav class='navbar navbar-expand-lg navbar-light bg-light'>
                <div class='container-fluid'>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarNav'>
                        <ul class='navbar-nav'>
                            <li class='nav-item'><a class='nav-link' href='#about'>About the President</a></li>
                            <li class='nav-item'><a class='nav-link' href='#vision'>Vision & Mission</a></li>
                            <li class='nav-item'><a class='nav-link' href='#policies'>School Policies</a></li>
                            <li class='nav-item'><a class='nav-link' href='#announcements'>Announcements</a></li>
                            <li class='nav-item'><a class='nav-link' href='#events'>Events</a></li>
                            <li class='nav-item'><a class='nav-link' href='#contact'>Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section id='about' class='mb-4'><h2>About the President</h2><p>Learn more about the school president.</p></section>
        <section id='vision' class='mb-4'><h2>Vision & Mission</h2><p>Our commitment to education excellence.</p></section>
        <section id='policies' class='mb-4'><h2>School Policies</h2><p>Guidelines and regulations for students and staff.</p></section>
        <section id='announcements' class='mb-4'><h2>Announcements</h2><p>Stay updated with the latest school news.</p></section>
        <section id='events' class='mb-4'><h2>Events</h2><p>Upcoming academic and extracurricular events.</p></section>
        <section id='contact' class='mb-4'><h2>Contact</h2><p>Reach out to the President's Office.</p></section>
    </body>
    </html>";

    include 'footer.php'
?>


