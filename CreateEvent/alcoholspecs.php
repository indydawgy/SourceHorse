<?php
session_start();
$fields = array("AlcoholService","Liquors","Wines","Beers");
$required = array();
$nextPage = 'excludedservices.php';
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
      <h3><u>Alcohol Specification</h3></u>
      <form class="form-horizontal" method="post">

		In addition to a <u> seated meal service </u> do you require:
          <select name="AlcoholService">
    <option>Full Bar</option>
    <option>Half Bar</option>
	 <option>No Bar</option>
  </select>
<br>
	  <div class="control-group">
        <label class="control-label" for="Desserts">Liquors: </label>
        <div class="controls">
         <textarea class="input-block-level" id="Desserts" name="Liquors" placeholder="[No Liquors]"/></textarea>
       </div>
     </div>
	   <div class="control-group">
        <label class="control-label" for="Non">Wines: </label>
        <div class="controls">
         <textarea class="input-block-level" id="Non" rows="3" name="Wines" placeholder="[No Wines]"></textarea>
       </div>
     </div>
	   <div class="control-group">
        <label class="control-label" for="Alcoholic">Beers: </label>
        <div class="controls">
          <textarea class="input-block-level" id="Alcoholic" rows="3" name="Beers" placeholder="[No Beers]"></textarea>
       </div>
     </div>
        <!--add your shit here-->
			  <input class="pull-right img-rounded" type="submit" value="Next" name="input"/>

      </form>
    </div>
  </div>
</body>
</html>