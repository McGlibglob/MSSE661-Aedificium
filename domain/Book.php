<?php
//Book Class

class Book{
    //Attributes of books
    private $title, $author, $genre, $year, $book_id;
    
    //Book constructor with id
    function __construct($title, $author, $genre, $year, $book_id) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->year = $year;
        $this->book_id = $book_id;
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
    function get_book_id(){
        return $this->book_id;
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
    function set_book_id($book_id){
        $this->book_id = $book_id;
    }    
    
    //Array of attributes
    function array(){
        $bookArray = array(
            'title' => $this->title,
            'author' => $this->author,
            'genre' => $this->genre,
            'year' => $this->year,
            'book_id' => $this->book_id
        );
        return $bookArray;
    }
}
