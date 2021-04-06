<?php
class Movie{
    //Attributes
    private $title, $director, $genre, $year;
    
    //Constructor
    function __construct($title, $director, $genre, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;
    }
    
    //Getters
    function get_title(){
        return $this->title;
    }
    function get_director(){
        return $this->director;
    }
    function get_genre(){
        return $this->genre;
    }
    function get_year(){
        return $this->year;
    }
    
    //Setters
    function set_title($title){
        $this->title = $title;
    }
    function set_director($director){
        $this->director = $director;
    }
    function set_genre($genre){
        $this->genre = $genre;
    }
    function set_year($year){
        $this->year = $year;
    }
    
    //Array of attributes
    function array(){
        $movieArray = array(
            'title' => $this->title,
            'director' => $this->director,
            'genre' => $this->genre,
            'year' => $this->year
        );
        return $movieArray;
    }
}

?>

