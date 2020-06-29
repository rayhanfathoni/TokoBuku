<?php 
session_start();
require_once"koneksi.php";
if (!@$_SESSION) {
}
else{
	if (@$_GET['page']=='user'){
	mysql_query("DELETE FROM tbl_temp_pesanan WHERE id_user ='$_SESSION[id]'");
	unset($_SESSION['id']);
	unset($_SESSION['nama']);
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	header("location:index.php");
	}
	elseif (@$_GET['page']=='admin'){
	unset($_SESSION['id_admin']);
	unset($_SESSION['nama_admin']);
	unset($_SESSION['username_admin']);
	unset($_SESSION['password_admin']);
	header("location:loginadmin.php");
	}
}
 ?>