<?php
session_start();
$fields = array("questionText1", "questionText2", "questionText3", "questionText4", "questionText5", "questionAnswer1", "questionAnswer2", "questionAnswer3", "questionAnswer4", "questionAnswer5");
$required = array();
$nextPage = 'review.php';
include 'FieldCheck.php';

?>
<html>
<head>
  <meta charset="utf-8" />
  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" />
  <link href="../bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen" />
  
</head>

<script language="javascript">
fields = 0;
function addInput() {
if (fields != 5) {
document.getElementById('questions').innerHTML += " <div class='control-group'> <label class='control-label' for='question"+ fields+ "'><input type='text' name='questionText"+fields+"' value='"+document.getElementById('questionText').value+"' placeholder='Enter Question Here'/> </label> <div class='controls'><input type='text' class='input-block-level' name='questionAnswer"+ fields+ "id='question"+ fields+ "' placeholder='Enter Answer Here'/> </div></div><br />";
fields += 1;
} else {
document.getElementById('questions').innerHTML += "<br />Only 5 questions.";
document.form.add.disabled=true;
}

document.getElementById('questionText').value = '';
}
</script>

<body>
 <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
 <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script> 
 
 
 <div id="questionListener" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">What question do you have?</h3>
  </div>
  <div class="modal-body">
    <input id="questionText" name="questionText" type="text" placeholder="Enter question here"/>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" onclick="addInput()" data-dismiss="modal" aria-hidden="true">Ask Question</button>
  </div>
</div>

 <div class="container well" >
   <div class="well row-s">
     <h4><?php echo $_SESSION['EventTitle']; ?> on <?php echo $_SESSION['DateTime']; ?> <hr>
       <?php echo $_SESSION['AuctionType']; ?> Auction</h4>
     </div>
     <div class="row span11 pull-right well">
      <h3><u>Planner Generated Questions</h3></u>
      <form name="form" method="post">
        You are almost done! Is there anything else you need to know from the caterer?<br>
		<a href="#questionListener" role="button" class="btn" data-toggle="modal">+ Add Question</a>

		<br><br>

		<div id="questions">
		</div>

        <!--add your shit here-->
			  <input class="pull-right img-rounded" type="submit" value="Next" name="input"/>

      </form>
    </div>
  </div>
</body>
</html>