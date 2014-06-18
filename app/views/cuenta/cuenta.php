<p><h3>Posición Consolidada</h3></p>
<table class="table table-striped">
	<tr>
		<th><h3>Saldo</h3></th>
		<th><h3>Tipo</h3></th>
	</tr>
<?php
	if($data['cuenta']){
		foreach ($data['cuenta'] as $row) {
			echo "<tr>";
			echo "<td><h5>$row->cue_balance</h5></td>";
			echo "<td><h5>$row->cue_tipo</h5></td>";
		}
	}
?>
</table>