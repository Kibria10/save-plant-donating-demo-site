<?php 
    include_once './includes/header.php'
?>

    <section class="home">
      <video class="video-slide active" src="1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="2.mp4" autoplay muted loop></video>
      <video class="video-slide" src="3.mp4" autoplay muted loop></video>
      <video class="video-slide" src="4.mp4" autoplay muted loop></video>
      <video class="video-slide" src="5.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1>We Can</h1>
         
        <h2><span> Save Plant Save Planet!</span></h2>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="signup.php">Read More</a>
      </div>
      <div class="content">
        <h1>Donate Money<br><span>Get Coins!</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="signup.php">Read More</a>
      </div>
      <div class="content">
        <h1>View Plant Feed<br><span></span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>We can</h1>
        <h2><span>Bring Change Together</span></h2>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>Feel Nature!<br><span>Relax</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#">Read More</a>
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

    <script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>

  </body>
</html>
