<html>

<head>
  <title>Zenith</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css" />
</head>

<body>

  <!-- header -->
  <header>
    <nav>
      <div class="side-nav">
        <div class="logo">Z</div>
        <ul class="nav-bar" id="nav-bar">
          <li><a href="#">Home</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="#">Series</a></li>
        </ul>
      </div>
      <div class="right-nav">
        <a href="<?= BASE_URL ?>/auth/login"><button class="btn login">Login</button></a>
        <a href="<?= BASE_URL ?>/auth/register"><button class="btn register">Register</button></a>
        <div class="menu-item" id="menu-item">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>
  </header>


  <!-- bento grid -->
  <main>

    <div class="home-container">
      <div class="col-left">
        <div class="row row1">
          <h4>Welcome</h4>
          <h1><span class="zen-font">Zen</span>ith Movie Votes</h1>
          <h3>Celebrate and vote for your
            favorite movies</h3>
        </div>
        <div class="row row2">
          <div class="row-col col1">
            <div class="arrow">
              <img src="<?= BASE_URL ?>/images/arrow.png">
            </div>
            <h2>Top Movies</h2>
          </div>
          <div class="row-col col2">
            <div class="arrow">
              <img src="<?= BASE_URL ?>/images/arrow.png">
            </div>
            <h2>New Release</h2>
          </div>
        </div>
      </div>
      <div class="col-right">
        <button class="btn vote">Vote Now</button>
      </div>
    </div>
  </main>
  <script src="<?= BASE_URL ?>/js/index.js"></script>
</body>

</html>