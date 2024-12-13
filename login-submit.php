<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["loggedin"] = true;
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["email"] = $row["email"];
            
            header("Location: seller_dashboard.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Email not found";
    }
}
$conn->close();
?>