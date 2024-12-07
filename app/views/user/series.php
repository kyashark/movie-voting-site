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
          <li><a href="<?= BASE_URL ?>/Movie">Movies</a></li>
          <li><a href="<?= BASE_URL ?>/Series">Series</a></li>
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
                    <button class="filter btn">Top Voted</button>
                    <button class="filter btn">New Realease</button>
                    <button class="filter btn">Alphabetical</button>
                </div>

                <select name="filters" id="filters">
                    <option value="top">Top Voted</option>
                    <option value="new">New Realease</option>
                    <option value="alphabetical">Alphabetical</option>
                </select>

                <input type="search" placeholder="Search" class="search-input">
            </div>

            <div class="genre-container">
                <button class="gener">Action</button>
                <button class="gener">Adventure</button>
                <button class="gener">Comedy</button>
                <button class="gener">Drama</button>
                <button class="gener">Horror</button>
                <button class="gener">Sci-Fi</button>
                <button class="gener">Thriller</button>
                <button class="gener">Romance</button>
                <button class="gener">Fantasy</button>
            </div>

            <div class="movie-grid">
<!-- 
                <div class="card" style="background-image: url('<?=BASE_URL ?>/images/ponyo.jpeg');" id="card">
                    <div class="card-label" id="card-label">
                        <span>Ponyo</span>
                        <div class="movie-tab">
                            <span class="year">2018</span>
                            <div class=vote-tab>
                                <span class="vote-count">200</span>
                                <span class="material-symbols-outlined">&#xe87d;</span>
                            </div>
                        </div>
                    </div>
                </div> -->


                <?php foreach($movies as $movie): ?>
                <div class="card" style="background-image: url('<?=BASE_URL ?>/images/<?= $movie['image']; ?>');" id="card">
                    <div class="card-label" id="card-label">
                        <span><?= htmlspecialchars($movie['movie_name']);?></span>
                        <div class="movie-tab">
                            <span class="year"><?= date('Y', strtotime($movie['release_date'])); ?></span>
                            <div class=vote-tab>
                                <span class="vote-count"><?= htmlspecialchars($movie['movie_votes']); ?></span>
                                <span class="material-symbols-outlined" id="heart">&#xe87d;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
        </div>
    </main>
    <script src="<?= BASE_URL ?>/js/index.js"></script>
</body>

</html>