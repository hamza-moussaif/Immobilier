<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/Achat.css">
    <title>Document</title>
    <style>
        .building-card{
            border-radius: 30px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px;


        }
       a button{
            background-color: #4CAF50;
            border: none;
            border-radius: 10px;
            padding: 10px 24px;
            margin: auto;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            color: white;
        }
        img{
            border-top-right-radius:30px ;
            border-top-left-radius:30px ;
        }
    </style>
</head>

<body>
    <?php
        include_once '../components/Nav.php';
    ?>
<div class="all-cards">

    <div class="building-card">
        <img src="../assets/images/1.jpg" alt="Building 1">
        <div class="building-details">
            <h2>Building 1</h2>
            <p>Description of Building 1</p>
            <a href="./placeorder.php"><button>place order</button></a>

        </div>
    </div>
    
    <div class="building-card">
        <img src="../assets/images/2.jpg" alt="Building 2">
        <div class="building-details">
            <h2>Building 2</h2>
            <p>Description of Building 2</p>
            <a href=""><button>place order</button></a>
        </div>
    </div>
    <div class="building-card">
        <img src="../assets/images/3.jpg" alt="Building 2">
        <div class="building-details">
            <h2>Building 2</h2>
            <p>Description of Building 2</p>
            <a href=""><button>place order</button></a>
        </div>
    </div>
    <div class="building-card">
        <img src="../assets/images/4.jpg" alt="Building 2">
        <div class="building-details">
            <h2>Building 2</h2>
            <p>Description of Building 2</p>
            <a href=""><button>place order</button></a>
        </div>
    </div>
    <div class="building-card">
        <img src="../assets/images/5.jpg" alt="Building 2">
        <div class="building-details">
            <h2>Building 2</h2>
            <p>Description of Building 2</p>
            <a href=""><button>place order</button></a>
        </div>
    </div>
    <div class="building-card">
        <img src="../assets/images/6.jpg" alt="Building 2">
        <div class="building-details">
            <h2>Building 2</h2>
            <p>Description of Building 2</p>
            <a href=""><button>place order</button></a>

        </div>
    </div>
</div>
</body>

</html>