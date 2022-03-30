<?php

	$id = $_GET["id"];

	$c_dept = $_GET["c_dept"];

	$c_title = $_GET["c_title"];

    $c_credit = $_GET["c_credit"];

	$c_syllabus = $_GET["c_syllabus"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE course SET c_dept='$c_dept', c_title='$c_title', c_credit = '$c_credit',c_syllabus='$c_syllabus' WHERE c_id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> c_dept = $c_dept <br> c_title = $c_title <br> c_credit = $c_credit <br> c_syllabus = $c_syllabus";



	echo "<p><a href=read_course.php>READ all records</a>";

?>