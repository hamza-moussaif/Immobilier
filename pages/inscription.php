<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/inscription.css">
    <link rel="stylesheet" href="../style/index.css">
   
    <title>Document</title>
</head>

<body>
<?php include_once '../components/Nav.php' ?>
    <form action="inscription.php" method="post">
        <div class="signupCont">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <input class="subm" type="submit" value="Inscription">
    </div>
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbimmobilier";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $requete = $conn->prepare('INSERT INTO users (Nom, Prenom, Email, Password) VALUES (?, ?, ?, ?)');
        $requete->execute(array(
            $nom,
            $prenom,
            $email,
            $password
        ));
      header("Location: home.php"); 
    }
    ?>
</body>

</html>