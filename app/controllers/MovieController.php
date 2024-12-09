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
 
        $this->view('user/movie', ['username' => $username]);
    }

    public function filtereMovies() {
                $sort = isset($_GET['sort']) ? $_GET['sort'] : 'random';
                $genres = isset($_GET['genres']) ? explode(',', $_GET['genres']) : [];
        
                $movies = $this->movieModel->getMovies($sort, $genres);
                
                echo json_encode($movies);
    }

    


}