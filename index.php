<?php

session_start();

if (!isset($_SESSION['ID_user'])) {
  header("Location: /loginform.php");
}
?>
<!DOCTYPE html>
<html lang="pt-bt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:wght@500&family=Roboto:wght@500&family=Inter&display=swapfamily=Palanquin+Dark:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@400;600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@400;600&family=Mukta:wght@700&display=swap" rel="stylesheet">
  <title>ayt</title>


</head>

<body>
  <nav>
    <div class="logo">
      <img src="imghome/Logo.png" alt="n foi">
    </div>
    <ul class="nav-links">
      <li><a href="loginform.php?logout=true">Logout</a></li>
      <li><a href="#" class="active_1">Home</a></li>
      <li><a href="experimente.php">Experimente</a></li>
      <li><a href="sobre.html">Sobre AYT</a></li>
    </ul>
  </nav>
  <section class="hero-section">
    <div class="hero-section__text">
      <h1 class="titulo">Desperte <br> o que tem de mais <br> belo em você!</h1>
      <a href="formulario.php" class="comecar-btn">
        Comece agora
      </a>
    </div>
    <div class="photos">
      <img src="imghome/hero-image.png" alt="">
    </div>
  </section>
  <main class="bk">
    <div class="slideshow-container">

      <div class="mySlides fade">
        <p class="p1">
          <img src="imghome/Vector (2).png" alt="">
          <br><br> Levar aquilo que traz harmonia e felicidade a todos é sem dúvidas nossa missão! <br><br>
          <img src="imghome/Vector.png" alt="">
        </p>
        <div class="text">Lucas Meirelles / CEO</div>
      </div>

      <div class="mySlides fade">
        <p class="p1">
          <img src="imghome/Vector (2).png" alt="">
          <br><br> Levamos alegria sem ver a quem <br><br>
          <img src="imghome/Vector.png" alt="">
        </p>
        <div class="text">Julia Clara / CEO</div>
      </div>

      <div class="mySlides fade">
        <p class="p1">
          <img src="imghome/Vector (2).png" alt="">
          <br><br> Sempre descobrindo talentos <br><br>
          <img src="imghome/Vector.png" alt="">
        </p>
        <div class="text">Sofia Correia / CEO</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
    <div class="images">
      <img src="imghome/image 19.png" alt="" style="padding:50px">
      <img src="imghome/image cps.png" alt="" style="padding:50px">
      <img src="imghome/image sp.png" alt="" style="padding:50px">
    </div>
  </main>

  <div class="slider">
    <div class="slide-track">
      <div class="slide">
        <img src="imghome/img1.png" alt="" />
      </div>
      <div class="slide">
        <img src="imghome/img2.png" alt="" />
      </div>
      <div class="slide">
        <img src="imghome/img3.png" alt="" />
      </div>
      <div class="slide">
        <img src="imghome/img1.png" alt="" />
      </div>
      <div class="slide">
        <img src="imghome/img2.png" alt="" />
      </div>
      <div class="slide">
        <img src="imghome/img3.png" alt="" />
      </div>
    </div>
  </div>

  <section class="cards">
    <div class="text_n">
      <img src="imghome/Nosso time.png" alt="">
    </div>
    <div class="container">
      <div class="card card0">
        <div class="border">

        </div>
      </div>
      <div class="card card1">
        <div class="border">
        </div>
      </div>
      <div class="card card2">
        <div class="border">
        </div>
      </div>
    </div>
    </div>
  </section>
  <main class="env_mail">
    <h1 class="nmp">Você tem algum projeto para nós?<br>Mande pelo nosso E-mail</h1>
    <div class="mail">
      awakeytalent@gmail.com
    </div>
  </main>
</body>

</html>