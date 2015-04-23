<?php
// check if user already logged in
  if (isset($_SESSION['user'])  && isset($_SESSION['pass'])){
    header('Location: events.php');
    exit();
  }
  else{
    displayIndexHtml();

  }


  function displayIndexHtml(){
    echo<<<END
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>AutismConnect</title>
  <meta name="description" content="My Parse App">
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

  <link rel="stylesheet" href="css/style.css">
  <script type = "text/javascript" src="js/javascript.js"></script>
  <link rel="stylesheet" href="css/animeButton.css">

</head>

<body>
  <div class="container">
    <div class="login-container">
      <div id="output"></div>
      <div class="avatar"></div>
      <div class="form-box">
          <form id="loginFormId" action="" method="post" onsubmit="return false;">
              <input name="user" id="usernameId" type="text" placeholder="username" required>
              <input name="pass" id="passId" type="password" placeholder="password" required>
              <input type='submit' id='submitLogin' value='Submit'>
          </form>
      </div>
      <div class="alert alert-danger error-resize center" align="center" id="warning">
      <b>Invalid username or password, please try again!</b>
      </div>
      <a href="registration.php">Registration</a>
        
  </div>
</div>
</body>
</html>

END;
}

?>

  
