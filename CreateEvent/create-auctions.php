<?php
session_start();

$_SESSION['EventTitle'] = $_POST["EventTitle"];
$_SESSION['DateTime'] = $_POST["DateTime"];
/* etc ?? this work?*/

?>
<html>
<header>
<form>
<br>
Event Title: <input type="text">
</html>