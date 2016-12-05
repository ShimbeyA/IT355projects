<?php
include 'dbcontact.php';
 
 if(isset($_POST['Update'])){
 
$id=$_POST['id'];
 
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];

 
  $sql = $conn->prepare("UPDATE ContactList SET first_name ='$first_name', last_name ='$last_name', 
 email ='$email' WHERE id='$id'");
 
 //prepare statement
  //$stmt =query($sql);
 
 //excute query
 $stmt->execute();
//echo message to say it was updated
  echo $stmt->rowCount() . "<script>alert('Successfully Edit The Account!'); window.location='contact.php'</script>";
  }
?>