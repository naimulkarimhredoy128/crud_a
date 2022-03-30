<?php

	$s_id = $_GET["s_id"];

	$ammount = $_GET["ammount"];

    $date = $_GET["date"];

   




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO  payment VALUES ( '', '$s_id', '$ammount','$date' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> s_id = $s_id <br> ammount = $ammount <br> date = $date <br>";



	echo "<p><a href=read_payment.php>READ all payment records</a>";

?>