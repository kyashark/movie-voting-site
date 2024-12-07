<?php

class Movie{
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    // Get Movies by movie type
    public function getAllMoviesByType($type){
        $stmt = $this->db->prepare("SELECT * FROM movies WHERE type =?");
        $stmt->execute([$type]);
        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $movies;
    }


}