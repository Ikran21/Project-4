<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstateEase - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="homepage.php">Home</a>
        <a href="homepage.php#signup">Signup</a>
        <a href="login.php">Login</a>
        <img src="logo.png">
    </div>
    <br>
    <br>
    <div class="login-form">
        <form action="login-submit.php" method="POST">
            <h1>Login</h1>
            <p>Welcome back to EstateEase!</p>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <img src="logo.png">
        </form>
    </div>
</body>
</html>