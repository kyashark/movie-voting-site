console.log("This Js file execute");

const movieProfiles = document.querySelectorAll('.movie-profile');

document.body.addEventListener("click", (e) => {
    if (e.target.classList.contains('card')) {
        const id = e.target.dataset.id;
        console.log(`Card ID: ${id}`);

        closeMovies()
        
        openMovie(id);

        showImages(id);
    }
});


function openMovie(id){
    const movieProfile = document.querySelector(`.movie-profile[data-id="${id}"]`);
    movieProfile.style.display = 'block';  
}


function closeMovies(){
    const movieProfiles = document.querySelectorAll(`.movie-profile`);
    movieProfiles.forEach(profiles=>{
        profiles.style.display = 'none';
    });
}

document.body.addEventListener("click", (e) => {
    if (e.target.classList.contains('fa-xmark')) {
        const movieCard = e.target.closest('.movie-profile');
        movieCard.style.display = 'none';
    }
});


// images slide show
let intervalId;
function showImages(id){
    const movieProfile = document.querySelector(`.movie-profile[data-id="${id}"]`);
    let currentImageIndex = 1; 

    if (intervalId) {
        clearInterval(intervalId);
    }


    function updateBackgroundImage() {
        const url = movieProfile.getAttribute(`data-image-${currentImageIndex}`);
        movieProfile.style.backgroundImage = `url(${url})`;
        console.log(url);
        currentImageIndex = (currentImageIndex % 4) + 1; // Cycle through 1 to 4
    }

    updateBackgroundImage();
    intervalId = setInterval(updateBackgroundImage, 3000); 
}


