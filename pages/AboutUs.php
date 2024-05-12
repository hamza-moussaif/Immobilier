<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .parallax {
            background-image: url("../assets/background.jpg");
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .about-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px 40px;
            background-color: white;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            border-radius: 8px;
            animation: slideIn 1s ease;
        }
        .about-section h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .about-section p {
            line-height: 1.6;
            color: #555;
        }
        .team-section {
            display: flex;
            justify-content: space-around;
            padding: 50px 0;
            background-color: #fff;
        }
        .team-member {
            text-align: center;
        }
        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .team-member h3 {
            margin-bottom: 5px;
        }
        .team-member p {
            margin-bottom: 15px;
        }
        .team-member .fa {
            color: #333;
            margin: 0 10px;
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
    <?php include_once '../components/Nav.php'; ?>

    <div class="parallax"></div>

    <div class="about-section">
        <h1>About Us</h1>
        <p>
            We are a leading real estate company with over 10 years of experience in the industry. Our mission is to provide our clients with the most comprehensive and efficient real estate services. We are committed to delivering exceptional results and providing outstanding customer service.
        </p>
        <p>
            Our team of experienced and dedicated professionals is always ready to go the extra mile to meet our clients' needs. We believe in building long-term relationships with our clients based on trust and mutual respect.
        </p>
    </div>

    <div class="team-section">
        <div class="team-member">
            <img src="../assets/logo.png" alt="Team Member 1">
            <h3>Moussaif & Chadili</h3>
            <p>Founders</p>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
       
    </div>

    <div class="parallax"></div>
</body>

</html>