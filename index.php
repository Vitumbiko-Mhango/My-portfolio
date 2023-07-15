<!DOCTYPE html>
    <html>
        <head>
            <title>Vitumbiko Mhango Portifolio </title>
            <link rel="stylesheet" href="style.css">
            
        </head>
        <body onload="getCurrentDateTime()">

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





            <!-- <img src="mzuni2.png" alt="log"> -->

            <!-- homepage section -->

            <header class="header">
                <nav class="navigation">
                  <ul>
                    <li><a href="projects.php">projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="skills.php">skills</a></li>
                  </ul>
                </nav>
          

    
                <h2 class="page-title">Vitumbiko Mhango</h2>

                <h1 id="greeting"></h1>
                <script src="jav.js"></script>
                <p style="color: blue; text-align: center; font-size: 20px;"  id="datetime"></p>
                      

                <div class="main-heading">
                    <h1 class="main-text">
                      <br>
                      <marquee behavior="scroll" direction="left" width = "600px">game changer
                      </marquee> 
                    </h1>
                                   
                    <p class="main-subtext">
                      <marquee behavior="altermate" direction="up" height ="300px" width ="700px">
                        It's really amazing to be in the game, we design websites of your choice.
                      </marquee> </p>

                      
                </div>
              </header>
              <!-- end of homepage section -->

            <!-- start of about section -->
            <section class="about-section">
                <div class="img-container">
                    <img src="images/image.jpg" alt="" class="main-img">
                </div>
                <div class="about-heading-container">
                  
                  
    <?php
                // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["aboutme"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>




              
              </div>
                    <!-- slideshow  -->  
                    <h2 >Featured Projects</h2>
                    <div class="slideshow-container">
                      <div class="slide">
                        <img src="images/img.jpg" height="250px" width="300px">
                      </div>
                      <div class="slide">
                        <img src="images/net.jpg" height="250px" width="300px">
                      </div>
                      <div class="slide">
                        <img src="images/board.jpg" height="250px" width="300px">
                      </div>
                    </div>
                    
                    
              </section>
              <!-- end of about section -->
              

              <section class="project-section">
                <h2 class="project-section-heading">projects</h2>

                
                <article class="project-article">

                  <div>
                    <h3 class="article-heading">Web development</h3>
                    <img src="images/img.jpg" alt="" height="250px" width = "300px">
                    <p class="article-text">developed a website for abc company</p>
                    <a href="www.abc.com">visit site</a>
                  
                <article class="project-article">
                  <div class="article-container">
                    <h3 class="article-heading">Computer Repairing and Maintanance</h3>
                    <img src="images/board.jpg".jpg" alt="" height="250px" width = "300px">
                    <p class="article-text">maintained and repaired computers for Abc company </p>
                    <a href="www.abc.com">visit site</a>
                  </div>
                </article>
              

              </section>
            
              <section class="my-skills">
                
                
                <h3 class="space">SKILLS</h3>
                  <h4>Website Development</h4>
                  
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








                  <form id="contactForm">
                <div>
                  <label for="name">Name:</label> <br>
                  <input type="text" id="name" name="name" required><br> <br> 
                  <span id="nameError" class="error"></span>  
                </div>
                <div>
                  <label for="email">Email:</label> <br> 
                  <input type="email" id="email" name="email" required> <br> <br> 
                  <span id="emailError" class="error"></span>
                </div>
                <div>
                  <label for="message">Message:</label> <br> 
                  <textarea id="message" name="message" required></textarea><br> <br>
                  <span id="messageError" class="error"></span>
                </div>
                <div>
                  <button type="submit">Submit</button> 
                </div>
              </form>
              </section>

          

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
              </section>
              <script src="jav.js"></script>
              
              </body>
          </html>