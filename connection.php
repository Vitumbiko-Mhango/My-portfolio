<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create a function to establish a database connection
function connectDatabase() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
