<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <title>Document</title>
    <style>
      footer {
        background-color: #010e1a; /* Adjust the background color as needed */
        color: #fff; /* Adjust the text color as needed */
        padding: 20px;
        text-align: center;
      }

      .social-media {
        margin-bottom: 10px;
      }

      .social-media a {
        display: inline-block;
        margin: 0 10px;
        color: #fff; /* Adjust the link color as needed */
        text-decoration: none;
      }

      .social-media a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="content">
        <!-- logo -->
        <div class="logo">
          <a href="/Pages/main.html"
            ><img src="./components/images/robot.png"
          /></a>
        </div>
        <!-- website name or title -->
        <span>RoboCollab</span>
        <!-- search bar -->
        

        <!-- buttons -->
        <div class="buttons">
          <a href="./pages/loginform.html" class="nav-btn"
            ><strong>Sign in</strong></a
          >
          <a href="registration.html" class="nav-btn"><strong>Sign up</strong></a>
        </div>
      </div>
    </header>
    <section>
      <div class="slideshow-container">
        <!-- <div class="overlay"></div> -->

        <div class="mySlides">
          <div class="numbertext">1 / 3</div>
          <div class="slide1" id="slide1">
            <div class="text-content">
              <h1>Welcome to RoboCollab</h1>
              <h3>
                A thriving platform designed for the passionate community of
                robotics enthusiasts and innovators
              </h3>
            </div>
            <!-- <div class="image-container">
                  <img src="/components/images/Designer-removebg-preview.png" alt="" height="400px" width="400px">
                </div> -->
          </div>
        </div>

        <div class="mySlides">
          <div class="numbertext">2 / 3</div>
          <div class="slide1" id="slide2">
            <div class="text-content">
              <h1>Share and collabarate</h1>
              <h3>
                Share and view open source robot designs and collabarate on
                different projects with other Robotians
              </h3>
            </div>
            <!-- <div class="image-container">
                  <img src="/components/images/collaborate.png" alt="" height="380px" width="380px">               
              </div> -->
          </div>
        </div>

        <div class="mySlides">
          <div class="numbertext">3 / 3</div>
          <div class="slide1" id="slide3">
            <div class="text-content">
              <h1>SignUp & start</h1>
              <h3>
                Don't know from where to start ? number of list of project ideas
                are provided. Sign up now
              </h3>
            </div>
            <!-- <div class="image-container">
                  <img src="/components/images/robot_idea.png" alt="" height="380px" width="380px">
                </div> -->
          </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div style="text-align: center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>

      <div class="hero-section" id="heroSection">
        <div class="overlay"></div>
        <div class="slide1">
          <div class="hero-img">
            <img
              src="./components/images/hero-bg1-removebg-preview.png"
              alt=""
              height="500px"
              width="800px"
            />
          </div>
          <div class="hero-content reveal" id="heroContent">
            <h2>Our Mission</h2>
            <p>
              At RoboCollab, our mission is to empower individuals to explore
              the vast realm of robotics. We strive to break down barriers,
              making cutting-edge technology accessible to everyone. Our
              commitment to open-source principles ensures that knowledge flows
              freely, enabling innovation to flourish.
            </p>
            <button>Sign Up</button>
          </div>
        </div>
      </div>

      <div class="features-section">
        <div class="overlay"></div>
        <h1>What We Offer</h1>
        <div class="row1">
          <div class="card">
            <div class="image-box">
              <img src="./components/images/robot-design.jpg" alt="" />
            </div>
            <div class="card-content">
              <h2>Open Source Robot Designs</h2>
              <p>
                Explore a vast repository of open-source robot designs
                contributed by number of robot engineers in the world
              </p>
            </div>
          </div>

          <div class="card">
            <div class="image-box">
              <img src="./components/images/collaborative-2.png" alt="" />
            </div>
            <div class="card-content">
              <h2>Collaboration Hub</h2>
              <p>
                Connect with like-minded individuals, form teams, and
                collaborate on exciting robotics projects.
              </p>
            </div>
          </div>
        </div>
        <div class="row2">
          <div class="card">
            <div class="image-box">
              <img src="./components/images/idea.jpg" alt="" />
            </div>
            <div class="card-content">
              <h2>Project Ideas</h2>
              <p>
                Whether you're a seasoned engineer or a newcomer to robotics,
                you'll find a number of project ideas topics to kickstart your
                journey
              </p>
            </div>
          </div>
          <div class="card">
            <div class="image-box">
              <img src="./components/images/management.jpeg" alt="" />
            </div>
            <div class="card-content">
              <h2>Project Management</h2>
              <p>
                Create and share your projects,contribute to ongoing
                Repositories and upgrade your skills in the world of robotics
              </p>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="social-media">
          <div class="option-menu">
            <div class="options" title="notifications">
              <a href="#" target="_blank" rel="noopener noreferrer"
                ><i class="bi bi-facebook"></i
              ></a>
            </div>
            <div class="options" title="notifications">
              <a href="#" target="_blank" rel="noopener noreferrer"
                ><i class="bi bi-instagram"></i
              ></a>
            </div>
            <div class="options" title="notifications">
              <a href="#" target="_blank" rel="noopener noreferrer"
                ><i class="bi bi-twitter"></i
              ></a>
            </div>
            <div class="options" title="notifications">
              <a href="#" target="_blank" rel="noopener noreferrer"
                ><i class="bi bi-youtube"></i
              ></a>
            </div>
          </div>
        </div>
        <p>&copy; 2024 RoboCollab. All rights reserved.</p>
      </footer>
    </section>

    <script src="index.js"></script>
  </body>
</html>
