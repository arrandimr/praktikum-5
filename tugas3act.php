
<?php

if (empty($_POST['nama'] && $_POST['email'] && $_POST['tmplahir'] && $_POST['tgllahir'] && $_POST['alamat'] && $_POST['kelamin'] && $_POST['agama'] && $_POST['telepon'])){
	header("location:tugas3redirect.php");
} else {
	include "tugas3tampil.php";
}
?>
