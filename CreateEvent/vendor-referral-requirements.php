  <?php
  session_start();

  $_SESSION['AuctionType'] = $_POST["AuctionType"];
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
        <h3><u>The Basics </h3></u>
        <form class="form-horizontal" action="vendor-referral-requirements2.php" method="post">
          <div class="control-group">
            <label class="control-label" for="vendorType">Type of Food:</label>
            <div class="controls">
              <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i>
                  <input class="span3" id="vendorType" data-provide="typeahead" data-items="4" type="text" placeholder="Search" name="TypeOfFood"/></span>
                </div>
              </div>
              <script>  
              var subjects = ['Thai', 'Tubs', 'Toga', 'Tulani', 'Crazymart', 'CSS', 'HTML5', 'CSS3', 'JSON'];   
              $('#vendorType').typeahead({source: subjects})  
              </script>  
            </div>
			 <div class="control-group">
            <label class="control-label" for="CateringServices">Catering Services:</label>
            <div class="controls">
				<input type="radio" name="CateringServices" value="FullService">Full Service  <i class="icon-info-sign" id="idFullService" 
				data-content="<u>Full Service Caterer:</u> <br/> A full-service caterer handles all aspects of an event, such as a graduation party, wedding reception or corporate business dinner. A sales represeentative helps the client plan the menu, decorations and theme. The caterer hires cooks to prepare food according to the client's wishes, sets up catering tables, decorations and lighting, and employs servers and bartenders. Full service caterers can also provide entertainment for the event. Full service caterers work in banquet halls, hotel ballrooms, schools, cruise ships, casinos and other venues at the client's request. They caharge per person fees for food and other services. (EFUCKINGHOWTF)"  
				data-trigger="hover"></i></input><br>

				<input type="radio" name="CateringServices" value="HotCatering"> Hot Catering <i class="icon-info-sign" id="idHotCatering" 
				data-content="<u>Hot Catering:</u> <br> Food is cooked and delivered to the site. It is kept hot at the site in metal trays heated by restaurant quality sternos."  
				data-trigger="hover"></i></input><br>
				<input type="radio" name="CateringServices" value="Delivery"> Delivery<i class="icon-info-sign" id="idDelivery" 
				data-content="<u>Delivery:</u> <br> Food is delivered and client is responsible for clean-up."  
				data-trigger="hover"></i></input><br>
				<input type="radio" name="CateringServices" value="Pick-up"> Pick-up<i class="icon-info-sign" id="idPick" 
				data-content="<u>Pick-Up:</u> <br> The client is responsible for picking up the food and managing their own event and clean up."  
				data-trigger="hover"></i></input><br>

            </div>
							<script>
				$('#idFullService').popover({html:true});
				$('#idHotCatering').popover({html:true});
				$('#idDelivery').popover({html:true});
				$('#idPick').popover({html:true});
				</script>
       

          </div>
		       <input class="pull-right img-rounded" type="submit" value="Next"/>
			   </form>
        </div>
		</div>
      </body>
      </html>