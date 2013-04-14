<?php
  session_start();
  $fields = array("AuctionType");
  $required = array("AuctionType");
  $nextPage = 'vendor-referral-requirements.php';
  include 'FieldCheck.php';
 
  
  ?>
  <html>
  <head>
    <meta charset="utf-8" />
    <title>Twitter Bootstrap Version2.0 inline form layout example</title>
    <meta name="description" content="Twitter Bootstrap Version2.0 inline form layout example from w3resource.com." />
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen" />
    
  </head>
  <body>
   <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
   <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script> 
   
   <div class="container well" >
     <div class="well row-s">
       <h4><?php echo $_SESSION['EventTitle']; ?> on <?php echo $_SESSION['DateTime']; ?></h4>
     </div>
     <div class="row span11 pull-right well">
      <h5>Create an Auction </h5>
      <form class="form-horizontal" method="post">
        <div class="control-group"  >
          <label class="control-label" for="vendorType">Select Vendor Type:</label>
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-search"></i>
                <input class="span3" id="vendorType" data-provide="typeahead" data-items="4" type="text" placeholder="Search" name="AuctionType"></span>
              </div>
            </div>
            <script>  
            var subjects = ['Caterer', 'Car Driver', 'Cafe', 'Corner Grocery', 'Crazymart', 'CSS', 'HTML5', 'CSS3', 'JSON'];   
            $('#vendorType').typeahead({source: subjects})  
            </script>  
          </div>
          <input class="pull-right img-rounded" type="submit" value="Choose Referral Requirements" name="input"/>
        </form>
      </div>
    </div>
  </body>
  </html>