<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Senior High Levels</title>
    <link rel="stylesheet" href="/homepage/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Basic Reset & Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 10%;
        }

        /* Course Card Styling */
        .course {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 15px;
            transition: box-shadow 0.3s ease;
            box-shadow: rgb(0, 0, 0, 0.35) 0px 5px 15px;

        }

        .course:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .course h2 {
            margin: 0;
            cursor: pointer;
            color: #007BFF;
        }

        .course .description,
        .course .enroll {
            display: none;
            margin-top: 10px;
        }

        /* Enroll & Navigation Button Styling */

        .button a {
            color: antiquewhite;
            text-decoration: none;

        }

        .button {
            margin-bottom: 10%;
            display: inline-block;
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Navigation Button Container */
        .nav-home {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Grade 11 - GOLD, SILVER & PLATINUM</h1>

        <!-- BSIT Course -->
        <div class="course" id="course-abm">
            <h2 onclick="toggleCourse('course-abm')">ABM</h2>
            <div class="description">
                <p>This program provides a comprehensive foundation in information technology, covering subjects such as networking, programming, systems analysis, and cybersecurity. Ideal for students who are passionate about technology and innovation.</p>
            </div>
            <div class="enroll">
                <button class="button"><a href="/forms/forms/register.php">Register Now</a></button>
            </div>
        </div>

        <!-- BSCS Course -->
        <div class="course" id="course-humss">
            <h2 onclick="toggleCourse('course-humss')">HUMSS</h2>
            <div class="description">
                <p>Dive into the world of algorithms, data structures, software development, and computer systems. This course is designed to build a strong foundation in computing principles and problem-solving skills.</p>
            </div>
            <div class="enroll">
                <button class="button"><a href="/forms/forms/register.php">Register Now</a></button>
            </div>
        </div>

        <!-- BSBA Course -->
        <div class="course" id="course-tvl_he">
            <h2 onclick="toggleCourse('course-tvl_he')">TVL- HE</h2>
            <div class="description">
                <p>Learn the ins and outs of business management, marketing, finance, and entrepreneurship. This course prepares students for leadership roles in various industries and equips them with practical business skills.</p>
            </div>
            <div class="enroll">
                <button class="button"><a href="/forms/forms/register.php">Register Now</a></button>
            </div>
        </div>

        <!-- BSED Course -->
        <div class="course" id="course-tvl_ict">
            <h2 onclick="toggleCourse('course-tvl_ict')">TVL- ICT</h2>
            <div class="description">
                <p>This program is tailored for aspiring educators and focuses on teaching methodologies, curriculum development, and educational psychology. It prepares graduates to become effective and innovative teachers.</p>
            </div>
            <div class="enroll">
                <button class="button"><a href="/forms/forms/register.php">Register Now</a></button>
            </div>
        </div>

        <!-- Navigation Button -->
        <div class="nav-home">
            <a href="/homepage/homepage.php" class="button">Home</a>
        </div>

    </div>


    <?php include 'footer.php'; ?> <!-- This will insert the footer -->

    <script>
        // Toggle the visibility of the course description and enroll button
        function toggleCourse(courseId) {
            var course = document.getElementById(courseId);
            var description = course.querySelector('.description');
            var enroll = course.querySelector('.enroll');

            // Toggle display: if visible, hide; if hidden, show
            if (description.style.display === "block") {
                description.style.display = "none";
                enroll.style.display = "none";
            } else {
                description.style.display = "block";
                enroll.style.display = "block";
            }
        }
    </script>
</body>

</html>