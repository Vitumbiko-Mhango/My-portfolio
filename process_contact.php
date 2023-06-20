<?php
require_once("connection.php"); // Include the file with database connection

// Connect to the database
$conn = connectDatabase();

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Prepare the SQL statement to insert data into the feedback table
$sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    // Close the database connection
    $conn->close();

    // Display an alert to the user
    echo "<script>alert('Thank you for your feedback!');</script>";

    // Redirect the user to the home page
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
