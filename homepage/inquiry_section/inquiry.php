<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form & FAQs</title>
    <link rel="stylesheet" href="/homepage/homepage.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }


        #h1f,
        #h1i {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }

        /* FAQ Section Styles */
        .faq-section {
            margin-bottom: 40px;
        }

        .faq-item {
            margin-bottom: 15px;
            border: 1px solid #e9e9e9;
            border-radius: 4px;
            overflow: hidden;
        }

        .faq-item summary {
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            background: #e9e9e9;
            padding: 12px;
            list-style: none;
        }

        .faq-item[open] summary {
            background: #d9d9d9;
        }

        .faq-item p {
            padding: 12px;
            margin: 0;
            background: #f9f9f9;
            border-top: 1px solid #e9e9e9;
        }

        /* Inquiry Form Styles */
        form input,
        form textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form button {
            width: 20%;
            padding: 12px;
            background-color: darkblue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #007bff;
        }

        footer {
            margin-top: 40px;
        }
    </style>
</head>

<body>


    <div class="container">
        <!-- FAQs Section -->
        <h1 id="h1f">Frequently Asked Questions</h1>
        <div class="faq-section">
            <details class="faq-item">
                <summary> 1: What courses does the school offer?</summary>
                <p>Our school offers a diverse range of courses including science, arts, commerce, and technical subjects.</p>
            </details>
            <details class="faq-item">
                <summary> 2: How can I apply for admission?</summary>
                <p>You can apply online through our website or visit our admissions office for more details.</p>
            </details>
            <details class="faq-item">
                <summary> 3: What are the school’s operating hours?</summary>
                <p>The school operates from 8 AM to 3 PM on weekdays, with some programs offering additional sessions.</p>
            </details>
            <details class="faq-item">
                <summary> 4: Are there any scholarship opportunities?</summary>
                <p>Yes, we offer scholarships based on merit and need. Visit our scholarship section for more information.</p>
            </details>
            <details class="faq-item">
                <summary> 5: What extracurricular activities are available?</summary>
                <p>We offer a range of extracurricular activities including sports, music, drama, and clubs.</p>
            </details>
            <details class="faq-item">
                <summary> 6: How can I contact the school for more information?</summary>
                <p>You can contact us via phone, email, or through the inquiry form below.</p>
            </details>
        </div>

        <!-- Inquiry Form Section -->
        <h1 id="h1i">Inquiry Form</h1>
        <form action="inquiry_submit.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Inquiry" required></textarea>
            <button type="submit">Submit Inquiry</button>
        </form>
    </div>

    <?php include 'footer.php'; ?> <!-- This will insert the footer -->

</body>

</html>