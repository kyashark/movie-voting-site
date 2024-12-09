
<div class="card" style="background-image: url('<?= BASE_URL ?>/images/<?= htmlspecialchars($movie['image']) ?>');" id="card">
    <div class="card-label" id="card-label">
        <span><?= htmlspecialchars($movie['movie_name']) ?></span>
        <div class="movie-tab">
            <span class="year"><?= date('Y', strtotime($movie['release_date'])) ?></span>
            <div class="vote-tab">
                <span class="vote-count"><?= htmlspecialchars($movie['movie_votes']) ?></span>
                <span class="material-symbols-outlined" id="heart">&#xe87d;</span>
            </div>
        </div>
    </div>
</div>
