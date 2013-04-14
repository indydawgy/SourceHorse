<?php
  session_start();
  $fields = array("CateringTypeOfService", "CustomCatererServiceText");
   $required = array("CateringTypeOfService");
  $nextPage = 'mealspecs.php';
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
        <h3><u>Type of Service</h3></u>
        <form class="form-horizontal" method="post">
		
			<input type="radio" name="CateringTypeOfService" value="Seated Meal"> Seated Meal  <i class="icon-info-sign" id="idFullService" 
				data-content="<u>Full Service Caterer:</u> <br/> A full-service caterer handles all aspects of an event, such as a graduation party, wedding reception or corporate business dinner. A sales represeentative helps the client plan the menu, decorations and theme. The caterer hires cooks to prepare food according to the client's wishes, sets up catering tables, decorations and lighting, and employs servers and bartenders. Full service caterers can also provide entertainment for the event. Full service caterers work in banquet halls, hotel ballrooms, schools, cruise ships, casinos and other venues at the client's request. They caharge per person fees for food and other services. (EFUCKINGHOWTF)"  
				data-trigger="hover"></i></input><br>

				<input type="radio" name="CateringTypeOfService" value="Dinner Buffet"> Dinner Buffet <i class="icon-info-sign" id="idHotCatering" 
				data-content="<u>Hot Catering:</u> <br> Food is cooked and delivered to the site. It is kept hot at the site in metal trays heated by restaurant quality sternos."  
				data-trigger="hover"></i></input><br>
				<input type="radio" name="CateringTypeOfService" value="Passed hors d'oeuvres"> Passed hors d'oeuvres<i class="icon-info-sign" id="idDelivery" 
				data-content="<u>Delivery:</u> <br> Food is delivered and client is responsible for clean-up."  
				data-trigger="hover"></i></input><br>
				<input type="radio" name="CateringTypeOfService" value="Stationary hors d'oeuvres"> Stationary hors d'oeuvres<i class="icon-info-sign" id="idPick" 
				data-content="<u>Pick-Up:</u> <br> The client is responsible for picking up the food and managing their own event and clean up."  
				data-trigger="hover"></i></input><br>
					<input type="radio" name="CateringTypeOfService" value="Stationary hors d'oeuvres"> Stationary hors d'oeuvres<i class="icon-info-sign" id="idPick" 
				data-content="<u>Pick-Up:</u> <br> The client is responsible for picking up the food and managing their own event and clean up."  
				data-trigger="hover"></i></input><br>
		<!--
			<ul id="dietlist" class="unstyled">
			<li> <input type="checkbox" name="SeatedMeal" /> Seated Meal </li><br>
			<li> <input type="checkbox" name="DinnerBuffet" /> Dinner Buffet </li><br>
			<li> <input type="checkbox" name="PassedHorsDoeuvres" /> Passed hors d'oeuvres </li><br>
			<li> <input type="checkbox" name="StationaryHorsDoeuvres" /> Stationary hors d'oeuvres </li><br>
			<li> <input type="checkbox" name="CustomCatererService" /> <input type="text" name="CustomCatererServiceText" /> </li>
            </ul>-->
		
		       <input class="pull-right img-rounded" type="submit" value="Next" name="input"/>
			   </form>
			   </div>
		</div>
      </body>
      </html>