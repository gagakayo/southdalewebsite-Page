<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin & Faculty staffs</title>
    <link rel="stylesheet" href="/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
        .table {
            padding: 10px;

        }

        h1 {
            text-align: center;
        }

        h2 {
            text-align: left;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>




</head>

<body>

    <body>


        <nav id="nav-box">
            <img class="logo" src="/homepage/photos/logo.jpg" alt="Logo">

            <ul id="nav-bar">
                <li><a href="/homepage/homepage.php">Home</a></li>

                <li><a href="#">Admission</a>
                    <ul>
                        <li><a href="/forms/register.php">Admission Form</a></li>
                        <li><a href="/inquiry_section/inquiry.php">FAQS</a></li>
                    </ul>
                </li>

            </ul>


        </nav>


        <div class="table">

            <h1>SCHOOL STAFF</h1>

            <!-- Admin/Staff Section -->
            <h2>Admin/Staff</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dr. Joe Peter A. Semion</td>
                        <td>School president/CEO</td>
                    </tr>
                    <tr>
                        <td>Ms. May Aguinaldo Rieta – Simeon </td>
                        <td> Vice President for Academic Affairs and Operations </td>
                    </tr>
                    <tr>
                        <td>Mr. Rhayan R. De Castro </td>
                        <td>School School Principal
                        </td>
                    </tr>
                    <tr>
                        <td>Ms. Ma. Christina L. de Leon </td>
                        <td>Assistant Principal</td>
                    </tr>
                    <tr>
                        <td>Ms. Vanessa Simeon </td>
                        <td> School Registrar</td>
                    </tr>
                    <tr>
                        <td>Ms. Lucila Pajares </td>
                        <td>Assistant Registra</td>
                    </tr>
                    <tr>
                        <td>Ms. Michelle Besa </td>
                        <td>Cashier</td>
                    </tr>




                    <!-- Add more admin/staff rows as needed -->
                </tbody>
            </table>

            <!-- Faculty Section -->
            <h2>Faculty</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Ms. Aissa Mae C. Mabesa </td>
                    </tr>
                    <tr>
                        <td>Ms. Katrina Dominique A. Pinpin </td>
                    </tr>
                    <tr>
                        <td>Ms. Arcelyn C. Mañago </td>
                    </tr>
                    <tr>
                        <td> Ms. Jasmin S. Buising </td>
                    </tr>
                    <tr>
                        <td> Ms. Cristina R. Camillo</td>
                    </tr>
                    <tr>
                        <td>Mr. Joshua M. Cortes</td>
                    </tr>
                    <tr>
                        <td>Ms. Jerah Mae B. Arboso </td>
                    </tr>
                    <tr>
                        <td> Mr. Fernando S. Tero</td>
                    </tr>
                    <tr>
                        <td> Ms. Emmarie Joy A. Buranday</td>
                    </tr>
                    <tr>
                        <td> Mr. Eric S. Urgelles </td>
                    </tr>
                    <tr>
                        <td> Ms. Catherine R. Copia</td>
                    </tr>
                    <tr>
                        <td> Mr. Bernardino Mendoza </td>
                    </tr>
                    <tr>
                        <td> Dr. Marlou M. Tangalin</td>
                    </tr>

                    <!-- Add more faculty rows as needed -->
                </tbody>
            </table>



        </div>





        <?php include 'footer.php'; ?> <!-- This will insert the footer -->




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    </body>

</html>