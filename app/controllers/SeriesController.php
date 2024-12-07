<?php

require_once "../core/Controller.php";
require_once "../core/Session.php";
require_once "../middleware/Middleware.php";

class SeriesController extends Controller{

    private $movieModel;

    public function __construct(){
        Session::Start();
        $username = Session::get('username');


        $this->movieModel = $this->model('Movie');
        $movies = $this->movieModel->getAllMoviesByType('series');

        $this->view('user/series', ['username' => $username, 'movies' => $movies]);
    }
    


}