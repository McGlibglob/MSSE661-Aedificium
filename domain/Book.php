<?php
//Book Class

class Book{
    //Attributes of books
    private $title, $author, $genre, $year;
    
    //Book constructor
    function __construct($title, $author, $genre, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->year = $year;
    }
    
    //Getters
    function get_title(){
        return $this->title;
    }
    function get_author(){
        return $this->author;
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
    function set_author($author){
        $this->author = $author;
    }
    function set_genre($genre){
        $this->genre = $genre;
    }
    function set_year($year){
        $this->year = $year;
    }
    
    //Array of attributes
    function array(){
        $bookArray = array(
            'title' => $this->title,
            'author' => $this->author,
            'genre' => $this->genre,
            'year' => $this->year
        );
        return $bookArray;
    }
}
