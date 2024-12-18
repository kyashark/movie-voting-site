<html>
    <head></head>
    <body>

    <div class="card" style="background-image: url('<?= BASE_URL ?>/images/<?= htmlspecialchars($movie['image']) ?>');" id="card" data-id="<?= htmlspecialchars($movie['id'])?>">
    <div class="card-label" id="card-label">
        <span><?= htmlspecialchars($movie['movie_name']) ?></span>
        <div class="movie-tab">
            <span class="year"><?= date('Y', strtotime($movie['release_date'])) ?></span>
            <div class="vote-tab">
                <span class="vote-count"><?= htmlspecialchars($movie['movie_votes']) ?></span>
                <span class="material-symbols-outlined heart" id="heart">&#xe87d;</span>
            </div>
        </div>
    </div>
</div>


<!--big movie card -->
<div class="movie-profile" id="movie-profile" data-id="<?= htmlspecialchars($movie['id'])?>"
     data-image-1="<?= BASE_URL ?>/<?= htmlspecialchars($movie['image_1_url']) ?>"
     data-image-2="<?= BASE_URL ?>/<?= htmlspecialchars($movie['image_2_url']) ?>"
     data-image-3="<?= BASE_URL ?>/<?= htmlspecialchars($movie['image_3_url']) ?>"
     data-image-4="<?= BASE_URL ?>/<?= htmlspecialchars($movie['image_4_url']) ?>"
>
    <div class="movie-gardient">
        <div class="close">
            <i class="fa-solid fa-xmark" style="color:#ffffff;" data-id="<?= htmlspecialchars($movie['id'])?>"></i>
        </div>

        <div class="movie-details">

            <span class="movie-name"><?= htmlspecialchars($movie['movie_name']) ?></span>
            
            <div class="year-gener">    
                <span><?= date('Y', strtotime($movie['release_date'])) ?></span>

                <span><?= htmlspecialchars($movie['genre_names']) ?></span>
            </div>
            
            <div class="heart-library">
            <span class="material-symbols-outlined library-add" id="library-add">&#xe02e;</span>

                &nbsp;&nbsp;&nbsp;
                <span class="material-symbols-outlined heart" id="heart">&#xe87d;</span>
                &nbsp;
                <span class="movie-vote"><?= htmlspecialchars($movie['movie_votes']) ?></span>
                
            </div>
            <div class="movie-para">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad corrupti labore 
                ipsum odio veritatis nostrum debitis sequi quibusdam earum, 
                numquam harum nam inventore provident architecto molestiae esse enim qui
                delectus, neque, rerum accusantium quas. 
                Nemo, laudantium reprehenderit. Rerum, itaque quo
            </div>
            
        </div>
    </div>
    
</div>        


</body>
</html>

