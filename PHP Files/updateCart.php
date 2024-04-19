<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
require 'db.php'; // Adjust the path as necessary

// Verify database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['user_id'])) {
    // Redirect if the user is not logged in
    echo "User not logged in. Redirecting to signIn.html"; // For debugging, replace with redirect later
    header('Location: ../signIn.html');
    exit;
}

if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $cartItemId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $userId = $_SESSION['user_id']; // Assuming you store user's ID in session

    // Debug POST data
    echo "<pre>POST Data:\n";
    var_dump($_POST);
    echo "</pre>";

    // Debug session user ID
    echo "<p>Session User ID: $userId</p>";

    // Prepare the SQL statement
    $sql = "UPDATE cart SET quantity = ? WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    
    if (false === $stmt) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
        exit;
    }
    
    if (!$stmt->bind_param("iii", $quantity, $cartItemId, $userId)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
        exit;
    }

    if ($stmt->execute()) {
        echo "Quantity updated successfully. Redirecting to cart.php"; // For debugging, replace with redirect later
        header('Location: ../cart.php?status=success&message=Item deleted');
        exit;
    } else {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
        header('Location: ../cart.php?status=error&message=Unable to delete item');
        exit;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "cart_item_id or quantity POST data not set.";
}
?>
