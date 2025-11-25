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

    <!-- =======================
         MOBILE HEADER (visible <768px)
         ======================= -->
    <div class="header-container menu-glass" id="mobileHeader" role="banner" aria-hidden="false">
      <div class="header-left">
        <!-- Hamburger Menu -->
        <button class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false" aria-controls="mainMenu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>

        <!-- Logo (mobile) -->
        <a href="index.php" class="logo header-logo">
          <img class="logo-header" src="/components/logo/kinforma_logo_text.png" alt="Kinforma logo" />
        </a>
      </div>

      <!-- Quick Actions (mobile) -->
      <div class="header-right header-icons">
        <button aria-label="Search" class="icon-btn">
          <img src="components/icons/search.svg" alt="search-icon" />
        </button>
        <button aria-label="Account" class="icon-btn">
          <img src="components/icons/account.svg" alt="account-icon" />
        </button>
        <button aria-label="Cart" class="icon-btn">
          <img src="components/icons/cart.svg" alt="cart-icon" />
        </button>
      </div>

      <!-- Hidden Navigation Menu (mobile full-screen) -->
      <nav class="main-menu menu-glass" id="mainMenu" aria-hidden="true">
        <div class="menu-inner">
          <hr />
          <ul class="menu-list">
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
              <div class="dropdown menu-glass-desk"><p>Skidor<br>Klättring<br>Surfing<br>Motocross</p></div>
            </details>
            <details>
              <summary><li><a href="#">Sortera efter kvalitet</a></li></summary>
              <div class="dropdown menu-glass-desk"><p><strong>Material</strong><br><br>Bambu<br>Bomull<br>Hampa</p></div>
            </details>
          </ul>
          <hr />
          <ul>
            <li><a href="#">Hjälp</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- =======================
         DESKTOP HEADER (visible >=768px)
         ======================= -->
    <div class="header-container-desktop menu-glass-desk" id="desktopHeader" role="navigation" aria-label="Primary" aria-hidden="true">
      <nav class="nav-left-desk">
        <a href="index.php" class="logo-link">
          <img class="logo-header" src="/components/logo/Vector.png" alt="Kinforma logo" />
        </a>

        <!-- Nyheter -->
        <div class="nav-item">
          <a href="#" class="nav-link">Nyheter</a>

          <div class="dropdown menu-glass-desk" aria-hidden="true">
            <div class="dropdown-left">
              <h3>Nyheter</h3>
            </div>

            <div class="divider" aria-hidden="true"></div>

            <div class="dropdown-right">
              <h4>2025 Vinterkollektion</h4>
              <h4>TikTok Favs</h4>
              <h4>Kids edition</h4>
            </div>
          </div>
        </div>

        <!-- Kläder -->
        <div class="nav-item">
          <a href="#" class="nav-link">Kläder</a>

          <div class="dropdown dropdown-menu-glass-desk" aria-hidden="true">
            <div class="dropdown-left">
              <h3>Kläder</h3>
            </div>

            <div class="divider" aria-hidden="true"></div>

            <div class="dropdown-right two-col">
              <div>
                <h4>Kön</h4>
                <p>Kvinnor</p>
                <p>Män</p>
                <p>Barn</p>
              </div>
              <div>
                <h4>Aktivitet</h4>
                <p>Skidåkning</p>
                <p>Klättring</p>
                <p>Surfing</p>
                <p>Motocross</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Accessoarer -->
        <div class="nav-item">
          <a href="#" class="nav-link">Accessoarer</a>

          <div class="dropdown dropdown-menu-glass-desk" aria-hidden="true">
            <div class="dropdown-left">
              <h3>Accessoarer</h3>
            </div>

            <div class="divider" aria-hidden="true"></div>

            <div class="dropdown-right two-cols">
              <div>
                <h4>Kön</h4>
                <p>Kvinnor</p>
                <p>Män</p>
                <p>Barn</p>
              </div>
              <div>
                <h4>Aktivitet</h4>
                <p>Skidåkning</p>
                <p>Klättring</p>
                <p>Surfing</p>
                <p>Motocross</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Limited edition -->
        <div class="nav-item">
          <a href="#" class="nav-link">Limited edition</a>

          <div class="dropdown dropdown-menu-glass-desk" aria-hidden="true">
            <div class="dropdown-left">
              <h3>Limited Edition</h3>
            </div>

            <div class="divider" aria-hidden="true"></div>

            <div class="dropdown-right">
              <h4>Medlemsförmåner</h4>
              <p>Kläder</p>
              <p>Accessoarer</p>
            </div>
          </div>
        </div>

        <a href="#" class="nav-link">Kontakt</a>
        <a href="#" class="nav-link">Vårt hållbarhetsarbete</a>
      </nav>

      <nav class="nav-right-desk">
        <button aria-label="Search" class="icon-btn">
          <img src="components/icons/search.svg" alt="search-icon" class="icon-desk" />
        </button>

        <input type="text" name="Sök" class="search-desk" placeholder="Sök" />

        <button aria-label="Account" class="icon-btn">
          <img src="components/icons/account.svg" alt="account-icon" class="icon-desk" />
        </button>

        <button aria-label="Cart" class="icon-btn">
          <img src="components/icons/cart.svg" alt="cart-icon" class="icon-desk" />
        </button>
      </nav>
    </div>

  </header>

  <script src="/scripts/header.js"></script>
</body>
</html>
