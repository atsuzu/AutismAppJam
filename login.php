<?php
	include "connection.php"
		$user=mysqli_real_escape_string($connection, $_POST['user']);
		$pass=mysqli_real_escape_string($connection, $_POST['pass']);
		$user=strip_tags($user);
		$pass=strip_tags($pass);
		$sql="SELECT password FROM Users WHERE username='$user'"

		if (!mysqli_query($connection,$sql)) 
		{
	  		die('Error: ' . mysqli_error($connection));
		}

		if ($sql == $pass){
			echo "Success";
		}else{
			echo "wrong login";
		}
		header('Location: index.php');
?>