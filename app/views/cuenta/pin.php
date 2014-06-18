<?php
if (isset($error)){
	foreach ($error as $error) {
		echo "<p>$error</p>";
	}
}
?>
    <div class="container">
<form class="form-signin" role="form" action='' method='post'>
	<h2 class="form-signin-heading">Cambiar PIN</h2>
	<p>Contraseña Actual:<br /><input type='password' class="form-control" required autofocus name='passActual' value='<?php echo $data['row'][0]->passActual;?>'></p>
	<p>Nueva Contraseña:<br /><input type='password' class="form-control" required autofocus name='pass1' value='<?php echo $data['row'][0]->pass1;?>'></p>
	<p>Confirmar Contraseña:<br /><input type='password' class="form-control" required autofocus name='pass2' value='<?php echo $data['row'][0]->pass2;?>'></p>
	<p><input type='submit' class="btn btn-lg btn-primary btn-block" name='submit' value='Actualizar'></p>

</form>
   </div> 
   