<?php
session_start();
$fields = array("TablesChairs", "Diningware", "Staff", "BarStations", "SetUpCleanUp", "AdditionalInclusions");
$required = array();
$nextPage = 'planneruploads.php';
include 'FieldCheck.php';

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
      <h3><u>Excluded Services</h3></u>
      <form class="form-horizontal" method="post">
        Please select the responsibilities that you do <b> not </b> want to the caterer to bid on.
		<ul class="unstyled">
			<li> <input type="checkbox" name="TablesChairs" /> Tables and Chairs </li>
			<li> <input type="checkbox" name="Diningware" /> Diningware </li>
			<li> <input type="checkbox" name="Staff" /> Staff </li>
			<li> <input type="checkbox" name="BarStations" /> Bar Stations</li>
			<li> <input type="checkbox" name="SetUpCleanUp" /> Set up and Clean up</li>
</ul>
			      <h3><u>Additional Inclusions</h3></u>
        <!--add your shit here-->
		 <textarea class="input-block-level" id="Alcoholic" rows="3" name="AdditionalInclusions" placeholder="[None]"></textarea>
			  <input class="pull-right img-rounded" type="submit" value="Next" name="input"/>

      </form>
    </div>
  </div>
</body>
</html>