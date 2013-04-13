  <?php
  session_start();
	/*need to check elegantly all valid post fields in case they edited something... maybe not... but if something isnt set its just throwing error.
  $_SESSION['TypeOfFood'] = $_POST["TypeOfFood"];
  
  $_SESSION['CateringServices'] = $_POST["CateringServices"];
  /* etc ?? this work?*/

  ?>
  <html>
  <head>
    <meta charset="utf-8" />
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen" />
    
  </head>
  <body>
   <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
   <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script> 
   
   <div class="container well" >
     <div class="well row-s">
       <h4><?php echo $_SESSION['EventTitle']; ?> on <?php echo $_SESSION['DateTime']; ?> <hr>
         <?php echo $_SESSION['AuctionType']; ?> Auction</h4>
       </div>
       <div class="row span11 pull-right well">
	   
        <h3><u>RFP Review</h3></u>
		<div class="container">
		<div class="row">
		<div class="span10">Hosting Organization: <?php echo $_SESSION['HostInfo'] ?> on <?php echo $_SESSION['EventAddress'] ?></div>
		<div class="span2">	<button class="btn" action="create-an-event.php"> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">Type of Event: <?php echo $_SESSION['EventType'] ?>, <?php echo $_SESSION['indooroutdoor'] ?></div>
		<div class="span2">		<button class="btn" action="create-an-event.php"> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">Date and Time: <?php echo $_SESSION['DateTime'] ?> </div>
		<div class="span2">		<button class="btn" action="create-an-event.php"> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">Catering: <?php echo $_SESSION['CateringServices'] ?>  </div>
		<div class="span2">		<button class="btn" action="create-an-event.php"> Edit </button></div>
		</div>
		<hr>
		</div>
      
		</div>
      </body>
      </html>