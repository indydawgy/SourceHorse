<?php
  session_start();
  $fields = array("AdultPlates", "ChildPlates", "VegetarianPlates");
  $required = array("AdultPlates", "ChildPlates", "VegetarianPlates");
  $nextPage = 'caterertypeofservice.php';
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
        <h3><u>Plates</h3></u>
        <form class="form-horizontal" method="post">
		 <div class="control-group">
        <label class="control-label" for="adultplates">Adult Plates:  </label>
        <div class="controls">
         <input type="text" id="adultplates" name="AdultPlates" placeholder="#-#"/>
       </div>
     </div>
	  <div class="control-group">
        <label class="control-label" for="childplates">Child Plates: </label>
        <div class="controls">
         <input type="text" id="childplates" name="ChildPlates" placeholder="#-#"/>
       </div>
     </div>
	 	  <div class="control-group">
        <label class="control-label" for="vegeplates">Vegetarian Plates: </label>
        <div class="controls">
         <input type="text" id="vegeplates" name="VegetarianPlates" placeholder="#-#"/>
       </div>
     </div>
	  <input class="pull-right img-rounded" type="submit" value="Next" name="input"/>
		</form>
		    
        </div>
		</div>
      </body>
      </html>