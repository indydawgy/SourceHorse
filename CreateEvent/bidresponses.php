<?php
session_start();
$fields = array("BidResponse", "BidOtherText");
$required = array("BidResponse");
$nextPage = 'plannergenerated.php';
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
      <h3><u>Bid Responses</h3></u>
      <form class="form-horizontal" method="post">
         Indicate how you would like to see prices.<br><br>
				<input type="radio" name="BidResponse" value="Price per Plate, Tax, Deposit, Total"> Price per Plate, Tax, Deposit, Total </input><br><br>
				<input type="radio" name="BidResponse" value="Price per Plate, Total"> Price per Plate, Total</input><br><br>
				<input type="radio" name="BidResponse" value="Total"> Total</input><br><br>
				<input type="radio" name="BidResponse" value="Other"> Other <input type="text" name="BidOtherText"/></input><br><br>
        <!--add your shit here-->
			  <input class="pull-right img-rounded span2" type="submit" value="Next" name="input"/>

      </form>
    </div>
  </div>
</body>
</html>