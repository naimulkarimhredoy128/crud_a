<?php

	$c_id = $_GET["c_id"];

	$c_dept = $_GET["c_dept"];

	$c_title = $_GET["c_title"];

    $c_credit = $_GET["c_credit"];

	$c_syllabus = $_GET["c_syllabus"];

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=c_id value='<?php echo $c_id; ?>'> <br>



	dept: <input type=text name=c_dept value='<?php echo $c_dept; ?>'>

	<p>

	title: <input type=text name=c_title value='<?php echo $c_title; ?>'>

	<p>
    credit: <input type=text name=c_credit value='<?php echo $c_credit; ?>'>

<p>
syllabus: <input type=text name=c_syllabus value='<?php echo $c_syllabus; ?>'>

<p>

	<input type=submit value=Update>

</form>