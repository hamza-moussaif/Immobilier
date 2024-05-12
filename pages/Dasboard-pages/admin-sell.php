<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Add Property for Sale</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
    width: 200px;
    height: 100vh;
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
            flex-grow: 1;
            padding: 20px;
        }

        .main-content form {
            background: linear-gradient(to right, #f9f9f9, #eef1f5);
            padding: 20px;
            border-radius: 5px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .main-content form input,
        .main-content form textarea {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
            margin-bottom: 10px;
        }

        .main-content form input:focus,
        .main-content form textarea:focus {
            box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.2);
        }

        .main-content form button {
            padding: 10px 20px;
            background: linear-gradient(to right, #333, #444);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .main-content form button:hover {
            background: linear-gradient(to right, #444, #555);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="../Dashboard.php">Dashboard</a><br>
        <a href="./admin-rent.php">Ajouter Batiment a louer</a><br>
        <a href="./admin-sell.php">Ajouter batiment a acheter</a><br>
    </div>

    <div class="main-content">
        <h1>Ajouter batiment a Acheter</h1>
        <form action="add_property.php" method="post">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="address" placeholder="Address">
            <input type="text" name="city" placeholder="City">
            <input type="text" name="state" placeholder="State">
            <input type="text" name="zip" placeholder="Zip">
            <textarea name="description" placeholder="Description"></textarea>
            <button type="submit">Add Property</button>
        </form>
    </div>
</body>
</html>