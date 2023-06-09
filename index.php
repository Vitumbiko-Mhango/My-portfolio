<?php include("headers.php"); ?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Vitumbiko Mhango Portifolio </title>
            <link rel="stylesheet" href="css/style.css">
            
        </head>
        <body onload="getCurrentDateTime()">

          
            <!-- <img src="mzuni2.png" alt="log"> -->

            <!-- homepage section -->

            <header class="header">            

    
                <h2 class="page-title">Vitumbiko Mhango</h2>

                <h1 id="greeting"></h1>
                <script src="js/jav.js"></script>
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
                    <img src="image.jpg" alt="" class="main-img">
                </div>
                <div class="about-heading-container">
                  <h2 class="about-heading">about me</h2>
                  <p class="about-para">
                    My name is Vitumbiko Mhango, i am a second year student at Mzuzu University. i am a dedicated 
                    Software Engineer, and i have developed several android apps which has helped the community
                    in collection of data in an easy way. i have also created several projects for both students 
                    and for the University. 
                  </div>
                </p>

                    <!-- slideshow  -->  
                    <h2 >Featured Projects</h2>
                    <div class="slideshow-container">
                      <div class="slide">
                        <img src="img.jpg" height="250px" width="300px">
                      </div>
                      <div class="slide">
                        <img src="net.jpg" height="250px" width="300px">
                      </div>
                      <div class="slide">
                        <img src="board.jpg" height="250px" width="300px">
                      </div>
                    </div>
                    
                    
              </section>
              <!-- end of about section -->
              

              <section class="project-section">
                <h2 class="project-section-heading">projects</h2>

                
                <article class="project-article">

                  <div>
                    <h3 class="article-heading">Web development</h3>
                    <img src="img.jpg" alt="" height="250px" width = "300px">
                    <p class="article-text">developed a website for abc company</p>
                    <a href="www.abc.com">visit site</a>
                  
                <article class="project-article">
                  <div class="article-container">
                    <h3 class="article-heading">Computer Repairing and Maintanance</h3>
                    <img src="board.jpg".jpg" alt="" height="250px" width = "300px">
                    <p class="article-text">maintained and repaired computers for Abc company </p>
                    <a href="www.abc.com">visit site</a>
                  </div>
                </article>
              

              </section>
            
              <section class="my-skills">
                
                
                <h3 class="space">SKILLS</h3>
                  <h4>Website Development</h4>
                  <p>
                    <u >Tools used</u>
                    
                      <li>
                        text editors eg visual studio code
                      </li>
                      <li>
                        debuggers eg chrome developer tools
                      </li>
                      <li>
                        browser extensions eg AdBlock  
                      </li>
                    
                    <u>Tecnologies used</u>
                      <li>HTML</li>
                      <li>CSS</li>
                      <li>Java script</li>
                  </p>
                    <br> <br>
                  <h4>Software Development</h4>
                  <p class="tool">
                    
                    <u>Tools used</u>
                      <li>
                        Intergrated development environment (IDEs) eg IntelliJ IDEA
                      </li>
                      <li>
                        Version control system eg GIT
                      </li>
                      <li>
                        Build tools eg maven and Gradle 
                      </li>
                    <u>Tecnologies used</u>
                      <li>Programming language eg Java and python

                      </li>
                      <li>
                        Web frmeworks eg Django and Spring
                      </li>
                      <li>
                        Database management systems eg MySQL and Oracle
                      </li>
                  </p>

              </section>

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

              <section class="last">
                <footer>
                  <h2 >Contacts</h2> <br>
                  <p>+265 884 207 696 / +265 995 764 949</p> 
                  <p>
                    Email : <a href="mailto:mhangovitumbiko100@gmail.com">mhangovitumbiko100@gmail.com</a> 
                  </p> <br>

                    <p>follow me on social media:</p>

                    <div class="contact">
                        <a href="http://www.facebook.com/Vitumbiko Mhango" >facebook</a> <br>
                      
                        <a href="http://www.twitter.com/Vitumbiko Mhango" >Twitter</a> <br>
                      
                        <a href="http://www.instagram.com/Vitumbiko Mhango" >Instagram</a>
                      </div> 

                      
                  

                </footer>
              </section>
              <script src="js/jav.js"></script>
              
              </body>
          </html>