  <?php
  session_start();

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
        <h3><u>Additional Information</h3></u>
        <form class="form-horizontal" method="post" action="review.php">
		<div class="control-group">
		   <input type="checkbox" name="ThirdParty" /> Alcohol
		</div>
			 <div class="control-group">
            <label class="control-label" for="dietlist">Dietary Requirements:</label>
            <div class="controls">
			<ul id="dietlist" class="unstyled">
			<li> <input type="checkbox" name="GlutenFree" /> Gluten Free </li>
			<li> <input type="checkbox" name="Kosher" /> Kosher </li>
			<li> <input type="checkbox" name="Vegan" /> Vegan </li>
			<li> <input type="checkbox" name="Vegetarian" /> Vegetarian </li>
			<li> <input type="checkbox" name="CustomDiet" /> <input type="text" name="CustomDietText" /> </li>
            </ul>
			</div>
          </div>
		  	<div class="control-group">
		   Indoor/Outdoor: <br>
		    <select name="indooroutdoor">
    <option>Indoor</option>
    <option>Outdoor</option>
  </select>
		</div>
		       <input class="pull-right img-rounded" type="submit" value="Next"/>
			   </form>
        </div>
		</div>
      </body>
      </html>