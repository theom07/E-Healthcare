<?php

include("connection.php");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Healthcare</title>
    <style>
      .content {
        padding: 20px;
        width: 100%;
        height: 100%;
        background-color: rgb(96, 165, 255);
        opacity: 65%;
        color: white;
        text-align: center;
        border-radius: 20px;
      }
      .discription {
        display: flex;
        padding: 40px;
        text-align: justify;
        align-items: center;
        justify-content: center;
        gap: 20px;
      }
      p {
        width: 500px;
        font-size: larger;
      }
      img {
        filter: drop-shadow(-5px -5px 12px rgba(0, 217, 255, 0.3))
          drop-shadow(10px 10px 10px rgb(1, 33, 102))
          drop-shadow(20px 20px 20px rgba(0, 48, 136, 0.2));
      }
      h1,h2 {
        animation: fadeIn 1.5s ease-in-out;
      }
      @keyframes fadeIn {
        from {
          opacity: 0;
        }

        to {
          opacity: 10;
        }
      }


      .hrtage {
        margin: 20px;
        border-top: 4px solid white;
        border-radius: 5px;
        text-align: center;
        line-height: 100px;
        position: relative;
        animation-duration: 2s;
        animation-name: hr;
        animation-iteration-count: 1;
        animation-timing-function: ease-in;
        cursor: pointer;
      }

      @keyframes hr {
        from {
          width: 0%;
        }

        to {
          width: 97%;
        }
      }
      video{
        width: 700px;
        height: 400px;
        border: 4px solid white;
        border-radius: 20px;
        filter: drop-shadow(10px 10px 12px rgba(2, 112, 255, 0.3))
          drop-shadow(10px 10px 10px rgb(0, 81, 255))
          drop-shadow(20px 20px 20px rgba(0, 48, 136, 0.2));
      }
      
      .videos{
        margin-bottom: 250px;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="img/icon.png" />
  </head>
  <body
    style="
      background-color: lightblue;
      background-image: url('bg-image.png');
      background-blend-mode: darken;
      background-repeat: no-repeat;
      background-size: cover;
    "
  >
    <header>
      <nav class="main-nav">
        <a href="#"><img src="img/logo.png" class="logo" /></a>
        <ul class="navlinks">
          <li><a href="#">Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
          <a href="login.php"
            ><button style="--c: #001a8d">Sign in</button></a
          >
        </ul>
      </nav>
    </header>
    <section class="content-container">
      <div class="content">
        <h1 style="font-size: xx-large; ">Welcome to e-Healthcare</h1>
        <div class="discription">
          <img src="img/home-img.png" alt="img" width="400px" height="300px" />
          <p>
            Welcome to E-Healthcare, your trusted platform for all your
            healthcare needs. Our home page serves as the gateway to a world of
            medical expertise, providing users with intuitive navigation and
            essential features tailored to their healthcare requirements.
          </p>
        </div>
        <br />
        <hr class="hrtage"/>
        <br />
        <div class="videos">
          <h2>Our Features</h2>
          <center><p>
            Know more about us
          </p></center>
          <video src="video/video.mp4" controls></video>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social-icon-s">
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
      </ul>
      <p style="text-align: center;">&copy;2024 e-healthcare | All Rights Reserved</p>
    </footer>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>

</html>
