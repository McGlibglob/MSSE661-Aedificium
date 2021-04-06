<?php

require_once 'dbConfig.php';
 

 $conn = getDBconnect($sv, $un, $pw, $db);
 
 $query = "INSERT INTO book (title, author, genre, year) VALUES ('THe Name of the Wind', 'Patrick Rothess', 'Fantasy', '2009')";
 
 $conn->query($query);
 
 $conn->close();
         
?>
