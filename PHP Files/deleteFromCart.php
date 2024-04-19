<?php
session_start();
require 'db.php'; // Adjust the path as necessary

if (!isset($_SESSION['user_id'])) {
    // Redirect if the user is not logged in
    header('Location: ../signIn.html');
    exit;
}

if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $userId = $_SESSION['user_id']; // Assuming you store the user's ID in session

    // Delete query
    $sql = "DELETE FROM cart WHERE product_id = ? AND user_id = ?"; // Adding user_id for safety
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $productId, $userId); // Assuming both are integers
    
    if ($stmt->execute()) {
        // Redirect back to the cart page with a success message
        header('Location: ../cart.php?status=success&message=Item deleted');
        exit;
    } else {
        // Redirect back to the cart page with an error message
        header('Location: ../cart.php?status=error&message=Unable to delete item');
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
