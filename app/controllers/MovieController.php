<?php

require_once "../core/Controller.php";
require_once "../core/Session.php";
require_once "../middleware/Middleware.php";

class MovieController extends Controller{

    private $movieModel;

    public function __construct(){
        Session::Start();
        $username = Session::get('username');
 
        $this->movieModel = $this->model('Movie');
    }

    public function filtereMovies() {
        // .....
        // $type = isset($_GET['type']);

        $sort = isset($_GET['sort']) ? $_GET['sort'] : 'random';
        $genres = isset($_GET['genres']) ? explode(',', $_GET['genres']) : [];
        
        // .....
        $movies = $this->movieModel->getMovies($sort, $genres);
    
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            
            // If it's an AJAX request, return only the movie grid
            if(empty($movies)){
                echo '<div class="no-movies-found">No movies found with the selected filters.</div>';
            }else{
                foreach ($movies as $movie) {
                    include "../app/views/user/movieCard.php";
               }
            }

        } else {

        // Render the entire page if not an AJAX request
        $username = Session::get('username');
        $this->view('user/movie', ['username' => $username, 'movies' => $movies]); 

        }
        
    }

}