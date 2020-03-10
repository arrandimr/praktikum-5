<?php 
if (empty($_POST['nama'] && $_POST['email'] && $_POST['tmplahir'] && $_POST['tgllahir'] && $_POST['alamat'] && $_POST['kelamin'] && $_POST['agama'] && $_POST['telepon'])){
	header("location:tugas1biodatakosong.php");
} else {
	include "tugas1biodata.php";
}
?>