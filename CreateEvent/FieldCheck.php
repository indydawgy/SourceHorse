<?php
if(empty($nextPage))
throw Exception("No next page");

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'review.php';

if(isset($_SESSION["onReview"]) &&$nextPage != 'complete.php')
	$nextPage = "review.php";

  $missingFields;
if(isset($_POST["input"]))
{
	foreach($fields as $field)
	{
		if(!empty($_POST[$field]))
			$_SESSION[$field] = $_POST[$field];
		else
		{
			if(in_array($field, $required))
			{
			$missingFields[$field] = $field;
			}
		}
	}
	if(empty($missingFields))
	{
	$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = $nextPage;
header("Location: http://$host$uri/$extra");
exit;
}
	else
	echo "Missing ". implode(',', $missingFields);
}
?>