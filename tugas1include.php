<?php 

if (empty($_POST['nama'])){
	header("location:tugas1kosong.php");
} elseif (empty($_POST['email'])){
	header("location:tugas1kosong.php");
} else {
	include "tugas1act.php";
}
	?>