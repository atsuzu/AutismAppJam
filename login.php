<?php

		include 'connection.php';


		$user=mysqli_real_escape_string($connection, $_POST['user']);
		$pass=mysqli_real_escape_string($connection, $_POST['pass']);
		$user=strip_tags($user);
		$pass=strip_tags($pass);
		$sql="SELECT Users.password FROM Users WHERE Users.username='$user'";

		$result=mysqli_query($connection,$sql);
		if (!$result) 
		{
	   		die('Error: ' . mysqli_error($connection));
		}
		$row = mysqli_fetch_array($result);
		$val = $row[0];
		if ($val == $pass){
		 	echo "Success";
		}else{
		 	echo "Wrong login";
		}
		header('Location: index.php');
?>