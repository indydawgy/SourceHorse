<html>
  <head>
    <meta name="generator" content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <title>Twitter Bootstrap Version2.0 inline form layout example</title>
    <meta name="description" content="Twitter Bootstrap Version2.0 inline form layout example from w3resource.com." />
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen" />
  
  </head>
  <body>
  <form action = "create-auctions.php">
  <div class="container">
    <div class="row">
      <div class="span2">
        <p>Event Title:</p>
      </div>
      <div class="span10">
        <p>
          <input type="text" name="EventTitle" />
        </p>
      </div>
    </div>
    <div class="row">
      <div class="span2">
        <p>Date:</p>
      </div>
      <div class="span10">
      <div id="datetimepicker2" class="input-append">
      <input data-format="MM/dd/yyyy HH:mm:ss PP" type="text" />
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
    $('#datetimepicker2').datetimepicker({
      language: 'en',
      pick12HourFormat: true
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
         <textarea class="span6" rows="3"></textarea>
        </p>
      </div>
    </div>
	
	<div class="row">
      <div class="span1">
         <p>
          <input type="checkbox" name="thirdParty" />
        </p>
      </div>
	  
	    <div class="span11">
         <p> Are you a third party event organizer?</p>
		 -Host Information:    <input type="text" name="HostInfo" />
      </div>
	</div>
	
	<div class="row">
      <div class="span5">
         <p>
          Type of Event:
        </p>
		
<select>
  <option>Corporate</option>
  <option>Morale</option>
  <option>Team</option>
</select>
      </div>
	  
	    <div class="span7">
         <p> Event Ambiance:</p>
			<textarea class="span6" rows="3"></textarea>
      </div>
	</div>
<div class="row">
      <div class="span12">
        <p>Event Overview and goals: </p>
		<textarea class="span6" rows="3" width = "*"></textarea>
      </div>
    </div>
</div>
<div class="row">
      <div class="span11">

      </div>
	   <div class="span1">
		<input type="submit" value="Create Auctions"/>
      </div>
    </div>
</div>
</form>
  </body>
</html>
