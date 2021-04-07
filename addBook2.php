<?php

require_once 'config/dbConfig.php';

$title=$author=$genre=$year="";

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
    //echo $year;
  }
  
}


    $conn = getDBconnect($sv, $un, $pw, $db);

    $query = "INSERT INTO book (title, author, genre, year) VALUES ('$title', '$author', '$genre', '$year')";

    $conn->query($query);

    $conn->close();
    
    $statement = "The book '$title' from $year by $author was added to the library under the genre $genre!";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Added!</title>
</head>
<body>
    <h1>Added Book</h1>
    <p><?php echo $statement; ?> </p>
    <a href='addBook.php'>Add another book</a>
    <a href='index.php'>Back home</a>
  
</body>
</html>