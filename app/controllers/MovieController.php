<?php

require_once "../core/Controller.php";
require_once "../core/Session.php";
require_once "../middleware/Middleware.php";

class MovieController extends Controller{

    public function movie(){
        Session::start();
        $username = Session::get('username');
        $this->view('user/movie', ['username' => $username]);
    }
}