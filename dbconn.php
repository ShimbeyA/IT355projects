<?php
$servername="localhost";
$username= "sassie";
$password ="Dancers123";
$dbname="sassie_books";


private $servername = 'localhost';
  private $dbname = 'sassie_casinotest';
  private $updateUser = 'sassie_casupdate';
  private $updatePw ='Dancers123';
  private $readUser = 'sassie_casread';
  private $readPw = 'Dancers123';
  private $createUser = 'sassie_casinsert';
  private $createPw = 'Dancers123';

$titleErr = $last_nameErr = $first_nameErr = $priceErr = "";
$title = $last_name = $first_name = $price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"])) {
    $titleErr = "Title required";
  } else {
    $title = test_input($_POST["title"]);
  }

  if (empty($_POST["last_name"])) {
    $last_nameErr = "Last Name  required";
  } else {
    $last_name = test_input($_POST["last_name"]);
  }

  if (empty($_POST["first_name"])) {
    $first_nameErr = "First Name required";
  } else {
    $first_name = test_input($_POST["first_name"]);
  }

  if (empty($_POST["price"])) {
    $priceErr = "Must be numeric";
  } else {
    $price = test_input($_POST["price"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
 
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //echo 'Connected to database';
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//INSERT DATA

	if(isset($_POST['submit'])){
	//Create Statement
	
	
	$stmt=$conn->prepare("INSERT into BookList(first_name,last_name,title,price) values(:first_name,:last_name,:title,:price)");
	
	//Bind Values
	$stmt->bindParam(':first_name',$first_name);
	$stmt->bindParam(':last_name',$last_name);
	$stmt->bindParam(':title',$title);
	$stmt->bindParam(':price',$price);
	//Execute
	$stmt->execute();
	}
	
	try{
   
    //Selecting data 
    $stmt = $conn->query("SELECT * FROM BookList");
   
    $stmt->setFetchMode(PDO::FETCH_OBJ); 
   //$stmt->execute();
   
     
     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
     foreach($result as $row){
        echo $row['title'] . ' &nbsp' .  $row['last_name'] . ', '
        . $row['first_name'] . ' &nbsp' . $row['price'] . '<br><br>';
	 }
}
     
    catch(PDOException $e) {
    echo "Error: " . $e->getMessage();


}
	
?>