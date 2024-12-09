<!-- <!DOCTYPE html> -->
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
                <li><a href="<?= BASE_URL ?>/Movie/filtereMovies?type=movie&sort=random">Movies</a></li>
                <li><a href="<?= BASE_URL ?>/Movie/filtereMovies?type=series&sort=random">Series</a></li>
                </ul>
            </div>
            <div class="right-nav">
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

            <div class="filter-container">
                <div class="filter-tab">
                    <button class="filter btn" data-sort="top">Top Voted</button>
                    <button class="filter btn" data-sort="new">New Realease</button>
                    <button class="filter btn" data-sort="alpha">Alphabetical</button>
                </div>

                <select name="filters" id="filters">
                    <option value="top">Top Voted</option>
                    <option value="new">New Realease</option>
                    <option value="alphabetical">Alphabetical</option>
                </select>

                <input type="search" placeholder="Search" class="search-input">
            </div>

            <div class="genre-container">
                <button class="genre" data-genre="action">Action</button>
                <button class="genre" data-genre="adventure">Adventure</button>
                <button class="genre" data-genre="comedy">Comedy</button>
                <button class="genre" data-genre="drama">Drama</button>
                <button class="genre" data-genre="horror">Horror</button>
                <button class="genre" data-genre="sci-fi">Sci-Fi</button>
                <button class="genre" data-genre="thriller">Thriller</button>
                <button class="genre" data-genre="romance">Romance</button>
                <button class="genre" data-genre="fantasy">Fantasy</button>
            </div>

            <div class="movie-grid" id="movie-grid">

            </div>
        </div>
    </main>
    <script src="<?= BASE_URL ?>/js/index.js"></script>
    <script src="<?= BASE_URL ?>/js/movie.js"></script>
</body>

</html>