<?php

	$dbhost = "dbhcoder.ciitzrzepter.us-west-2.rds.amazonaws.com";
	$dbuser = "dbhcoder";
	$dbpass = "sargiskyle";
	$db = "mydb";

	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

	if (mysqli_connect_errno())  //if ($connection==false)
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	mysqli_select_db($db);

?>