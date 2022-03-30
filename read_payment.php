<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM  payment" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>s_id</th> <th>ammount</th> <th>date</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $s_id </td>";
		echo "<td> $p_ammount </td>";
        echo "<td> $p_date </td>";
		echo "<td> <a href = 'delete_payment.php?p_id=$p_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_payment.php?p_id=$p_id&s_id=$s_id&p_ammount=$p_ammount&p_date=$p_date'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=create_payment.php>CREATE a new record</a>";
?>