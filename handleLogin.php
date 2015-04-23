<?php
	require  'connection.php';

	if (!empty($_POST['user'])  && !empty($_POST['pass']) ) {
		$userVar = $_POST['user'];
		$passVar = $_POST['pass'];
		// echo "$userVar and $passVar";
		login($userVar, $passVar);
		
	}
	else
	{
		echo "Sorry, there's an unexpected error!";
	}
	
	// check user login 
	function login($userVar, $passVar){ // could not make sql work, use a static account for now

		// $query = "
		// 	SELECT *
		// 	FROM mydb.Users
		// 	WHERE
		// 	username = '$userVar' AND password='$passVar'
		// 	";

		if ($userVar == 'sarsung_user' && $passVar == 'sarsung_pass'){
			// Set session variables
			$_SESSION['user'] = $userVar;
			$_SESSION['pass'] = $passVar;
			echo "Sucessfully logged in!";
		}
		else{
			echo "Invalid username or password!";
		}


			// $result = $conn->execute (); 
			// if ($result->num_rows > 0) {
			// 	echo "Login seccessfully!";

			// }
			// else{
			// 	echo "Invalid username or password!";
			// }
	   
	    // try {
	    // $stmt = $conn->prepare ( $query ); 
	    // $result = $stmt->execute (); 
	    // } catch ( PDOException $ex ) {
	    //     echo ("Failed to run query: " . $ex->getMessage ());
	    //     // die("Fail to login!");
	    // }
	    // if ($result) {
	    // $row1 = $stmt->fetchAll ();
	    //     if (sizeof($row1) != 0){
	        
	    //     	echo "Login seccessfully!";
	    //     }
	    // }
	    // else
	    // {
	    // 	 echo  "Invalid username or password!"; 
	    // }
	  
	}

