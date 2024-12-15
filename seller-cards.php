<?php
session_start();
require_once "config.php";

$sql = "SELECT p.id, p.location, p.price, p.bedrooms, p.bathrooms, p.sqft, p.created_at, u.firstname, u.lastname
        FROM properties p
        INNER JOIN users u ON p.seller_id = u.id
        ORDER BY p.created_at DESC";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="row">';

    // Loop through for each property
    while ($row = mysqli_fetch_assoc($result)) {
        $property_id = $row['id'];
        $location = $row['location'];
        $price = number_format($row['price'], 2);
        $bedrooms = $row['bedrooms'];
        $bathrooms = $row['bathrooms'];
        $sqft = $row['sqft'];
        $created_at = date('F j, Y', strtotime($row['created_at']));
        $seller_name = $row['firstname'] . ' ' . $row['lastname'];

        // Print all of the property information into a card
        echo "<div>
                <div class='card'>
                    <img src='path/to/property-image.jpg' class='card-img-top' alt='Property Image'>
                    <div class='card-body'>
                        <p class='card-title'>$location</p>
                        <p class='card-text'>Price: $$price</p>
                        <p class='card-text'>Seller: $seller_name</p>
                        <p class='card-text'>Bedrooms: $bedrooms</p>
                        <p class='card-text'>Bathrooms: $bathrooms</p>
                        <p class='card-text'>Size: $sqft sqft</p>
                        <p class='card-text'>Listed on: $created_at</p>
                        <a href='property-details.php?id=$property_id'>View Details</a>
                    </div>
                </div>
            </div>";
    }
    echo "</div>";
} else {
    echo "<div>
            <p>Please add a new property</p>
        </div>";
}

mysqli_close($conn);
?>