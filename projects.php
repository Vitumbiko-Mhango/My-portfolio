<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>My Projects</title>
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
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="skills.php">skills</a></li>
                  </ul>
                </nav>

   
    <h1>Projects</h1>
    <script src="jav.js"></script>
    <input type="text" id="searchInput" placeholder="Search for projects...">
  
    <ul id="projectList">
        <li>
            <div class="article-container">
                <h3 class="article-heading">Web design project</h3>
                <img src="images/img.jpg" alt="" height="250px" width="300px">



                
                
                <?php
                // SQL query to retrieve data from the database
                    $sql = "SELECT * FROM projects";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["Web design project"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>




            </div>
        </li>
        <li>
            <div class="article-container">
                <h3 class="article-heading">Computer Repairing and Maintenance</h3>
                <img src="images/board.jpg" alt="" height="250px" width="300px">
                
                    

                <?php
                    $sql = "SELECT * FROM projects";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["Computer Repairing and Maintenance"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                


                
            </div>
        </li>
        <li>
            <div class="article-container">
                <h3 class="article-heading">Cloud Computing</h3>
                <img src="images/cloud.jpg" alt="" height="250px" width="300px">
                
                    
                <?php
                    $sql = "SELECT * FROM projects";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["Cloud Computing"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>



            </div>
        </li>
        <li>
            <div class="article-container">
                <h3 class="article-heading">Networking</h3>
                <img src="images/net.jpg" alt="" height="250px" width="300px">
                
                    

                <?php
                    $sql = "SELECT * FROM projects";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "" . $row["Networking"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                



            </div>
        </li>
    </ul>

    <section class="last">
    <footer>
    <?php
                // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["footer"]. "<br>";
        }
    } else {
        echo "0 results";
    }

     // Close the connection
     $conn->close();
    ?>

</footer>
</secttion>
</body>
</html>
