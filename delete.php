<?php
require('dbcontact.php');
 
$id=$_GET['id'];
 
// sql to delete a record
$sql = $conn->prepare("DELETE from ContactList Where id = $id");

$sql->bindParam(':id', $id);
 
// use exec() because no results are returne
$sql->execute();
//header('location:contact2.php');
?>