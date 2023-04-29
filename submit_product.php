<?php
// Database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$id = $_POST['id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_description = $_POST['product_description'];
$product_image = $_FILES['product_image']['name'];

// Insert data into SQL database
$sql = "INSERT INTO products (id, product_name, product_price, product_description, product_image)
VALUES ('$id', '$product_name', '$product_price', '$product_description', '$product_image')";

if (mysqli_query($conn, $sql)) {
    echo "New product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>