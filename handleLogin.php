<?php
	require  'connection.php';
	
    if (!empty($_POST['user'])  && !empty($_POST['pass']) ) {
		$userVar = $_POST['user'];
		$passVar = $_POST['pass'];
		login($userVar, $passVar);
}
	else
{
	echo "Sorry, there's an unexpected error!";
}

	// check user login sucessfully
	function login($userVar, $passVar){
		require  'connection.php'; // must require this again
	    $getIdQuery ="SELECT Users.id FROM Users WHERE Users.username='$userVar' AND Users.password='$passVar'";

	    try {
	    $stmt = $connection->prepare ( $getIdQuery ); 
	    $result = $stmt->execute (); 
	    } catch ( PDOException $ex ) {
	        echo ("Failed to run query: " . $ex->getMessage ());
	        // die("Fail to login!");
	    }
	    if ($result) {
	    $row1 = $stmt->fetchAll ();
	        if (sizeof($row1) != 0){
	        
	        	echo "Login seccessfully!";
	        }
	    }
	    else
	    {
	    	 echo  "Invalid username or password!"; 
	    }
	  
	}

?>