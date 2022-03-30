<?php

	$dept = $_GET["dept"];

	$title = $_GET["title"];

    $credit = $_GET["credit"];

    $syllabus = $_GET["syllabus"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO  course VALUES ( '', '$dept', '$title','$credit','$syllabus' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> dept = $dept <br> title = $title <br> credit = $credit <br> syllabus = $syllabus";



	echo "<p><a href=read_course.php>READ all course records</a>";

?>