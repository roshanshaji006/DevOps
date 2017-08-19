<?php
session_start();
if(isset($_SESSION['username'])){
	}else
		header("location: index.php");
	

?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
            	  <h1>Welocome <?php echo $_SESSION['username']; ?> </h1>
				  <?php
				  if ($_SESSION['username']=='admin')
					 echo '<a href="register.php">Register New User </a>';
				  ?>
				  <br><br>
				  <a href="logout.php">logout</a>
    </body>
</html>
