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
  <link rel="stylesheet" href="index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:wght@500&family=Roboto:wght@500&family=Inter&display=swapfamily=Palanquin+Dark:wght@600&display=swap" rel="stylesheet">
  <title>ayt</title>
</head>

<body>
  <nav>
    <div class="logo">
      <h1>AYT</h1>
      <p>Awake Your Talent</p>
    </div>
    <ul class="nav-links">
      <li><a href="loginform.php?logout=true">Logout</a></li>
      <li><a href="#" class="active_1">Home</a></li>
      <li><a href="formulario.php">Experimente</a></li>
      <li><a href="#">Sobre AYT</a></li>
    </ul>
  </nav>
  <main>
    <h1 class="titulo">Desperte <br> o que tem de mais <br> belo em você!</h1>
    <button class="comecar-btn">
      Comece agora
    </button>
  </main>
  <main class="bk">
    <div class="slideshow-container">

      <div class="mySlides fade">
        <p class="p1">
          <img src="/imgHome/Vector (2).png" alt="">
          <br><br> Levar aquilo que traz harmonia e felicidade a todos é sem dúvidas nossa missão! <br><br>
          <img src="/imgHome/Vector.png" alt="">
        </p>
        <div class="text">Lucas Meirelles / CEO</div>
      </div>

      <div class="mySlides fade">
        <p class="p1">
          <img src="/imgHome/Vector (2).png" alt="">
          <br><br> Levamos alegria sem ver a quem <br><br>
          <img src="/imgHome/Vector.png" alt="">
        </p>
        <div class="text">Julia Clara / CEO</div>
      </div>

      <div class="mySlides fade">
        <p class="p1">
          <img src="/imgHome/Vector (2).png" alt="">
          <br><br> Sempre descobrindo talentos <br><br>
          <img src="/imgHome/Vector.png" alt="">
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
      <img src="/imgHome/image 19.png" alt="" style="padding:50px">
      <img src="/imgHome/image cps.png" alt="" style="padding:50px">
      <img src="/imgHome/image sp.png" alt="" style="padding:50px">
    </div>
  </main>


</body>

</html>