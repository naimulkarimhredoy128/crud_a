<?php

	$p_id = $_GET["p_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM payment WHERE p_id=$p_id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=read_payment.php>READ all records</a>";

?>