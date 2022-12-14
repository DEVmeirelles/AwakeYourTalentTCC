<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="experimente.css">

  <title>Experimente</title>
</head>

<body>
  <div class="carousel">
    <div class="progress-bar progress-bar--primary hide-on-desktop">
      <div class="progress-bar__fill"></div>
    </div>

    <header class="main-post-wrapper">

      <div class="slides">
        <article class="main-post main-post--active" role="button">
          <div class="main-post__image">
            <div class="main-post__image-wrapper">
              <img src="/imgexp/LogoAYT.png" alt="img logo n foi" />
            </div>
          </div>
          <div class="main-post__content">
            <div class="main-post__tag-wrapper">
              <a href="index.php" class="link-home-exp">
              <span class="main-post__tag">Voltar para Home</span>
              </a>
            </div>
            <h1 class="main-post__title">AYT, o lugar onde você descobre sua paixão, a ARTE!</h1>
            <a class="main-post__link" href="sobre.html">
              <span class="main-post__link-text">Conheça mais </span>
              <svg class="main-post__link-icon main-post__link-icon--arrow" width="37" height="12" viewBox="0 0 37 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11" stroke="white" />
              </svg>
            </a>
          </div>
        </article>
        <article class="main-post main-post--not-active" role="button">
          <div class="main-post__image">
            <div class="main-post__image-wrapper">
              <img src="/imgexp/propostaexp.png" alt="What To Watch For in the 2019 Hungarian Grand Prix" />
            </div>
            <div class="main-post__content">
              <div class="main-post__tag-wrapper">
                <span class="main-post__tag">Experimente</span>
              </div>
              <h1 class="main-post__title">Acesse o vídeo abaixo e conheça nossa proposta!</h1>
              <a class="main-post__link" href="video.html">
                <svg class="main-post__link-icon main-post__link-icon--play-btn" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="10" cy="10" r="9" stroke="#FFC207" stroke-width="2" />
                  <path d="M14 10L8 6V14L14 10Z" fill="white" />
                </svg>
                <span class="main-post__link-text">play video</span>
              </a>
            </div>
        </article>
        <article class="main-post main-post--not-active" role="button">
          <div class="main-post__image">
            <div class="main-post__image-wrapper">
              <img src="/imgexp/finalexp.png" alt="Hamilton wants harder championship fight from Leclerc and
            Verstappen" />
            </div>
            <div class="main-post__content">
              <div class="main-post__tag-wrapper">
                <span class="main-post__tag">Veja nossos planos!</span>
              </div>
              <h1 class="main-post__title">Clique abaixo e venha fazer parte da familia AYT!
              </h1>
              <a class="main-post__link" href="formulario.php">
                <span class="main-post__link-text">Comece agora!</span>
                <svg class="main-post__link-icon main-post__link-icon--arrow" width="37" height="12" viewBox="0 0 37 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11" stroke="white" />
                </svg>
              </a>
            </div>
        </article>
      </div>
    </header>

    <div class="posts-wrapper hide-on-mobile">
      <article class="post post--active">
        <div class="progress-bar">
          <div class="progress-bar__fill"></div>
        </div>
        <header class="post__header">
          <span class="post__tag">Sobre nós</span>
          <p class="post__published">08 De Dezembro de 2022</p>
        </header>
        <h2 class="post__title">Veja o que nós temeos para você!</h2>
      </article>
      <article class="post">
        <div class="progress-bar">
          <div class="progress-bar__fill"></div>
        </div>
        <header class="post__header">
          <span class="post__tag">Video demonstrativo</span>
          <p class="post__published">08 De Dezembro de 2022</p>
        </header>
        <h2 class="post__title">Uma prévia do mundo novo que você conhecerá!</h2>
      </article>
      <article class="post">
        <div class="progress-bar">
          <div class="progress-bar__fill"></div>
        </div>
        <header class="post__header">
          <span class="post__tag">Assine nossos planos!</span>
          <p class="post__published">08 De Dezembro de 2022</p>
        </header>
        <h2 class="post__title">Venha ser um AYT!
        </h2>
      </article>
    </div>
  </div>
</body>

</html>
<script>
  let mainPosts = document.querySelectorAll(".main-post");
  let posts = document.querySelectorAll(".post");

  let i = 0;
  let postIndex = 0;
  let currentPost = posts[postIndex];
  let currentMainPost = mainPosts[postIndex];

  let progressInterval = setInterval(progress, 100);

  let postsElement = [...document.querySelectorAll('article.post')];
  postsElement.forEach((post, i) => {
    post.addEventListener('click', () => {
      postIndex = i - 1;
      // reset progress bar
      currentPost.querySelector(".progress-bar__fill").style.width = 0;
      document.querySelector(
        ".progress-bar--primary .progress-bar__fill"
      ).style.width = 0;
      currentPost.classList.remove("post--active");

      postIndex++;

      currentMainPost.classList.add("main-post--not-active");
      currentMainPost.classList.remove("main-post--active");

      // reset postIndex to loop over the slides again
      if (postIndex === posts.length) {
        postIndex = 0;
      }

      currentPost = posts[postIndex];
      currentMainPost = mainPosts[postIndex];

      clearInterval(progressInterval);
      progressInterval = setInterval(progress, 100);
      currentPost.querySelector(".progress-bar__fill").style.width = 0;
      document.querySelector(
        ".progress-bar--primary .progress-bar__fill"
      ).style.width = 0;
    });

    console.log(post)
  });


  function progress() {
    if (i === 100) {
      i = -5;
      // reset progress bar
      currentPost.querySelector(".progress-bar__fill").style.width = 0;
      document.querySelector(
        ".progress-bar--primary .progress-bar__fill"
      ).style.width = 0;
      currentPost.classList.remove("post--active");

      postIndex++;

      currentMainPost.classList.add("main-post--not-active");
      currentMainPost.classList.remove("main-post--active");

      // reset postIndex to loop over the slides again
      if (postIndex === posts.length) {
        postIndex = 0;
      }

      currentPost = posts[postIndex];
      currentMainPost = mainPosts[postIndex];
    } else {
      i++;
      currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
      document.querySelector(
        ".progress-bar--primary .progress-bar__fill"
      ).style.width = `${i}%`;
      currentPost.classList.add("post--active");

      currentMainPost.classList.add("main-post--active");
      currentMainPost.classList.remove("main-post--not-active");
    }
  }
</script>