<?php
//session_start();
$error='';
$conn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($conn, "users");
if(isset($_POST['submit'])){
	session_start();
	        $name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			
			if($password == $password2){
				$password = md5($password);
				$query = mysqli_query($conn, "INSERT INTO login(name,username,password) VALUES ('$name', '$username', '$password')");
				$_SESSION['username'] = $username;
				header("location: success.php");
			}else{
				$error="Password does not match";
				
			}
			mysqli_close($conn);
}

?>
