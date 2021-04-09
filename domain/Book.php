<?php
//Book Class

class Book{
    //Attributes of books
    private $title, $author, $genre, $year, $book_id, $checkout;
    
    //Book constructor with id
    function __construct($title, $author, $genre, $year, $book_id, $checkout) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->year = $year;
        $this->book_id = $book_id;
        $this->checkout = $checkout;
    }

    
    //Getters
    function get_title(){
        return $title;
    }
    function get_author(){
        return $author;
    }
    function get_genre(){
        return $genre;
    }
    function get_year(){
        return $year;
    }
    function get_book_id(){
        return $book_id;
    }
    function get_checkout(){
        return $checkout;
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
    function set_checkout($checkout){
        $this->book_id = $book_id;
    }      
    
    //Array of attributes
    function array(){
        $bookArray = array(
            'book_id' => $this->book_id,
            'title' => $this->title,
            'author' => $this->author,
            'genre' => $this->genre,
            'year' => $this->year,
            "checkout" => $this->checkout
        );
        return $bookArray;
    }
}
