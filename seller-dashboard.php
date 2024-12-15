<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="navbar">
        <a href="homepage.php">Home</a>
        <a href="#signup">Signup</a>
        <a href="login.php">Login</a>
        <img src="logo.png" alt="EstateEase Logo">
    </div>
    <br>
    <div class="title">
        <div>
            <?php
            session_start();
            
            if (isset($_SESSION["user_id"])) {
                $user_id = $_SESSION["user_name"];
                echo "<h1>Welcome $user_id</h1>";
            }
            ?>
        </div>
        <div class="addCard">
            <a href="new-card.php"><b>Add a property<b></a>
        </div>
    </div>
    <br><br>
    <?php include 'seller-cards.php';?>
    
</body>
</html>