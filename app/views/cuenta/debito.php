<?php
if (isset($error)){
	foreach ($error as $error) {
		echo "<p>$error</p>";
	}
}
?>

<form action='' method='post'>
	<p>Monto a debitar:<br /><input type='text' name='valorDebito' value='<?php echo $data['row'][0]->valorDebito;?>'></p>
	<p><input type='submit' name='submit' value='Debitar'></p>

</form>