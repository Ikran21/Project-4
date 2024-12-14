<?php
session_start();
require_once "config.php";

$sql = "SELECT p.id, p.location, p.price, p.bedrooms, p.bathrooms, p.sqft, p.created_at, u.firstname, u.lastname
        FROM properties p
        INNER JOIN users u ON p.seller_id = u.id
        ORDER BY p.created_at DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Start of the HTML structure
    echo '<div class="container mt-4">';
    echo '<div class="row">';

    // Loop through the result and create a card for each property
    while ($row = mysqli_fetch_assoc($result)) {
        $property_id = $row['id'];
        $location = $row['location'];
        $price = number_format($row['price'], 2); // Format price with two decimal places
        $bedrooms = $row['bedrooms'];
        $bathrooms = $row['bathrooms'];
        $sqft = $row['sqft'];
        $created_at = date('F j, Y', strtotime($row['created_at'])); // Format date
        $seller_name = $row['firstname'] . ' ' . $row['lastname'];

        // Generate the HTML card for the property
        echo '<div class="col-md-4 mb-4">'; // Column for each card (adjust for your layout)
        echo '<div class="card">';
        echo '<img src="path/to/property-image.jpg" class="card-img-top" alt="Property Image">'; // Add image (optional)
        echo '<div class="card-body">';
        echo "<p class='card-title'>$location</p>";
        echo "<p class='card-text'><strong>Price:</strong> $$price</p>";
        echo "<p class='card-text'><strong>Seller:</strong> $seller_name</p>";
        echo "<p class='card-text'><strong>Bedrooms:</strong> $bedrooms</p>";
        echo "<p class='card-text'><strong>Bathrooms:</strong> $bathrooms</p>";
        echo "<p class='card-text'><strong>Size:</strong> $sqft sqft</p>";
        echo "<p class='card-text'><strong>Listed on:</strong> $created_at</p>";
        echo "<a href='property-details.php?id=$property_id' class='btn btn-primary'>View Details</a>";
        echo '</div>'; // .card-body
        echo '</div>'; // .card
        echo '</div>'; // .col-md-4
    }

    echo "</div>
        </div>";
} else {
    echo "<button></button>";
}

$mysqli -> close()
?>
