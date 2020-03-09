<?php
echo "<center> Nama : ".$_POST['nama']."<br>";
echo "<center> Email : ".$_POST['email']."<br>";
date_default_timezone_set('asia/jakarta');
echo "<center> Anda login pada : ".date("H:i ")."<br>";
echo date ("l, d-F-Y </center>");
	
?>