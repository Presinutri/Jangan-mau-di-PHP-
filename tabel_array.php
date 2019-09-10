<?php
	$b = array('key' => 0, 'angka' => 'ganjil', 1 => 'satu', 4 => 16843);
	print_r($b);
	sort($b);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Key</th>
			<th>Value</th>
		</tr>
		<?php
			foreach ($b as $key => $value) {
		?>
		<tr>
			<td> <?php echo $key ?> </td>
			<td> <?=$value ?> </td>
		</tr>
		<?php
			}
		?>
	</table> 
</body>
</html>
