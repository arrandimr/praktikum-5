<?php 
echo "<table width='500' align=center>";
	echo "<tr><td colspan='3'><h3 align=center> DATA DIRI </h3></td>";
echo "<tr><td> Nama </td><td> : </td><td>".$_POST['nama']."</td></tr><br>";
echo "<tr><td> Email </td><td> : </td><td>".$_POST['email']."</td></tr><br>";
echo "<tr><td> Tempat & Tgl. Lahir </td><td> : </td><td>".$_POST['tmplahir'].", ".$_POST['tgllahir']."</td></tr><br>";
echo "<tr><td> Alamat </td><td> : </td><td>".$_POST['alamat']."</td></tr><br>";
echo "<tr><td> Jenis kelamin </td><td> : </td><td>".$_POST['kelamin']."</td></tr><br>";
echo "<tr><td> Agama </td><td> : </td><td>".$_POST['agama']."</td></tr><br>";
echo "<tr><td> No. Hp. </td><td> : </td><td>".$_POST['telepon']."</td></tr><br>";
date_default_timezone_set('asia/jakarta');
echo "<tr><td> Biodata dibuat pada </td><td> : </td><td>".date(" l, d-F-Y   H:i")."</td></tr><br>";
	echo "</table>";
?>