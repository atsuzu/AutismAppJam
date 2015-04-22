
	<!DOCTYPE html>
	<html>
	<head>
	  <meta charset="utf-8">

	  <title>AutismConnect</title>
	  <meta name="viewport" content="width=device-width">
	  <!--<link rel='stylesheet' type='text/css' href='stylesheet.css'/>-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	  <!-- Latest compiled and minified CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	  <!-- Optional theme -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	  
	  <!-- Latest compiled and minified JavaScript -->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="https://www.parsecdn.com/js/parse-1.2.18.min.js"></script>
	  <script type = "text/javascript" src="js/events.js"></script>

	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

	  <link rel="stylesheet" href="css/eventStyle.css">
	  <link rel="stylesheet" href="css/eventButton.css">
	  <link rel="stylesheet" href="css/profile.css">
	  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	  

	  <script>

	  	// Prints the current positions to console
		function getPosition(position){
			console.log(position.coords.latitude,position.coords.longitude);
		}


		function distance(lat2, lon2) {

			navigator.geolocation.getCurrentPosition(getPosition)

			// lat1=getLat();
			// lon1=getLon();
			console.log("lat2: " + lat2 + "lon2: " + lon2)
			lat1=37;
			lon1=-117;
			var unit = "N"
			var radlat1 = Math.PI * lat1/180
			var radlat2 = Math.PI * lat2/180
			var radlon1 = Math.PI * lon1/180
			var radlon2 = Math.PI * lon2/180
			var theta = lon1-lon2
			var radtheta = Math.PI * theta/180
			var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
			dist = Math.acos(dist)
			dist = dist * 180/Math.PI
			dist = dist * 60 * 1.1515
			if (unit=="K") { dist = dist * 1.609344 }
			if (unit=="N") { dist = dist * 0.8684 }
			return dist
		}   	
		</script>
	</head>


	<body> 
		<div class="profileContainer">
	    	<h1 align="center"> <span class="Thick"> Nearby Events! <span> </h1>

	    	<?php
	    		require 'connection.php';
	    		$query = "SELECT * FROM Users ORDER BY id DESC";
	    		$result=mysqli_query($connection,$query);
				$i = 0;

				echo "<table>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr bgcolor='$bgcolor'>";
						echo "<td width='90px'>" . $row['name'] . "</td>";
						echo "<td width='100px'>" . "<script>distance(" . $row[latitude] . "," . $row[longitude] . ")</script>" . "</td>";
						echo "<tr>";
						$i++;
				}
				echo "</table>";
	    	?>
	    </div>
	   </body>