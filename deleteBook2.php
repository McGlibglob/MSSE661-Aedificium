<?php

require_once 'config/dbConfig.php';

$book_id="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // collect value of input field

  //For title
  $book_id = $_POST['book_id'];
  if (!empty($book_id)) {
    
  } 

  
}


    $conn = getDBconnect($sv, $un, $pw, $db);

    $query = "DELETE from book WHERE book_id='$book_id;";

    $conn->query($query);

    $conn->close();
    
    $statement = "The book '$book_id' was deleted the library!";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Deleted!</title>
</head>
<body>
    <h1>Book Deleted</h1>
    <p><?php echo $statement; ?> </p>
    <a href='deleteBook.php'>Delete another book</a>
    <a href='index.php'>Back home</a>
  
</body>
</html>