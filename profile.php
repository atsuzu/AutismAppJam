<?php
	echo<<<END

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
	</head>

	<div class="header">
            <button href="#" id = "homeId" class="btn btn-xlarge" /><i class="fa fa-home"></i></i>&nbspHome</button>
	</div>

	<div class="profileContainer">
    	<h1 align="center"> <span class="Thick"> Your Profile <span> </h1>
    	<form action="profileEdit.php" method="post">
    		<h3><table>
    			<tr>
    				<td><span class="Thin"> Username </span> </td>
    				<td><span class="Thin">  : Old Username </span></td>
    			</tr>
	    		<tr>
	    			<td><span class="Thin">Password </span></td>
	    			<td><input type="text" name="passEdit" placeholder="pass"></td>
	    		</tr><br/>
	    		<tr>
	    			<td><span class="Thin">Name </span></td>
	    			<td><input type="text" name="nameEdit" placeholder="name"></td>
	    		</tr><br/>
	    		<tr>
	    			<td><span class="Thin">Age </span></td>
	    			<td><input type="text" name="ageEdit" placeholder="age"></td>
	    		</tr><br/>
	    		<td><span class="Thin">Gender </span> </td>
	    		<td><select id="select1">           
	                <option> M </option>
	                <option> F </option>
	                <option> Other </option>
	              </select></td>
	            </tr></br>
	  
    		</table></h3>
    			<input type="submit" value="Save" id="submitButton">


    	</form>
    </div>

END;

?>