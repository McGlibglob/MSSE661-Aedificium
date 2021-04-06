<?php

//Album Class

class Album{
    //Attributes
    private $title, $artist, $genre, $year;
    
    //Constructor
    function __construct($title, $artist, $genre, $year) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->year = $year;
    }
    
    //Getters
    function get_title(){
        return $this->title;
    }
    function get_artist(){
        return $this->artist;
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
    function set_artist($artist){
        $this->artist = $artist;
    }
    function set_genre($genre){
        $this->genre = $genre;
    }
    function set_year($year){
        $this->year = $year;
    }
    
    //Array of attributes
    function array(){
        $albumArray = array(
            'title' => $this->title,
            'artist' => $this->artist,
            'genre' => $this->genre,
            'year' => $this->year
        );
        return $albumArray;
    }
}