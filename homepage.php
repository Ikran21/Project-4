<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstateEase Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="homepage.php">Home</a>
        <a href="#signup">Signup</a>
        <a href="login.php">Login</a>
        <img src="logo.png" alt="EstateEase Logo">
    </div>

    <div class="about-section">
        <h1>What we do at EstateEase</h1>
        <h2>We are a one-stop solution for property transactions, offering advanced tools to search, list, and manage properties efficiently.</h2>
        <h1>Our Services</h1>
        <ul>
            <li>Property listings with detailed information.</li>
            <li>Secure buyer and seller dashboards.</li>
            <li>Easy property search and wishlist features.</li>
        </ul>
        <h1>Why Choose Us?</h1>
        <ul>
            <li>User-friendly design for quick navigation.</li>
            <li>Secure transactions and data privacy.</li>
            <li>Personalized tools to meet your needs.</li>
        </ul>
    </div>
    <br>

    <div id="signup">
        <form action="signup-submit.php" method="POST" onsubmit="return validateForm()">
            <h1>Sign Up</h1>
            <p>Create an Account to start buying and selling property today at EstateEase!</p>

            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Re-enter password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit">Sign Up</button>
            <img src="logo.png" alt="EstateEase Logo">
        </form>
    </div>

    <script>
        function validateForm() {
            var firstname = document.getElementById("firstname").value;
            var lastname = document.getElementById("lastname").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (!firstname || !lastname || !email || !password || !confirmPassword) {
                alert("All fields must be filled out.");
                return false;
            }

            if (!email.includes("@")) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
