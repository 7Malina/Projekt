<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projekt Praktyki</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>

  <body>
    <header>
      <nav>
        <div class="content">
          <h4>PMU</h4>
          <h4>PMU</h4>
        </div>
        <ul>
          <li><a href="users.php">Users</a></li>
          <li><a href="tasks.php">Tasks</a></li>
          <li class="search">
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
          </li>
          <li class="hamburger">
            <a href="#">
              <div class="bar"></div>
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="vignette"></div>

      <img
        src="images/bg_thick.png"
        data-speedx="0.270"
        data-speedy="0.25"
        data-distance="-200"
        data-rotation="0"
        class="parallax bg-img"
      />
      <img
        src="images/chmura3.png"
        data-speedx="0.00125"
        data-speedy="0.0135"
        data-distance="1300"
        data-rotation="0.04"
        class="parallax chmura-3"
      />
      <div class="text parallax" data-speedx="0.5" data-distance="0">
        <h2>project</h2>
        <h1>managment</h1>
        <h1>user</h1>
      </div>
      <img
        src="images/Warstwa 1.png"
        data-speedx="0.05"
        data-speedy="0.0035"
        data-distance="1300"
        data-rotation="0.06"
        class="parallax warstwa-1"
      />
      <img
        src="images/chmura4.png"
        data-speedx="0.09"
        data-speedy="0.035"
        data-distance="2300"
        data-rotation="0.12"
        class="parallax chmura-4"
      />
      <img
        src="images/chmura2.png"
        data-speedx="0.126"
        data-speedy="0.015"
        data-distance="2100"
        data-rotation="0.09"
        class="parallax chmura-2"
      />
      <img
        src="images/chmura5.png"
        data-speedx="0.09"
        data-speedy="0.02"
        data-distance="2300"
        data-rotation="0.1"
        class="parallax chmura-5"
      />
      <div class="kolo">
        <img
          src="images/kometa_better.png"
          data-speedx="0.09"
          data-speedy="0.02"
          data-distance="2300"
          data-rotation="0.1"
          class="parallax kometa zdjecie"
        />
      </div>
      <img
        src="images/star.png"
        data-speedx="0.270"
        data-speedy="0.035"
        data-distance="2400"
        data-rotation="0.11"
        class="parallax star"
      />
    </main>
    <article>
      <div class="container hidden">
        <h6>About</h6>
        <div class="article-body">
          <div class="article-section-1">
            <div class="article left-element">
              <i class="fa-solid fa-user-plus" style="color: #688ba9"></i>
              <h3>Tworzenie nowych uzytkownikow do bazy danych</h3>
              <p class="article article-text">    
                Z panelu użytkowników można dodawać ich z poziomu strony za pomocą 
                formularza i zatwierdzając przyciskiem OK.
              </p>
            </div>
          </div>
          <div class="article-section-2">
            <div class="article main-element">
              <i
                class="fa-solid fa-magnifying-glass-plus"
                style="color: #688ba9"
              ></i>
              <h3>Wyszukiwanie naszych pracowników</h3>
              <p class="article article-text">
                W polu wyszukiwania można wyszukać dowolnego użytkownika 
                z bazy danych wpisując wybrane znaki z jego nazwiska. Wpisując np. 'k' 
                wyszuka wszystkich użytkowników z tą literą w nazwisku.
              </p>
            </div>
            <div class="article main-element">
              <h3 style="font-size: 1.3rem">Działanie naszego programu</h3>
              <button class="button-page">
                <a href="users.php"> Zobacz projekt</a>
              </button>
            </div>
            <div class="article main-element">
              <i class="fa-solid fa-list-check" style="color: #688ba9"></i>
              <h3>Dodawanie, usuwanie oraz edytowanie zadań pracowników</h3>
              <p class="article article-text">
               Jeżeli chce się dodać zadanie, usunąć lub przenieść je do innego użytkownika 
               można to zrobić z poziomu strony poprzez przejście na podstronę zadania wciskając przycisk 
               zadania u wybranego użytkownika.
              </p>
            </div>
          </div>
          <div class="article-section-3">
            <div class="article right-element">
              <i
                class="fa-sharp fa-solid fa-user-minus"
                style="color: #688ba9"
              ></i>
              <h3>Usuwanie uzytkownika z bazy danych</h3>
              <p class="article article-text">
                Jeżeli chce się usunąć wybranego użytkownika z bazy danych należy 
                kliknąć ikonkę w prawym górnym rogu profilu użytkownika lecz nie może 
                on mieć przypisanych żadnych zadań, inaczej użytkownik jest niemożliwy do usunięcia.
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>
    <footer>
      <div class="footer up-section">
        <span class="footer line-first"></span>
        <h5>WHO DID IT <span class="new-line"></span></h5>
        <span class="footer line-second"></span>
      </div>
      <div class="footer user-section">
        <div class="footer photo-1">
          <p>Dawid Sowa</p>
          <div class="circle">
            <img src="images/Dawid.JPEG" alt="" />
          </div>
          <div class="what-done-section">
          <ul>
              <li>Projektowanie</li>
              <li>Design</li>
              <li>Animacja JS</li>
              <li>Skrypt PHP</li><br>
                <ol class="D-ol"></ol>
            </ul>
          </div>
        </div>
        <div class="footer socials">
        <p class="icon" id="githubIcon"><i class="fa-brands fa-github"></i></p>
          <p class="icon" id="facebookIcon"><i class="fa-brands fa-facebook"></i></p>
          <p class="icon" id="instagramIcon"><i class="fa-brands fa-instagram"></i></p>
          <p class="icon" id="twitterIcon"><i class="fa-brands fa-twitter"></i></p>
          <p class="icon" id="gmailIcon"><i class="fa-solid fa-envelope"></i></p>
        </div>
        <div class="footer photo-2">
          <p>Oliwier Malinowski</p>
          <div class="circle">
            <img src="images/Oliwier.jpeg" alt="" />
          </div>
          <div class="what-done-section">
          <ul>
              <li>Projektowanie</li>
              <li>Grafika</li>
              <li>Baza danych</li>
              <li>Skrypt PHP</li>
              <br>
              <ol class="O-ol"></ol>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer line-2">
        <span class="footer line-height"></span>
      </div>
      <div class="footer daily-section">
        <h5>Contact Us</h5>
        <form action="" method="post">
          <input
            type="email"
            class="email-input"
            name=""
            placeholder="mail@gmail.com"
          />
          <input type="submit" value="Send" />
        </form>
      </div>
      <div class="footer autor-section">
        <p>©️ 2023 | Dawid Sowa, Oliwier Malinowski</p>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="app.js"></script>
  </body>
</html>
