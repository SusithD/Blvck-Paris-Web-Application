<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../signIn.html');
    exit;
}

require '../PHP Files/db.php'; // Include your database connection file

if (isset($_POST['add_to_cart'])) {
    $userId = $_SESSION['user_id'];
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = 1; // or capture from form if you allow specifying quantity
    $color = $_POST['color']; // assuming you have a way to capture this
    $size = $_POST['size']; // assuming you have a way to capture this

    $sql = "INSERT INTO cart (user_id, product_id, product_name, price, quantity, color, size) VALUES (?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters to the prepared statement
        $stmt->bind_param("iisdsis", $userId, $productId, $productName, $price, $quantity, $color, $size);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Added to cart successfully.');</script>";
            echo "<script>window.location.href='../shop.php';</script>";
        } else {
            echo "<script>alert('Error adding to cart.');</script>";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close database connection if it's not needed anymore
    $conn->close();
}
?>
