<?php
session_start();
$fields = array("MealService","MealSpecsHors","MealSpecsVegHors","MealSpecsAppetizers","MealSpecsVegAppetizers","MealSpecsMainCourses","MealSpecsVegMainCourses","MealSpecsDesserts","MealSpecsNonAlcoholic","MealSpecsAlcoholic");
$required = array();
$nextPage = 'alcoholspecs.php';
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
      <h3><u><?php echo $_SESSION["CateringTypeOfService"]?> Specifications</h3></u>
      <form class="form-horizontal" method="post">
        
 
		 <div class="control-group">
        <label class="control-label" for="adultplates">Meal Service:  </label>
        <div class="controls">
          <select name="MealService">
    <option>Multi-Course Plated Meal</option>
    <option>Nothing on a plate</option>
  </select>
       </div>
     </div>
	  <div class="control-group">
        <label class="control-label" for="childplates">Hors d'oeuvres: </label>
        <div class="controls">
         <input type="text" class="input-block-level" id="childplates" name="MealSpecsHors" placeholder="[No Hors d'oeuvres]"/><br>
		    Vegetarian: <input type="text" class="input-block-level" id="vegeplates" name="MealSpecsVegHors" placeholder="[No Vegetarian Hors d'oeuvres]"/>
       </div>
     </div>
	   <div class="control-group">
        <label class="control-label" for="vegeplates">Appetizers: </label>
        <div class="controls">
         <input type="text" id="vegeplates" class="input-block-level" name="MealSpecsAppetizers" placeholder="[No Appetizers]"/><br>
		    Vegetarian: <input type="text" class="input-block-level" id="vegeplates" name="MealSpecsVegAppetizers" placeholder="[No Vegetarian Appetizers]"/>
       </div>
     </div>
	   <div class="control-group">
        <label class="control-label" for="vegeplates">Main Courses:: </label>
        <div class="controls">
         <input type="text" class="input-block-level" id="vegeplates" name="MealSpecsMainCourses" placeholder="[No Main Courses]"/><br>
		    Vegetarian: <input type="text" class="input-block-level" id="vegeplates" name="MealSpecsVegMainCourses" placeholder="[No Vegetarian Main Courses]"/>
       </div>
     </div>
	   <div class="control-group">
        <label class="control-label" for="Desserts">Desserts: </label>
        <div class="controls">
         <textarea class="input-block-level" id="Desserts" name="MealSpecsDesserts" placeholder="[No Desserts]"/></textarea>
       </div>
     </div>
	   <div class="control-group">
        <label class="control-label" for="Non">Non-alcoholic Beverages: </label>
        <div class="controls">
         <textarea class="input-block-level" id="Non" rows="3" name="MealSpecsNonAlcoholic" placeholder="[No Non-alcoholic Beverages]"></textarea>
       </div>
     </div>
	   <div class="control-group">
        <label class="control-label" for="Alcoholic">Alcoholic Beverages: </label>
        <div class="controls">
          <textarea class="input-block-level" id="Alcoholic" rows="3" name="MealSpecsAlcoholic" placeholder="[No Alcoholic Beverages]"></textarea>
       </div>
     </div>
			  <input class="pull-right img-rounded" type="submit" value="Next" name="input"/>

      </form>
    </div>
  </div>
</body>
</html>