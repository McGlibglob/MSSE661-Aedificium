<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aedificium Library</title>
</head>
<body>
    <h1>Delete a book</h1>
    
    <a href='/index.php'>  Home   </a><br>
    <a href='/presentation/book/create/addBook.php'> Add a New Book  </a><br>
    <a href='/presentation/book/read/bookListing.php'> Books in Library  </a><br>
    <a href='/presentation/book/update/updateBook.php'> Update a Book  </a><br>
    
    
    
    <form method="post" action="deleteBook2.php">
        Book ID <input type="text" name="book_id">
        <input type="submit">
        
    </form>
    
</body>
</html>