<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

.sidebar {
    width: 950px;
    height: 580vh;
    background-color: #333;
    color: #fff;
    padding: 20px;
    transition: width 0.5s;
}



.sidebar a {
    color: #fff;
    text-decoration: none;
    display: block;
    padding: 10px 0;
    transition: padding 0.5s;
}

.sidebar a:hover {
    padding-left: 10px;
    background-color: #444;
}
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .main-content {
            flex-grow: 0.5;
            padding: 0px;
        }
        .summary-cards {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.card {
    flex-basis: calc(50% - 10px);
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
}

.card h3 {
    margin: 0;
    color: #333;
}

.card p {
    font-size: 2em;
    margin: 10px 0 0;
    color: #666;
}
.recent-properties,
.recent-contacts {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    margin-top: 20px;
}

.recent-properties h2,
.recent-contacts h2 {
    margin: 0 0 10px;
    color: #333;
}
.recent-properties,
.recent-contacts {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    margin-top: 20px;
}

.recent-properties h2,
.recent-contacts h2 {
    margin: 0 0 10px;
    color: #333;
}

.property {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    margin-top: 20px;
}

.property h3 {
    margin: 0 0 10px;
    color: #333;
}

.property p {
    color: #666;
}
.property img {
    width: 50%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 15px;
}
.recent-contacts {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    margin-top: 20px;
}

.recent-contacts h2 {
    margin: 0 0 10px;
    color: #333;
}

.contact {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
    margin-top: 20px;
}

.contact h3 {
    margin: 0 0 10px;
    color: #333;
}

.contact p {
    color: #666;
}
    </style>
</head>
<body>
<div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="./Dashboard.php">Dashboard</a><br>
        <a href="./Dasboard-pages/admin-rent.php">Ajouter Batiment a louer</a><br>
        <a href="./admin-sell.php">Ajouter batiment a acheter</a><br>
    </div>

    <div class="main-content">
    <h1>Bienvenue Au Admin Dashboard</h1>
    <div class="summary-cards">
        <div class="card">
            <h3>Batiment Louer</h3>
            <p>123</p> <!-- Replace with actual data -->
        </div>
        <div class="card">
            <h3>Batiment Vendue </h3>
            <p>456</p> <!-- Replace with actual data -->
        </div>
    </div>
    <!-- New sections start here -->
    <div class="recent-properties">
    <h2>Batiment Ajouter </h2>
    <div class="property">
        <h3>Property 1</h3>
        <img src="../assets/images/1.jpg" alt="Image of Property 1">
        <p>Description de batiment Ajouter.</p>
    </div>
    <div class="property">
        <h3>Property 2</h3>
        <img src="../assets/images/2.jpg" alt="Image of Property 2">
        <p>Description de batiment Ajouter.</p>
    </div>
    <div class="property">
        <h3>Property 3</h3>
        <img src="../assets/images/3.jpg" alt="Image of Property 3">
        <p>Description de batiment Ajouter.</p>
    </div>
    <div class="property">
        <h3>Property 4</h3>
        <img src="../assets/images/4.jpg" alt="Image of Property 4">
        <p>Description de batiment Ajouter.</p>
    </div>
    <div class="property">
        <h3>Property 5</h3>
        <img src="../assets/images/5.jpg" alt="Image of Property 5">
        <p>Description de batiment Ajouter.</p>
    </div>
</div>
<div class="recent-contacts">
    <h2>contact Ajouter</h2>
    <div class="contact">
        <h3>Contact 1</h3>
        <p>Description du contact.</p>
    </div>
    <div class="contact">
        <h3>Contact 2</h3>
        <p>Description du contact.</p>
    </div>
    <div class="contact">
        <h3>Contact 3</h3>
        <p>Description du contact.</p>
    </div>
    <div class="contact">
        <h3>Contact 4</h3>
        <p>Description du contact.</p>
    </div>
    <div class="contact">
        <h3>Contact 5</h3>
        <p>Description du contact.</p>
    </div>
</div>
</body>
</html>
</body>
</html>