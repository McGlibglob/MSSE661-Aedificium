<?php

require_once 'config/dbConfig.php';
require_once 'domain/Book.php';


function getResult($sv, $un, $pw, $db){

    $conn = getDBconnect($sv, $un, $pw, $db);

    $query = "Select *from book;";

    $result = $conn->query($query);
    
    if(!$result) {
    	die("Fatal error.");}
        
    return $result;    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Books in Library</title>
</head>
<body>
    <h1>Books in the Library</h1>

    <a href='addBook.php'> Add a new book<a>
    <a href='index.php'>Back home</a>
    <br>
</body>
</html>
    
<?php

$result = getResult($sv, $un, $pw, $db);
$rows = $result->num_rows;
$books=array();

    for ($j = 0; $j < $rows; ++$j) {

        $result->data_seek($j);
            $title = htmlspecialchars($result->fetch_assoc()['title']);

        $result->data_seek($j);
            $author = htmlspecialchars($result->fetch_assoc()['author']);

        $result->data_seek($j);
            $genre = htmlspecialchars($result->fetch_assoc()['genre']);

        $result->data_seek($j);
            $year = htmlspecialchars($result->fetch_assoc()['year']);

        $result->data_seek($j);
            $book_id = htmlspecialchars($result->fetch_assoc()['book_id']);
        
   $book = new Book($title, $author, $genre, $year, $book_id) ;
   
   $bookArr = $book->array();
   $class = get_class($book);
   
   array_push($books, $bookArr);
    
 }
 

 
echo '<table style="width:100%">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Year</th>
            <th>book_id</th>
        </tr>';
foreach($books as $section => $type) {
    echo "<tr>";
    foreach($type as $key => $value){
        echo "<td>$value</td>";
    }
    echo "</tr>";
} 
echo '</table>';



/*echo '<table style="width:100%">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Year</th>
            <th>book_id</th>
            <th>Edit</th>
        </tr>';
    
    for ($j = 0; $j < $rows; ++$j) {
        echo '<tr>';
        $result->data_seek($j);
            $title = htmlspecialchars($result->fetch_assoc()['title']);
            echo '<td>'.$title ."</td>";
        $result->data_seek($j);
            $author = htmlspecialchars($result->fetch_assoc()['author']);
            echo '<td>'.$author ."</td>";
        $result->data_seek($j);
            $genre = htmlspecialchars($result->fetch_assoc()['genre']);
            echo '<td>'.$genre ."</td>";
        $result->data_seek($j);
            $year = htmlspecialchars($result->fetch_assoc()['year']);
            echo '<td>'.$year ."</td>"; 
        $result->data_seek($j);
            $book_id = htmlspecialchars($result->fetch_assoc()['book_id']);
            echo '<td>'.$book_id ."</td>";             
        echo '<td><form name="f2" action="javascript:select();" >
                <input id="edit" type="submit" name="edit" value="Edit" />
               </form></td>';
        echo '</tr>';
   
    }
    echo '</table>';
    
    $result->close();

    $conn->close();

?>
