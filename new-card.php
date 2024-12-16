<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Property</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="homepage.php">Home</a>
        <a href="homepage.php#signup">Signup</a>
        <a href="login.php">Login</a>
        <img src="logo.png" alt="EstateEase Logo">
    </div>
    <br>
    <br>
    <div class="newPropForm">
        <form action="new-prop.php" method="POST">
            <h1>New Property</h1>
            <p>Add property info below:</p>

            <p>Select an image:</p>
            <input type="radio" id="image1" name="image" value="1">
            <label for="image1"><img src="house1.webp" alt="House1"></label>
            
            <input type="radio" id="image2" name="image" value="2">
            <label for="image2"><img src="house2.webp" alt="House2"></label>
            
            <input type="radio" id="image3" name="image" value="3">
            <label for="image3"><img src="house3.webp" alt="House3"></label>
            
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <label for="bedrooms">Number of Bedrooms:</label>
            <input type="number" id="bedrooms" name="bedrooms" step="1" min="0" required>
            
            <label for="bathrooms">Number of Bathrooms:</label>
            <input type="number" id="bathrooms" name="bathrooms" step="1" min="0" required>
            
            <label for="sqft">SQFT:</label>
            <input type="number" id="sqft" name="sqft" step="1" required>
            
            <button type="submit">Submit</button>
            <br>
            <br>
            <a href="seller-dashboard.php"> Back to Dashboard</a>
        </form>
    </div>
</body>
</html>