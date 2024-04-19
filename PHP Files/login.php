<?php
session_start(); // Start a new session or resume the existing one
include 'db.php'; // Include your database connection

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Query to find the user
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify password
        if ($password === $user['password']) {
            // Authentication successful
            $_SESSION['user_id'] = $user['id']; // Store user id in session
            header("Location: ../shop.php"); // Redirect to home page
            exit;
        } else {
            // Authentication failed
            echo "<script>alert('Invalid email or password.'); window.location='../signIn.html';</script>";
        }
    } else {
        // No user found
        echo "<script>alert('Invalid email or password.'); window.location='../signIn.html';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
