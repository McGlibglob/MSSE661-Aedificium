<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aedificium Library</title>
</head>
<body>
    <h1>Update a Book</h1>

    <p>What is the book that needs to be updated?<p>
    <form method="post" action="updateBook2.php">
        Book ID <input type="text" name="book_id">
        <input type="submit">
        
    </form>
  
    <a href='/index.php'>  Home   </a><br>
    <a href='/presentation/book/create/addBook.php'> Add a New Book  </a><br>
    <a href='/presentation/book/read/bookListing.php'> Books in Library  </a><br>
    <a href='/presentation/book/delete/deleteBook.php'> Delete a Book  </a> <br>
            
</body>
</html>