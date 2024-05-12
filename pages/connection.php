<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/connection.css">
    <link rel="stylesheet" href="../style/index.css">
    <title>Login Page</title>
</head>

<body>
    <?php
    include_once '../components/Nav.php'; 
    ?>
    <form  method="post" action="">
        <div class="container-form">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="role">Role:</label><br>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="client">Client</option>
        </select><br>
        <input class="submit" type="submit" value="Submit">
        </div>
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbimmobilier";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($_POST['role'] == 'admin') {
        $sql = "SELECT * FROM admin WHERE Username='$email' AND Password='$password' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("location:dashboard.php");
        } else {
            echo "Invalid email, password, or role. <a href='inscription.php'>inscription?</a>" ;
        }
    }else if ($_POST['role'] == 'client') {
        $sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            header("location:home.php");
        } else {
            echo "Invalid email, password, or role. <a href='inscription.php'>inscription?</a>" ;
        }
    }
   

    mysqli_close($conn);
}
?>
</html>