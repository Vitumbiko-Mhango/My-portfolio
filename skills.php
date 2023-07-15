<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Myskills</title>
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
    <h1>SKILLS</h1>

                <?php
                // SQL query to retrieve data from the database
                    $sql = "SELECT * FROM home";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["myskills"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>



<footer>

</footer>
</body>