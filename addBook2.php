<?php

require_once 'dbConfig.php';

$title=$author=$genre=$year="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // collect value of input field
  
  //For title
  $title = $_POST['title'];
  if (!empty($title)) {
    echo $title."<br>";
  } 
  
  //For author
  $author = $_POST['author'];
  if (!empty($author)) {
    echo $author."<br>";
  } 
  
  //For genre
  $genre = $_POST['genre'];
  if (!empty($genre)) {
    echo $genre."<br>";
  }
  
  //For year
  $year = $_POST['year'];
  if (!empty($year)) {
    echo $year;
  }
  
}


    $conn = getDBconnect($sv, $un, $pw, $db);

    $query = "INSERT INTO book (title, author, genre, year) VALUES ('$title', '$author', '$genre', '$year')";

    $conn->query($query);

    $conn->close();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Added</title>
</head>
<body>
    <h1>Added Book</h1>

    
</body>
</html>