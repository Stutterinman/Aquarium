<?php
// database logingegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = '82299';
$db_password = 'Terencio12';
$db_database = '82299_back2';

// maak de database verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

//als de verbinding niet gemaakt kan worden: geef een melding
if (!mysqli) {
	echo "FOUT: geen connectie naar database. <br>";
	echo "Errno" .  mysqli_connect_errno() . "<br/>";
	echo "Error" . mysqli_connect_error() . "<br/>";
	exit;
}