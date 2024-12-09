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
          <li><a href="<?= BASE_URL ?>/User/home">Home</a></li>
          <li><a href="<?= BASE_URL ?>/Movie/filtereMovies?sort=random">Movies</a></li>
          <li><a href="<?= BASE_URL ?>/Series">Series</a></li>
        </ul>
      </div>
      <div class="right-nav">
        <!-- <button class="login-btn">Login</button> -->
        <span class="username-text">
          <a href="#">
            <?php echo $username ?>
          </a>
        </span>
        <form method="POST" action="<?= BASE_URL ?>/Auth/logout">
          <button class="btn logout" type="submit">Logout</button>
        </form>

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