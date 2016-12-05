<?php
  
  require 'dbcontact.php';
 // define variables and set to empty values
$last_nameErr = $first_nameErr = $emailErr = "";
 $last_name = $first_name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email required";
  } else {
    $email = test_input($_POST["email"]);
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
}
//creating a function 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
?>

<html>
    <body>
    <form method="post" action=" insert.php">
    <table border="1" cellspacing="5" cellpadding="5" width="100%">
        <tr>
            <td>
                <label>First Name</label>
            </td>
            <td width="200px">
                <input type="text" class="text_Box" name="first_name"  placeholder="First Name ....." required />
            </td>
        </tr>
        <tr>
            <td>
                <label>Last Name</label>
            </td>
            <td width="200px">
                <input type="text" class="text_Box" name="last_name" placeholder="Last Name ....." required />
            </td>
        </tr>
        
        <tr>
            <td>
                <label>Email</label>
            </td>
            <td width="200px">
                <input type="email" class="text_Box" name="email" placeholder="Email ....." required/>
            </td>
        </tr>
                <input type="hidden" class="text_Box" name="id" value= "<?php if(isset($_GET['id'])) {echo $_GET['id'];}?>"/>
            
            <a href="insert.php<?php echo '?id='.$id; ?>">
			<button type="insert" class="btn_confirm1" onclick="return confirm('Submit Contact ( <?php echo $first_name?> ) ? ');">
				Add
			</button>
			</a>
        </tr>
    </table>
    </form>
    </body>
</html>