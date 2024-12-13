<?php
$servername = "localhost";  
$username = "iahmed20";      
$password = "iahmed20";       
$dbname = "iahmed20";      
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>