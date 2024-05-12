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

    // Replace 'field1', 'field2', etc. with your actual field names
    $field1 = mysqli_real_escape_string($conn, $_POST['field1']);
    $field2 = mysqli_real_escape_string($conn, $_POST['field2']);
    // Add more fields as necessary

    $sql = "UPDATE Buildings SET field1='$field1', field2='$field2' WHERE id='$_POST[id]'";
    if (mysqli_query($conn, $sql)) {
        echo "Building updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>