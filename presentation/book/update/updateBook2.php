<?php

require_once '../../../config/dbConfig.php';

$book_id="";

$header = "Book was NOT found.  Try a different Book ID";

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

        $result->data_seek(0);
            $title = htmlspecialchars($result->fetch_assoc()['title']);
        $result->data_seek(0);
            $author = htmlspecialchars($result->fetch_assoc()['author']);
        $result->data_seek(0);
            $genre = htmlspecialchars($result->fetch_assoc()['genre']);
        $result->data_seek(0);
            $year = htmlspecialchars($result->fetch_assoc()['year']);
            
         $header = "Found book $title.";
        
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
    <title>Update Book</title>
    
</head>
<body>
    <h1><?php echo $header; ?></h1>
    <p><?php echo $statement; ?> </p>

    <form method="post" action="updateBook3.php">
        Title <input type="text" name="title" value="<?php echo $title?>" >
        Author <input type="text" name="author"  value="<?php echo $author ?>" >
        Genre <input type="text" name="genre"  value="<?php echo $genre ?>" >
        Year <input type="text" name="year"  value="<?php echo $year ?>" >
        <input type="hidden" name="book_id" value="<?php echo $book_id ?>">
        <input type="submit">
    </form> <br> <br>  
    
    <a href='/presentation/book/delete/deleteBook.php'> Delete another Book  </a><br><br>
    <a href='/index.php'>Home </a><br>
    <a href='/presentation/book/create/addBook.php'> Add a New Book  </a><br>
    <a href='/presentation/book/read/bookListing.php'> Books in Library  </a><br>
    <a href='/presentation/book/update/updateBook.php'> Update a Book  </a>
  
</body>
</html>