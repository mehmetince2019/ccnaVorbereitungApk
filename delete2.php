


<?php

include datab.php;

//delete2.php

// include database connection file
include_once("datab.php");
$sira = $_POST['sira'];
$sira = $_GET['sira'];

// Get id from URL to delete that user


// Delete user row from table based on given id
$result = mysqli_query($baglan, "DELETE FROM $table WHERE sira=$sira");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>