<?php

require_once '../../../config/dbConfig.php';

$title=$author=$genre=$year=$book_id="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

  // collect value of input field

  //For title
  $title = $_POST['title'];
  if (!empty($title)) {
    //echo $title."<br>";
  } 
  
  //For author
  $author = $_POST['author'];
  if (!empty($author)) {
    //echo $author."<br>";
  } 
  
  //For genre
  $genre = $_POST['genre'];
  if (!empty($genre)) {
    //echo $genre."<br>";
  }
  
  //For year
  $year = $_POST['year'];
  if (!empty($year)) {
    //echo $year."<br>";
  }
  
    //For year
  $book_id = $_POST['book_id'];
  if (!empty($book_id)) {
    //echo $book_id;
  }
  
}

    $conn = getDBconnect($sv, $un, $pw, $db);

    $query = "UPDATE book SET title='$title', author='$author', genre='$genre', year=$year WHERE book_id=$book_id;";

    $conn->query($query);

    $conn->close();
    
    $statement = "The book '$title' from $year by $author was in the library under the genre $genre!";

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Updated!</title>
</head>
<body>
    <h1>Book Updated</h1>
    <p>Book Updated </p>
    <a href='updateBook.php'>Updated another book</a><br><br>
        
    <a href='../../../index.php'> Home </a><br>
    <a href='/presentation/book/read/bookListing.php'> Books in Library</a><br>
    <a href='/presentation/book/create/addBook.php'> Add a Book</a><br>
    <a href='/presentation/book/delete/deleteBook.php'> Delete a Book</a><br>
  
</body>
</html>