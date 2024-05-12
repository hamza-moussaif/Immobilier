<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/index.css">
    <title>
        navbar
    </title>
</head>

<body>
    
    <div class="Navbar">
        <div class="Navbar-logo">
            <img src='../assets/logo.png' alt="logo" />
        </div>
        <div class="Navbar-menu">
            <ul class="Navbar-menu-list">
                <li><a href="../pages/home.php">Accueil</a></li>
                <li> <a href="../pages/Achat.php">Achat</a></li>
                <li><a href="../pages/location.php">Louer</a></li>
                <li> <a href="../pages/AboutUs.php">About us</a></li>
            </ul>
        </div>
        <div class=" Navbar-login">
            <form action="../pages/connection.php">
                <button class="conex">Connexion</button>
            </form>
            <form action="../pages/inscription.php">
                <button class="inscri">Inscription</button>
            </form>
        </div>
    </div>
</body>


</html>