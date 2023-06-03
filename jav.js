
window.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.getElementById('searchInput');
    var projectList = document.getElementById('projectList');
    var projects = projectList.getElementsByTagName('li');
  
    searchInput.addEventListener('keyup', function() {
      var searchQuery = searchInput.value.toLowerCase();
  
      for (var i = 0; i < projects.length; i++) {
        var projectName = projects[i].textContent.toLowerCase();
        
        if (projectName.indexOf(searchQuery) > -1) {
          projects[i].style.display = 'block';
        } else {
          projects[i].style.display = 'none';
        }
      }
    });
  });


function getGreeting() {
    var currentTime = new Date();
    var currentHour = currentTime.getUTCHours();

    var greeting;

    if (currentHour < 12) {
        greeting = "Good Morning!";
    } else if (currentHour < 18) {
        greeting = "Good afternoon!";
    } else {
        greeting = "Good Evening!!";
    }

    return greeting;
}

var greetingElement = document.getElementById("greeting");
greetingElement.textContent = getGreeting();



/* slideshow */
window.addEventListener('DOMContentLoaded', function() {
    var slides = document.querySelectorAll('.slide');
    var currentSlide = 0;
  
    function showSlide(index) {
      if (index < 0 || index >= slides.length) {
        return;
      }
  
      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }
  
      slides[index].style.display = 'block';
    }
  
    function nextSlide() {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      showSlide(currentSlide);
    }
  
    // Automatically switch to the next slide every 3 seconds
    setInterval(nextSlide, 3000);
  
    // Show the first slide initially
    showSlide(currentSlide);
  });

  //progress bar
  function updateProgressBar(progress) {
    var progressBar = document.getElementById("progress");
    progressBar.style.width = progress + "%";
}

//current time
function getCurrentDateTime() {
  var currentDateTime = new Date();
  var datetimeString = currentDateTime.toLocaleString();

  document.getElementById("datetime").textContent = datetimeString;
}




