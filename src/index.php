<html>
  <head>
    <title>Zenith</title>
    <link rel="stylesheet" href="../css/index.css" />
  </head>
  <body>

  <!-- header -->
  <header>
      <nav>
        <div class="side-nav">
            <div class="logo">Z</div>
            <ul class="nav-bar" id="nav-bar">
                <li><a href="#">Movies</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="right-nav">
            <a href="auth/login.php"><button class="login-btn">Login</button></a>
            <a href="auth/register.php"><button class="register-btn">Register</button></a>
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
 
    <div class="container">
      <div class="col-left">
          <div class="row row1">
            <p class="topic-5">Welcome</p>
            <h1 class="topic-1"><span class="zen-font">Zen</span>ith Movie Votes</h1>
            <p class="topic-4">Celebrate and vote for your 
            favorite movies</p>
          </div>
          <div class="row row2">
            <div class="row-col col1">
              <div class="arrow">
                <img src="../images/arrow.png">
              </div>
              <p class=topic-6>Top Voted Movies
                <!-- <span class="line-1">Top Voted</span>  -->
                <!-- <span class="line-2">Movies</span> -->
              </p>
            </div>
            <div class="row-col col2">
            <div class="arrow">
                <img src="../images/arrow.png">
              </div>
              <p class=topic-6>New Release</p>
            </div>
          </div>
      </div>
     <div class="col-right">
        <button class="vote-button">Vote Now</button>
     </div>
    </div>
  </main>
    <script src="../js/index.js"></script>
  </body>
</html>
