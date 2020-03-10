<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
	<form method="POST" action="tugas1buat.php">
	<?php	
		echo "<table width='400' align=center>";
		echo "<tr><td colspan='3'><h3 align=center> LOGIN </h3></td>";
		echo "<tr><td width='130'> Nama </td><td> : </td><td>".$_POST['nama']."</td></tr>";
		echo "<tr><td width='130'> Email </td><td> : </td><td>".$_POST['email']."</td></tr>";
		date_default_timezone_set('asia/jakarta');
		echo "<tr><td width='130'> Login pada </td><td> : </td><td>".date("H:i "). "</h3></td>";
		echo "<tr><td width='130'></td><td></td><td>".date("l, d-F-Y </center>")."</h3></td>";
		echo "<tr><td colspan='3' align='center'><input type='submit' name='biodata' value='Buat Biodata'></td></tr></table>";	
?>
		
	</form>
	</body>
	</html>