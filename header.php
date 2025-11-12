<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="stylesheet/style.css" />
  <link rel="stylesheet" href="/stylesheet/header.css" />
  <link rel="stylesheet" href="/stylesheet/footer.css" />
  <link rel="stylesheet" href="/stylesheet/index.css" />


  <title>Kinforma</title>
</head>
<body>
  <header>
  <div class="start-box"></div>

  <div class="header-container">
    <!-- Hamburger Menu -->
    <div class="header-left"> 
        <button class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        </button>

        <!-- Logo -->
        <a href="index.php" class="logo">
        <img class="logo-header" src="/components/logo/kinforma_logo_text.png" alt="Kinforma logo" />
        </a>
    </div>
    <!-- Quick Actions -->
    <div class="quick-actions">
      <button aria-label="Search">
        <img src="components/icons/search.svg" alt="search-icon" />
      </button>
      <button aria-label="Account">
        <img src="components/icons/account.svg" alt="account-icon" />
      </button>
      <button aria-label="Cart">
        <img src="components/icons/cart.svg" alt="cart-icon" />
      </button>
    </div>
  </div>

  <!-- Hidden Navigation Menu -->
<nav class="main-menu" id="mainMenu">
  <div class="menu-inner">
    <hr />
    <ul>
      <li><a href="#">Nyheter</a></li>
      <li><a href="#">Vinterkollektion</a></li>
      <li><a href="#">Kläder</a></li>
      <li><a href="#">Accessoarer</a></li>
      <li><a href="#">Limited edition</a></li>
    </ul>
    <hr />
    <ul>
      <details>
        <summary><li><a href="#">Sortera efter produkt</a></li></summary>
        <div class="dropdown"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nesciunt dolore omnis, impedit facere est nobis adipisci qui dolor sapiente sint ea alias cupiditate! Enim perspiciatis debitis ad illo quo!</p></div>
      </details>
      <details>
        <summary><li><a href="#">Sortera efter aktivitet</a></li></summary>
        <div class="dropdown"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus est soluta beatae unde explicabo tempore rerum sunt et asperiores non nihil tempora, ex obcaecati placeat corrupti odit hic sapiente atque?</p></div>
      </details>
      <details>
        <summary><li><a href="#">Sortera efter kvalitet</a></li></summary>
        <div class="dropdown"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, adipisci sint tempora iure unde molestias repellendus molestiae eum maiores excepturi tempore assumenda illum aut cumque, odio quibusdam nisi dolores voluptatum!</p></div>
      </details>
    </ul>
    <hr />
    <ul>
      <li><a href="#">Hjälp</a></li>
    </ul>
  </div>
</nav>

</header>
<script src="/javascript/hamburgerlogic.js"></script>
