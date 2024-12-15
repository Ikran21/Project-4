<?php
require_once "config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure all required form data is received
    if (!isset($_POST["image"], $_POST["location"], $_POST["price"], $_POST["badrooms"], $_POST["bathrooms"], $_POST["sqft"])) {
        die("Error: Missing required form data.");
    }

    $image = $_POST["image"];
    $location = $_POST["location"];
    $price = $_POST["price"];
    $bedrooms = $_POST["bedrooms"];
    $bathrooms = $_POST["bathrooms"];
    $sqft = $_POST["sqft"];

    $stmt = $mysqli->prepare("INSERT INTO properties (image, location, price, bedrooms, bathrooms, sqft) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isdiid", $image, $location, $price, $bedrooms, $bathrooms, $sqft);
    $stmt->execute();
    $stmt->close();
}
$conn->close();
?>
