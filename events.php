<?php
    displayEventHtml();
  
    function displayEventHtml(){
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
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="header">
              <button href="#" id = "profileId" class="btn btn-xlarge" /><i class="fa fa-user"></i></i>&nbspProfile</button>
            
</div>

<div class="container">
    <h1 align="center"> <span class="Thin">MY </span><span class="Thick">EVENT <span> </h1>
  <div class="row">
      <button href="#" id="createButtonId"  class="btn btn-xlarge" /><i class="fa fa-clock-o fa-5x" data-toggle="modal" data-target="#createEventModal"> </i> Create</button>
      <br>
      <button href="#" id="joinButtonId"class="btn btn-xlarge" /><i id="joinId" class="fa fa-chevron-up fa-5x" ></i>Join&nbsp&nbsp&nbsp&nbsp</button>

      <div class="col-xs-8" align="center" href="#" class="container" id="joinOptionsID"><h3 align="center"><span class="Thin">Select Event Type</span></h3>
      <select class="form-control" id="selJoinId">
              <option>Sports</option>
              <option>Games</option>
              <option>Food</option>
              <option>Gameshow Chat</option>
      </select> <br>
      <button id="joinTypeSubmitId" type="button" class="btn btn-info" data-toggle="modal" data-target="#joinEventModal" >Submit</button>
  </div>
  </div>
  
</div>

 <!-- Create Event modal -->
<div class="modal fade" id="createEventModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="createEventModal" align="center">Create an Event</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label class="control-label">List of events:</label>
              <select class="form-control" >
                <option>Sports</option>
                <option>Games</option>
                <option>Food</option>
                <option>Gameshow Chat</option>
              </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Describe your event:</label>
            <textarea class="form-control" id="eventDesId" ></textarea>
          </div>
        </form>
          <div class="alert alert-success error-resize center" align="center" id="createModalWarning">

          </div>
      </div>
      <div class="modal-footer">
        <button id="closeCreateId" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="createEventButtonId" type="button" class="btn btn-info">Submit</button>
      </div>
    </div>
  </div>
</div>

 <!-- Join Event modal -->
<div class="modal fade" id="joinEventModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="joinEventModal" align="center">List of selected events</h4>
      </div>

      <div id="sportId">
        <p> <b>  EventType:</b> Sport </p>
        <p> <b>  Date:</b> 04/31/2015 (Sunday) </p>
        <p> <b>  Time:</b> 2:30 PM </p>
        <p> <b>  Location:</b> Aldrich Park (Irvine) </p>
        <p> <b>  Description:</b> Come and play mini football with other kids, free food will be served with fruit punch and orange juice!
            Awesome prizes! Everyone is welcome to join :)</p>
      </div>

      <div id="gameId">
        <p> <b>  EventType:</b> Game (Crossword Puzzle Challenge) </p>
        <p> <b>  Date:</b> 04/31/2015 (Sunday) </p>
        <p> <b>  Time:</b> 3:00 PM </p>
        <p> <b>  Location:</b> Donald Bren Hall (Irvine) </p>
        <p> <b>  Description:</b> If you like challenges, this is your chance to come and have fun with other kids, free food will be served with fruit punch and orange juice!
            Awesome prizes! Everyone is welcome to join :)</p>
      </div>

      <div id="foodId">
        <p> <b>  EventType:</b> Food </p>
        <p> <b>  Date:</b> 04/31/2015 (Sunday) </p>
        <p> <b>  Time:</b> 1:30 PM </p>
        <p> <b>  Location:</b> Aldrich Park (Irvine) </p>
        <p> <b>  Description:</b> Come and have a good time with other kids. Plus, you'll have a chance to enjoy delicious food from different countries in the WORLD FOR FREE!
            Why? Becase we love having fun as much as you do! Everyone is welcome to join :)</p>
      </div>

      <div id="GameshowChatId">
        <p> <b>  EventType:</b> GameShow Talk </p>
        <p> <b>  Date:</b> 04/28/2015 (Saturday) </p>
        <p> <b>  Time:</b> 11:30 AM </p>
        <p> <b>  Location:</b> Aldrich Park (Irvine) </p>
        <p> <b>  Description:</b> Do you love any gameshow such as Dancing With the Stars, Family Feud, The Amazing Race, etc. 
        Have you been so excited to wait and watch your episodes of your favorite gameshow to the point that you ignored
        your hungriness? And you are trying to find someone to share and talk about your favorite gameshow? We are giving you the
        chance to do that! Plus, free food will be served! We just ove to have kids bonding and having fun togother :)
        So, come and join us :) Everyone is welcome to join :) </p>
      </div>

      <div class="modal-body">
        <form>
          <div class="form-group">
            
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  type="button" class="btn btn-info">Submit</button>
      </div>
    </div>
  </div>
</div>


</body>

</html>

END;

    }

?>