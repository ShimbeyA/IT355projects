<?php
//including php
include ('dbcontact.php');
 
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];

if(empty($_POST['id'])){
 //inserting into the database
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO ContactList (first_name, last_name, email )
VALUES ('$first_name', '$last_name', '$email')";
 
$conn->exec($sql);
  //echo a message if successful      
echo "<script>alert('Successfully Added!'); window.location='contact2.php'</script>";

}

//posting the ID
 if(isset($_POST['id'])){
 
$id=$_POST['id'];
 
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];

 //updating a contact 
  $sql = ("UPDATE ContactList SET first_name ='$first_name', last_name ='$last_name', 
 email ='$email' WHERE id='$id'");
 
 //prepare statement
  $stmt =$conn->prepare($sql);
 
 //excute query
 $stmt->execute(array($first_name,$last_name,$email));
//echo message to say it was updated
  echo $stmt->rowCount() . "<script>alert('Successfully Edit The Account!'); window.location='contact2.php'</script>";
  }
?>


