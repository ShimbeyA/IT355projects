<?php
//credantials
//require 'dbcontact.php';
$servername="localhost";
$username= "sassie";
$password ="Dancers123";
$dbname="sassie_books";

//connecting to the database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //echo 'Connected to database';
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM ContactList");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
   //Set fetch mode
     for($i=0; $row = $stmt->fetch(); $i++){
  ?>
  <tbody>
  <tr>
    <td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['last_name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><a href="contact2.php?id=<?php echo $row['id'];?>">Edit<br></a></td>
    <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete<br></a></td>
  </tr>
  <?php
      }
   ?>
  