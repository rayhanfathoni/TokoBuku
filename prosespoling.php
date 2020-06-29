<?php 
session_start();
require_once"koneksi.php";
$poling=@$_POST['poling'];
$select_user=mysql_query("SELECT * FROM tbl_poling WHERE id_user='$_SESSION[id]'");
$cek=mysql_num_rows($select_user);
if ($_SESSION['username']) {
	mysql_query("INSERT INTO tbl_poling VALUES('$_SESSION[id]','$poling')");
	header("location:index.php");
}
elseif ($cek<>0) {
	header("location:index.php");
}
else{
	header("location:daftarlogin.php");
}
 ?>