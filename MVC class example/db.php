<?php
$username= 'sassie';
$password= 'Dancers123';

try{
 $dbh= new PDO('mysql:host=localhost;dbname=sassie_books', $username, $password);
 
 echo "Success";
 
 
}
catch (PDOException $e){
    
    die("Error!:" .$e->getMessage());
}

?>