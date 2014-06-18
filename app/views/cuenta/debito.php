<?php
if (isset($error)){
	foreach ($error as $error) {
		echo "<p>$error</p>";
	}
}
?>
<div class="container">
	<form action='' method='post' class="form-signin" role="form">
		<p>Monto a debitar:<br /><input type='text' name='valorDebito' class="form-control" required autofocus value='<?php echo $data['row'][0]->valorDebito;?>'></p>
		<p><input type='submit' name='submit' value='Debitar'  class="btn btn-lg btn-primary btn-block"></p>

	</form>
</div>