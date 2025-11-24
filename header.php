<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="stylesheet/main.css" />
  <link rel="stylesheet" href="/stylesheet/header.css" />
  <link rel="stylesheet" href="/stylesheet/hero.css" />
  <link rel="stylesheet" href="stylesheet/products.css" />
  <link rel="stylesheet" href="stylesheet/techviz.css" />
  <link rel="stylesheet" href="stylesheet/categories.css" />
  <link rel="stylesheet" href="/stylesheet/newsletter.css" />
  <link rel="stylesheet" href="/stylesheet/footer.css" />
  


  <title>Kinforma</title>
</head>

<body>
  <header>
  <div class="header-container">
    <div class="header-left"> 
        <!-- Hamburger Menu -->
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
    <div class="header-right">
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
    
      <!-- Hidden Navigation Menu -->
    <nav class="main-menu menu-glass" id="mainMenu">
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
            <summary><li><a href="#">Sortera efter aktivitet</a></li></summary>
            <div class="dropdown"><p>Skidor<br>Klättring<br>Surfing<br>Motocross</p></div>
          </details>
          <details>
            <summary><li><a href="#">Sortera efter kvalitet</a></li></summary>
            <div class="dropdown"><p><strong>Material</strong><br><br>Bambu<br>Bomull<br>Hampa</p></div>
          </details>
        </ul>
        <hr />
        <ul>
          <li><a href="#">Hjälp</a></li>
        </ul>
      </div>
    </nav>
  </div>

 <div class="header-container-desktop">
<?php 
 require_once __DIR__ . "/header-desktop.php";?>
 
 </div>
</header>

