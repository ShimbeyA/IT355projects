
<html>
    <body>
    <form method="post" action="update.php">
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
        
                    <button type="submit" class="btn_confirm">
                        Submit
                    </button>
            </td>
        </tr>
    </table>
    </form>
    <a href="delete.php<?php echo '?id='.$id; ?>">
	<button type="submit" class="btn_confirm1" onclick="return confirm(' Delete Contact ( <?php echo $first_name?> ) ? ');">
		Delete
	</button>
    </a>
    </body>
</html>