<?php

	$p_id = $_GET["p_id"];

	$s_id = $_GET["s_id"];

	$p_ammount = $_GET["p_ammount"];

    $p_date = $_GET["p_date"];



?>



<h1>Update Record</h1>



<form method=get action=update_result_payment.php>



	<input type=hidden name=p_id value='<?php echo $p_id; ?>'> <br>



	s_id: <input type=text name=s_id value='<?php echo $s_id; ?>'>

	<p>

	ammount: <input type=text name=p_ammount value='<?php echo $p_ammount; ?>'>

	<p>
    date: <input type=text name=p_date value='<?php echo $p_date; ?>'>

<p>


	<input type=submit value=Update>

</form>