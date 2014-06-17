<?php
if (isset($error)){
	foreach ($error as $error) {
		echo "<p>$error</p>";
	}
}
?>

<form action='' method='post'>
	<p>Contraseña Actual:<br /><input type='password' name='passActual' value='<?php echo $data['row'][0]->passActual;?>'></p>
	<p>Nueva Contraseña:<br /><input type='password' name='pass1' value='<?php echo $data['row'][0]->pass1;?>'></p>
	<p>Confirmar Contraseña:<br /><input type='password' name='pass2' value='<?php echo $data['row'][0]->pass2;?>'></p>
	<p><input type='submit' name='submit' value='Actualizar'></p>

</form>