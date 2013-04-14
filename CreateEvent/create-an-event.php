<?php

  session_start();
  $fields = array("EventTitle", "DateTime", "EventAddress", "ThirdParty", "HostInfo", "EventType", "EventAmbiance", "EventOverview");
  $required = array("EventTitle", "DateTime", "EventAddress", "HostInfo", "EventType", "EventAmbiance", "EventOverview");
  $nextPage = 'create-auctions.php';
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

   <form method = "post" class="form-horizontal">
   

   <div class="container well" >
       <div class="well row" background-color="0088cc">
	<h4 class="success">Create An Event</h4>
	</div>
 <div class="row">
      <div class="span2">
        <p>Event Title:</p>
      </div>      
	  <div class="span10">
        <p>
          <input type="text" name="EventTitle" placeholder="Title" <?php   if(isset($_SESSION['EventTitle'])) echo "value=".$_SESSION['EventTitle'];?> />
        </p>
      </div>
     </div>
    <div class="row">
      <div class="span2">
        <p>Date:</p>
      </div>
      <div class="span10">
      <div id="datetimepicker" class="input-append">
      <input data-format="MM-dd-yyyy" type="text" name ="DateTime" placeholder="mm-dd-yyyy" <?php   if(isset($_SESSION['DateTime'])) echo "value=".$_SESSION['DateTime'];?> />
	  <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
		</span>
	  </div>
	  <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
      <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script> 
      <script type="text/javascript" src="../bootstrap/js/bootstrap-datetimepicker.min.js"></script> 
      <script type="text/javascript">
    $('#datetimepicker').datetimepicker({
      language: 'en',
      pickTiem: false
    });

</script>
    </div>
  </div>

  <div class="row">
    <div class="span3">
      <p>Event Address or Zipcode: </p>
    </div>
    <div class="span9">
      <p>
       <textarea class="span6" rows="3" name="EventAddress" placeholder="Address; Zipcode" <?php   if(isset($_SESSION['EventAddress'])) echo "value="+$_SESSION['EventAddress'];?>></textarea>
     </p>
   </div>
 </div>

 <div class="row">
  <div class="span12">
    <input type="checkbox" name="ThirdParty" value="falsish" /> Are you a third party event organizer?
</div>

<div class="pull-right">
-Host Information:   <input type="text" id="inputHost" class = "span9" name="HostInfo" />
</div>
</div>

<div class="row">
  <div class="span5">
   <p>
    Type of Event:
  </p>

  <select name="EventType">
    <option>Corporate</option>
    <option>Morale</option>
    <option>Team</option>
  </select>
</div>

<div class="span7">
 <p> Event Ambiance:</p>
 <textarea class="input-block-level" rows="3" name="EventAmbiance"></textarea>
</div>
</div>
<div class="row">
  <div class="span12">
    <p>Event Overview and goals: </p>
    <textarea class="input-block-level" rows="3" name="EventOverview"></textarea>
  </div>
</div>
<br>
<div class="row">
  <div class="span9">

  </div>

    <input class="pull-right img-rounded" type="submit" value="Create Auctions" name="input"/>

</div>
</div>
</form>
</body>
</html>
