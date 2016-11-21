<!DOCTYPE html>
<html>
<head>
	<title>Koneksi ke MySQL</title>
</head>
<body>
	<?php
	// Connecting, selecting database
	$link = mysql_connect('localhost', 'root', '') or die ('Tidak bisa terhubung : ' . mysql_error());
	echo "Terhubung";
	mysql_select_db('showroommobil') or die ('Tidak bisa memilih database');

	?>
</body>
</html>