<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new book</title>
</head>
<body>
    <h1>Add a new book!</h1>
    <form method="post" action="addBook2.php">
        Title <input type="text" name="title">
        Author <input type="text" name="author">
        Genre <input type="text" name="genre">
        Year <input type="text" name="year">
        <input type="submit">
        
    </form>
    
    <a href='/index.php'> Home </a><br>
    <a href='/presentation/book/read/bookListing.php'> Books in Library/<a><br>
    <a href='/presentation/book/update/updateBook.php'> Update a Book</a><br>
    <a href='/presentation/book/delete/deleteBook.php'> Delete a Book</a><br>
    
</body>
</html>