<?php include("headers.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>My Projects</title>
</head>
<body>
   
    <h1>Projects</h1>
    <script src="js/jav.js"></script>
    <input type="text" id="searchInput" placeholder="Search for projects...">
  
    <ul id="projectList">
        <li>
            <div class="article-container">
                <h3 class="article-heading">Web design project</h3>
                <img src="img.jpg" alt="" height="250px" width="300px">
                <p class="article-text">Developed a website for ABC Company</p>
                <progress value="80" max="100"></progress>
            </div>
        </li>
        <li>
            <div class="article-container">
                <h3 class="article-heading">Computer Repairing and Maintenance</h3>
                <img src="board.jpg" alt="" height="250px" width="300px">
                <p class="article-text">Maintained and repaired computers for <br> High Tech Solution Company</p>
                <progress value="65" max="100"></progress>
            </div>
        </li>
        <li>
            <div class="article-container">
                <h3 class="article-heading">Cloud Computing</h3>
                <img src="cloud.jpg" alt="" height="250px" width="300px">
                <p class="article-text">Worked on a software development project on <br> cloud computing at Luke International</p>
                <progress value="50" max="100"></progress>
            </div>
        </li>
        <li>
            <div class="article-container">
                <h3 class="article-heading">Networking</h3>
                <img src="net.jpg" alt="" height="250px" width="300px">
                <p class="article-text">Teamed up with network engineers from Polytechnic. <br> Our project was to design and install network at LIN Company</p>
                <progress value="75" max="100"></progress>
            </div>
        </li>
    </ul>
    
</body>
</html>
