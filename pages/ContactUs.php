<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/index.css">
    <title>Contact Us</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .contact-form {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 40px;
            background-color: white;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            border-radius: 8px;
            animation: slideIn 1s ease;
        }
        .contact-form h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .contact-form label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #007BFF;
        }
        .contact-form button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-form button:hover {
            background-color: #0056b3;
        }
        @keyframes slideIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <?php include_once '../components/Nav.php' ?>
    <div class="contact-form">
        <h1>Contact Us</h1>
        <form action="send_mail.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
 
    </div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'your-email@example.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

    mail($to, $subject, $email_body, $headers);
    header('Location: thank_you.php');
}
?>
</html>