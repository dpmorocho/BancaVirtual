<table>
	<tr>
		<th>Saldo</th>
		<th>Tipo</th>
		<th>Opciones</th>
	</tr>
<?php
	if($data['cuenta']){
		foreach ($data['cuenta'] as $row) {
			echo "<tr>";
			echo "<td>$row->cue_balance</td>";
			echo "<td>$row->cue_tipo</td>";
			echo "<td><a href='".DIR."cuenta/debito/$row->cue_id'>Debitar</a></td>";
		}
	}
?>
</table>