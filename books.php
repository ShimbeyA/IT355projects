
 <?php
  
  //require 'dbconn.php';
 // require 'booksins.php';
 // define variables and set to empty values
?>

<html>
    <body>
         <p><span class="error">* required field.</span></p>
         
        <form action="dbconn.php" method="post">
            Title : <input type="text" name="title">
            <span class="error">* <?php echo $titleErr;?></span>
            <br>
            Last Name: <input type="text" name="last_name">
            <span class="error">* <?php echo $last_nameErr;?></span>
            <br>
            First Name: <input type="text" name="first_name">
            <span class="error">* <?php echo $first_nameErr;?></span><br>
            Price : <input type="text" name="price">
            <span class="error">* <?php echo $priceErr;?></span>
            <br>
            
            <button type="submit" name="submit" >Submit</button>
            
        </form>
     </body>
</html>
  
 
