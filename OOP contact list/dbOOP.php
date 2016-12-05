<?php
$servername="localhost";
$username= "sassie";
$password ="Dancers123";
$dbname="sassie_books";

try{

//connecting to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //echo 'Connected to database';
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

    ?>