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
        <div class="dropdown"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum qui eum, praesentium quibusdam aperiam veniam laboriosam blanditiis repellat molestias tempore asperiores ullam earum consectetur dolor obcaecati ratione cupiditate, error quidem?</p></div>
      </details>
      <details>
        <summary><li><a href="#">Sortera efter aktivitet</a></li></summary>
        <div class="dropdown"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati officiis sit voluptatibus possimus ea ullam totam neque voluptas, pariatur fugit laudantium exercitationem blanditiis necessitatibus? Ex pariatur repellat rem sunt voluptatem?</p></div>
      </details>
      <details>
        <summary><li><a href="#">Sortera efter kvalitet</a></li></summary>
        <div class="dropdown"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga adipisci sit voluptate dolore veniam quaerat, repudiandae atque explicabo aliquam corporis illum cupiditate earum quibusdam laborum quos ea eaque nemo quia!</p></div>
      </details>
    </ul>
    <hr />
    <ul>
      <li><a href="#">Hjälp</a></li>
    </ul>
  </nav>
</header>
<script src="/components/scripts/hamburgerlogic.js"></script>
