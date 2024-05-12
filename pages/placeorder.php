<?php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $buildingName = $_POST['building_name'];
    $buildingAddress = $_POST['building_address'];
    $buildingType = $_POST['building_type'];
    $buildingSize = $_POST['building_size'];

    // Validate the form data (you can add your own validation rules here)

    // Process the order
    $orderId = placeOrder($buildingName, $buildingAddress, $buildingType, $buildingSize);

    // Display success message
    echo "Order placed successfully! Your order ID is: " . $orderId;
}

// Function to place the order
function placeOrder($name, $address, $type, $size) {
    // Add your logic here to save the order to the database or perform any other necessary actions

    // For now, let's just generate a random order ID
    $orderId = uniqid();

    return $orderId;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/placeorder.css">
    <title>Document</title>
</head>
<body>
    <?php include_once '../components/Nav.php' ?>
    <div class="place-order">
    <form method="POST" action="">
    <label for="building_name">Building Name:</label>
    <input type="text" name="building_name" id="building_name" required><br>

    <label for="building_address">Building Address:</label>
    <input type="text" name="building_address" id="building_address" required><br>

    <label for="building_type">Building Type:</label>
    <input type="text" name="building_type" id="building_type" required><br>

    <label for="building_size">Building Size:</label>
    <input type="text" name="building_size" id="building_size" required><br>

    <input type="submit" class="plcorder" value="Place Order">
</form>
    </div>

    
</body>
</html>
<!-- HTML form to capture the building details -->
