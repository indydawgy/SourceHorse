  <?php
  session_start();
	$fields = array();
	$required = array();
$nextPage = 'complete.php';
$_SESSION["onReview"] = true;
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
	   <div class="container">
	   
        <h3><u>RFP Review</h3></u>
		
		<div class="row">
		<div class="span10">Hosting Organization: <?php echo $_SESSION['HostInfo']; ?> on <?php echo $_SESSION['EventAddress']; ?><br>
		Type of Event: <?php echo $_SESSION['EventType'] ?>, <?php echo $_SESSION['indooroutdoor'] ?> <br>
		Date and Time: <?php echo $_SESSION['DateTime'] ?><br>
		Third Party Event Organizer: <?php if(isset($_SESSION['ThirdParty']))echo "Yes"; else echo "No"; ?>
		Event Ambiance: <?php if(isset($_SESSION['EventAmbiance']))echo $_SESSION['EventAmbiance']; ?>
		Event Overview and goals: <?php if(isset($_SESSION['EventOverview']))echo $_SESSION['EventOverview']; ?>
		</div>
		<div class="span2">	<form action="create-an-event.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">Type of Food: <?php echo $_SESSION['TypeOfFood']. ", " . $_SESSION['CateringServices'];?>  </div>
		<div class="span2">		<form action="vendor-referral-requirements.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<div class="row">
		<div class="span10">Type of Service: <?php echo $_SESSION['CateringTypeOfService'];?>  </div>
		<div class="span2">		<form action="caterertypeofservice.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		
		<div class="row">
		<div class="span10">Requirements:  <?php echo $_SESSION['indooroutdoor']?> <br>
		Alcohol? <?php if(isset($_SESSION['Alcohol'])) echo "Yes"; else echo "No";  ?><br>
		<div class="row">
		<div class="span2">
		Dietary Requirements:
		</div>
		<div class="span 8">
		<?php if(isset($_SESSION['GlutenFree']))echo "Gluten Free";  ?><br>
		<?php if(isset($_SESSION['Kosher']))echo "Kosher";  ?><br>
		<?php if(isset($_SESSION['Vegan']))echo "Vegan";  ?><br>
		<?php if(isset($_SESSION['Vegetarian']))echo "Vegetarian";  ?><br>
		<?php if(isset($_SESSION['CustomDiet']))echo $_SESSION['CustomDietText'];  ?><br>
		
		</div>
		</div>
		</div>
		<div class="span2">		<form action="vendor-referral-requirements2.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">
		Adult Plates: <?php echo $_SESSION['AdultPlates']; ?><br>
		Child Plates: <?php echo $_SESSION['ChildPlates']; ?><br>
		Vegetarian Plates: <?php echo $_SESSION['VegetarianPlates']; ?><br>
		</div>
		<div class="span2">		<form action="plates.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">
		Meal Specifications: 
				<div class="pull-right span10">
				Meal Service: <?php echo $_SESSION["MealService"]?><br>
				<?php if(isset($_SESSION['MealSpecsHors'])) echo "Hors d'oeuvres:" . $_SESSION["MealSpecsHors"]; ?><br>
				<?php if(isset($_SESSION['MealSpecsVegHors'])) echo "Vegetarian Hors d'oeuvres:" . $_SESSION["MealSpecsVegHors"]; ?><br>
				<?php if(isset($_SESSION['MealSpecsAppetizers'])) echo "Appetizers:" . $_SESSION["MealSpecsAppetizers"]; ?><br>
				<?php if(isset($_SESSION['MealSpecsVegAppetizers'])) echo "Vegetarian Appetizers:" . $_SESSION["MealSpecsVegAppetizers"]; ?><br>
				<?php if(isset($_SESSION['MealSpecsMainCourses'])) echo "Main Courses:" . $_SESSION["MealSpecsMainCourses"]; ?><br>
				<?php if(isset($_SESSION['MealSpecsVegMainCourses'])) echo "Vegetarian Main Courses:" . $_SESSION["MealSpecsVegMainCourses"]; ?><br>
				<?php if(isset($_SESSION['MealSpecsDesserts'])) echo "Desserts:" . $_SESSION["MealSpecsDesserts"]; ?><br>
				<?php if(isset($_SESSION['MealSpecsNonAlcoholic'])) echo "Non-alcoholic Beverages:" . $_SESSION["MealSpecsNonAlcoholic"]; ?><br>
				<?php if(isset($_SESSION['MealSpecsAlcoholic'])) echo "Alcohol Beverages:" . $_SESSION["MealSpecsAlcoholic"]; ?><br>
		
				</div>
				
		</div>
		<div class="span2">		<form action="mealspecs.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">
		Alcohol Specifications: <?php echo $_SESSION['AlcoholService'];?> <br>
		<div class="pull-right span10">
				<?php if(isset($_SESSION['Liquors'])) echo "Liquors:" . $_SESSION["Liquors"]; ?><br>
				<?php if(isset($_SESSION['Wines'])) echo "Wines:" . $_SESSION["Wines"]; ?><br>
				<?php if(isset($_SESSION['Beers'])) echo "Beers:" . $_SESSION["Beers"]; ?><br>
				
				</div>

		</div>
		<div class="span2">		<form action="alcoholspecs.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">Bids include: <br>
	<ul>
	<?php if(empty($_SESSION['TablesChairs'])) echo "<li>Tables and Chairs</li>";?> 
	<?php if(empty($_SESSION['Diningware'])) echo "<li>Dining ware</li>";?> 
	<?php if(empty($_SESSION['Staff'])) echo "<li>Staff</li>";?> 
	<?php if(empty($_SESSION['BarStations'])) echo "<li>Bar Stations</li>";?> 
	<?php if(empty($_SESSION['SetUpCleanUp'])) echo "<li>Set up and Clean up</li>";?> 
	<?php if(isset($_SESSION['AdditionalInclusions'])) echo "<li>".$_SESSION['AdditionalInclusions']."</li>";?> 
	</ul>
		</div>
		<div class="span2">		<form action="excludedservices.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">Planner uploaded: <br>
		<img src="floorplan.png"/>
		</div>
		<div class="span2">		<form action="planneruploads.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">Request caterer to upload or provide: <br>
	<ul>
	<?php if(isset($_SESSION['UploadsMenus'])) echo "<li>Menus</li>";?> 
	<?php if(isset($_SESSION['UploadsPortfolio'])) echo "<li>Portfolio</li>";?> 
	<?php if(isset($_SESSION['UploadsReferences'])) echo "<li>References</li>";?> 
	<?php if(isset($_SESSION['UploadsWebsite'])) echo "<li>Website</li>";?> 
	<?php if(isset($_SESSION['UploadsOther'])) echo "<li>".$_SESSION['UploadsOtherText']."</li>";?> 
	</ul>		
	</div>
		<div class="span2">		<form action="catereruploads.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<div class="row">
		<div class="span10">Price Comparison: <?php if($_SESSION['BidResponse'] == "Other") echo $_SESSION['BidOtherText']; else echo $_SESSION['BidResponse']; ?></div>
		<div class="span2">		<form action="bidresponses.php"> <button class="btn"></form> Edit </button></div>
		</div>
		<hr>
		<form class="form-horizontal" method="post">
        
        <!--add your shit here-->
			  <input class="pull-right img-rounded" type="submit" value="Next" name="input"/>

      </form>

      
		</div>
      </body>
      </html>