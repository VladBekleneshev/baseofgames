<?php
	$db_host = "127.0.0.1";
	$db_login = "root";
	$db_password = "2394";
	$db_name = "base_of_games";

	$conn = mysqli_connect($db_host, $db_login, $db_password, $db_name);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SET NAMES utf8";
	$result = mysqli_query($conn, $sql);
	if(!$result)
		echo "Невозможно выполнить запрос.";
?>