<!DOCTYPE html>
<html lang="en">
<head>
    <title>homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portfolio";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<nav class="navigation">
                  <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="projects.php">projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="skills.php">skills</a></li>
                  </ul>
                </nav>

                
    <center>
    <h1>CONTACTS </h1>

    <?php
                // SQL query to retrieve data from the database
    $sql = "SELECT * FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["contacts"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>

     </center> 


</body>
</html>