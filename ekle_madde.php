<!DOCTYPE html>
<html>
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
		$host = "localhost"; // SQL Server host
		$user = "ccnauserismiiim"; // SQL Username
		$pass = "ccnadatabasesifremmmm"; // SQL Password
		$dbname = "ccnadatabaseenamee"; // SQL Database Name
		$con = mysqli_connect($host, $user, $pass, $dbname);
		if (mysqli_connect_errno()) {
			echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() ."</h1>";
		}

		$frage = $_POST['frage'];
		$antwort = $_POST['antwort'];

		$sql = "INSERT INTO ccna2_5(frage, antwort) VALUES('$frage', '$antwort')";

		if (!mysqli_query($con, $sql)) {
			die('Error: ' . mysqli_error($con));
		} else {
			echo "veri eklendi. <br>";
			header("Location: ekle_madde_index.php");
		}
	?>
	<center>
		<a href="../index.php"><button type="button" class="btn btn-primary btn-lg"> Index </button></a>
	</center>
	<?php mysqli_close($con); ?>
</body>
</html>
