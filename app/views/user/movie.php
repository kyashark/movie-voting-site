<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">


    <title>Movie</title>
</head>

<body>

    <!-- header -->
    <header>
        <nav>
            <div class="side-nav">
                <div class="logo">Z</div>
                <ul class="nav-bar" id="nav-bar">
                    <li><a href="<?= BASE_URL ?>/User/home">Home</a></li>
                    <li><a href="<?= BASE_URL ?>/Movie/movie">Movies</a></li>
                    <li><a href="#">Series</a></li>
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
        <div class="movie-container">

            <div class="filter-contianer">
                <div class="filter-tab">
                    <button class="filter-btn">Top Voted</button>
                    <button class="filter-btn">New Realease</button>
                    <button class="filter-btn">Alphabetical</button>
                </div>
                <div class="search-bar">
                    <input type="search" placeholder="Search">
                </div>
            </div>
            <div class="genre-container">
                <button class="gener-btn">Action</button>
                <button class="gener-btn">Adventure</button>
                <button class="gener-btn">Comedy</button>
                <button class="gener-btn">Drama</button>
                <button class="gener-btn">Horror</button>
                <button class="gener-btn">Sci-Fi</button>
                <button class="gener-btn">Thriller</button>
                <button class="gener-btn">Romance</button>
                <button class="gener-btn">Fantasy</button>
            </div>
            <div class="movie-grid">
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
                <div class="card">Your name</div>
            </div>

        </div>
    </main>
    <script src="<?= BASE_URL ?>/js/index.js"></script>
</body>

</html>