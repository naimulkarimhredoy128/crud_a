<?php

	$p_id = $_GET["p_id"];

	$s_id = $_GET["s_id"];

	$p_ammount = $_GET["p_ammount"];

    $p_date = $_GET["p_date"];

	




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE payment SET s_id='$s_id', p_ammount='$p_ammount', p_date = '$p_date' WHERE p_id = $p_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> s_id = $s_id <br> p_ammount = $p_ammount <br> p_date = $p_date <br> ";



	echo "<p><a href=read_payment.php>READ all records</a>";

?>