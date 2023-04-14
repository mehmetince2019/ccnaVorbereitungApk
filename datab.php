<?php


error_reporting(0);
$host 	= 'localhost'; //host bilgisi
$user 	= 'ccnauserrrrr'; //kullanıcı adı
$pass 	= 'ccnasifremmmm'; //sifre
$db		= 'ccnaaaaaa'; //veritabanı ismi

$table  = 'ccna2_1';
			
$baglan = mysqli_connect($host, $user, $pass, $db) or die (mysqli_Error());
mysqli_query($baglan,"SET CHARACTER SET 'utf8'");
mysqli_query($baglan,"SET NAMES 'utf8'");

?>