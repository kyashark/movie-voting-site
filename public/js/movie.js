document.addEventListener("DOMContentLoaded", function () {
    // Filters, Movie Cards, and Heart Icons
    loadFiltersFromUrl();
    initializeCardHover();
    initializeHeartClick();
  });
  
  
  
  
  // Movie Filter and URL Update
  const filterButtons = document.querySelectorAll(".filter");
  const genreButtons = document.querySelectorAll(".genre");
  const movieGrid = document.querySelector("#movie-grid");
  

function updateMovies() {
    const sort = document.querySelector(".filter.active")?.dataset.sort || "random";
    const activeGenres = [...document.querySelectorAll(".genre.active")]
      .map(button => button.dataset.genre);
  
    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('type') || 'defaultType'; // Default type if not present
  
    let newUrl = `${window.location.origin}${window.location.pathname}?type=${type}&sort=${sort}`;
    
    if (activeGenres.length) newUrl += `&genres=${activeGenres.join(",")}`;
    
    history.pushState(null, "", newUrl);
    fetchMovies();
  }
  
  // Sort button click event
  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      if (button.classList.contains("active")) {
        button.classList.remove("active");
      } else {
        filterButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");
      }
      updateMovies();
    });
  });
  
  // Genre button click event
  genreButtons.forEach(button => {
    button.addEventListener("click", () => {
      button.classList.toggle("active");
      updateMovies();
    });
  });
  
  // Fetch movies via AJAX and update the movie grid
  function fetchMovies() {
    const url = window.location.href;
  
    fetch(url, {
      method: "GET",
      headers: {
        "X-Requested-With": "XMLHttpRequest", // Mark as AJAX request
      },
    })
      .then((response) => response.text())
      .then((html) => {
        movieGrid.innerHTML = html; // Replace the movie grid with the new content
        reinitialize(); // Re-initialize the hover and heart click behaviors after content is loaded
      })
      .catch((error) => console.error("Error loading movies:", error));
  }
  
  // Listen for browser history changes and fetch new content
  window.addEventListener("popstate", fetchMovies);
  
  // Card Hover Effect
  function initializeCardHover() {
    const cardItems = document.querySelectorAll(".card");
    const labelItems = document.querySelectorAll(".card-label");
  
    cardItems.forEach((cardItem, index) => {
      const labelItem = labelItems[index];
      labelItem.style.display = "none";
  
      cardItem.addEventListener("mouseenter", () => {
        labelItem.style.display = "flex";
      });
  
      cardItem.addEventListener("mouseleave", () => {
        labelItem.style.display = "none";
      });
    });
  }
  
  // Heart Icon Click Behavior
  function initializeHeartClick() {
    const heartItems = document.querySelectorAll(".material-symbols-outlined");
  
    heartItems.forEach((heartItem) => {
      heartItem.addEventListener("click", () => {
        const currentStyle = window.getComputedStyle(heartItem).fontVariationSettings;
  
        if (currentStyle.includes('"FILL" 0')) {
          heartItem.style.fontVariationSettings = '"FILL" 1, "wght" 400, "GRAD" 0, "opsz" 0';
        } else {
          heartItem.style.fontVariationSettings = '"FILL" 0, "wght" 400, "GRAD" 0, "opsz" 0';
        }
      });
    });
  }
  
  // Re-initialize hover and heart click functionality after AJAX update
  function reinitialize() {
    initializeCardHover();
    initializeHeartClick();
  }
  
  // Load filters from the URL (sort and genres) on page load
  function loadFiltersFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const sort = urlParams.get("sort") || "random"; // Default to "random" if not in URL
    const genres = urlParams.get("genres");
  
    // Set the active filter button
    const activeFilter = [...filterButtons].find(button => button.dataset.sort === sort);
    if (activeFilter) {
      activeFilter.classList.add("active");
    }
  
    // Set the active genre buttons
    if (genres) {
      const selectedGenres = genres.split(",");
      genreButtons.forEach(button => {
        if (selectedGenres.includes(button.dataset.genre)) {
          button.classList.add("active");
        }
      });
    }
  
    updateMovies();
  }
  
  
  