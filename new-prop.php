<?php
session_start();
require_once "config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure all required form data is received
    if (!isset($_POST["image"], $_POST["location"], $_POST["price"], $_POST["bedrooms"], $_POST["bathrooms"], $_POST["sqft"])) {
        die("Error: Missing required form data.");
    }

    if (!isset($_SESSION['user_id'])) {
        die("Error: User is not logged in.");
    }

    $image = $_POST["image"];
    $location = $_POST["location"];
    $price = $_POST["price"];
    $bedrooms = $_POST["bedrooms"];
    $bathrooms = $_POST["bathrooms"];
    $sqft = $_POST["sqft"];
    $seller_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO properties (seller_id, image, location, price, bedrooms, bathrooms, sqft) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iisdiii", $seller_id, $image, $location, $price, $bedrooms, $bathrooms, $sqft);
    
    if ($stmt->execute()) {
        echo "Property added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

header("location:javascript://history.go(-1)");
$conn->close();
?>
