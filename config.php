<?php
$servername = "localhost";  
$username = "iahmed20";      
$password = "iahmed20";       
$dbname = "iahmed20";      

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) //{
//    echo "Database connection successful.<br>";
//} else {
//    die("Database connection failed: " . mysqli_connect_error());
//}
// SQL to create 'users' table
$create_users_table = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute 'users' table creation
if ($conn->query($create_users_table) === TRUE) //{
//    echo "Table 'users' created successfully (or already exists).<br>";
//} else {
//    echo "Error creating 'users' table: " . $conn->error . "<br>";
//}

// SQL to create 'properties' table
$create_properties_table = "CREATE TABLE IF NOT EXISTS properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    seller_id INT NOT NULL,
    image INT NOT NULL,
    location VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    bedrooms INT NOT NULL,
    bathrooms INT NOT NULL,
    sqft INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (seller_id) REFERENCES users(id)
)";

// Execute 'properties' table creation
if ($conn->query($create_properties_table) === TRUE) //{
//    echo "Table 'properties' created successfully (or already exists).<br>";
//} else {
//    echo "Error creating 'properties' table: " . $conn->error . "<br>";
//}
?>
