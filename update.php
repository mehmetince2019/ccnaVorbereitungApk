<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	
	
	

<style>
	body {
         background-color: black;
         color: #00b300;
		
		font-size: 20px;
	}
	a{
		margin:5px;
		padding:5px 10px;
	}
	
	
	p.solid {border-style: solid;}
	
</style>


<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>

<div class="container mt-3">	
	

<?php
// include database connection file
include_once("datab.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$sira = $_POST['sira'];
	
	$frage=$_POST['frage'];
	$antwort=$_POST['antwort'];
	
	
	
	
		
	// update user data
	$result = mysqli_query($baglan, "UPDATE ccna2_5 SET frage='$frage',antwort='$antwort' WHERE sira=$sira");
	
	// Redirect to homepage to display updated user in list
	// header("Location: index.php");
	header("Location: index.php?sayfa=$sira");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$sira = $_GET['sira'];

// Fetech user data based on id
$result = mysqli_query($baglan, "SELECT * FROM ccna2_5 WHERE sira=$sira");

while($user_data = mysqli_fetch_array($result))
{
	$frage = $user_data['frage'];
	$antwort = $user_data['antwort'];

}
?>
	<title>Edit User Data</title>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update.php">
		<table border="0"  >
							
				<textarea name="frage" rows="10" cols="100" style="background-color:black; color:#00b300; font-size: 20px"  > <?php echo $frage;?></textarea><br>
			
				<textarea name="antwort" rows="10" cols="100" style="background-color:black; color:#00b300; font-size: 20px " > <?php echo $antwort;?></textarea><br>

				<input type="hidden" name="sira" value= <?php echo $_GET['sira'];?>><br>
				<input type="submit" name="update" value="Update">
			</tr>  
		<a href="../ccna/index.php"<button type="button" class="btn btn-primary btn-lg btn-block"> index </button></a>
		<br><br><br><br>
		</table>
	</form>
</body>
</html>

