<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Sign Our Guestbook</title>

<link rel="stylesheet" href="css/style.css" />

<link rel="stylesheet" href="css/sign.css" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	
	
	
</head>

<body>


<?php
// include database connection file

include_once("datab.php");

$sira = $_POST['sira'];
$sira = $_GET['sira'];

echo $sira;

echo 'bist du sicher ?' ;
// Get id from URL to delete that user

echo '<br><br>';


echo '<a href="delete2.php?sira='.$sira.'"<button type="button" class="btn btn-primary btn-lg btn-block"> Delete</button></a>';

	echo '<br><br>';

echo '<a href="/fragen_teil_1/index.php"<button type="button" class="btn btn-primary btn-lg btn-block"> Teil 1 Index</button></a>';
	
	echo '<br><br>';

echo '<a href="/fragen/index.php"<button type="button" class="btn btn-primary btn-lg btn-block"> index</button></a>';
	
	
	

?>
	
	</body>
	</html>