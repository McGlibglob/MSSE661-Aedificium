<?php

require_once '../../../config/dbConfig.php';

$book_id="";

$header = "Book was NOT added!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $book_id = $_POST['book_id'];
  if (!empty($book_id)) {
    
  } 

}


    $conn = getDBconnect($sv, $un, $pw, $db);
    
    $query = "SELECT * FROM book WHERE book_id='$book_id';";
    
    $result = $conn->query($query);
    
    $rows = $result->num_rows;
    
    
    if($rows > 0){

        $query = "DELETE from book WHERE book_id='$book_id';";

        $conn->query($query);

        $statement = "The book with book_id: '$book_id' was deleted the library!";
        
        $header = "Book Deleted!";
    }
    else {
        $statement = "The book with book_id: '$book_id' does not exist.";
    }
    
    $result->close();
    
    $conn->close();
    
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
    <h1><?php echo $header; ?></h1>
    <p><?php echo $statement; ?> </p>

    
    <a href='/presentation/book/delete/deleteBook.php'> Delete another Book  </a><br>
    <a href='/index.php'>  Home   </a><br>
    <a href='/presentation/book/create/addBook.php'> Add a New Book  </a><br>
    <a href='/presentation/book/read/bookListing.php'> Books in Library  </a><br>
    <a href='/presentation/book/update/updateBook.php'> Update a Book  </a>
  
</body>
</html>