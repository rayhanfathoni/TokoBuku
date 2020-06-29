<?php 
session_start();
if (isset($_SESSION['username_admin'])) {
	header("location:admin/produk/index.php");
}
else{
	require_once"koneksi.php";
	$username =trim($_POST['username']);
	$password =($_POST['password']);
		$data=mysql_query("SELECT * FROM tbl_admin WHERE username='$username' && password='$password'");
		$row=mysql_fetch_array($data);
		if ($username==$row['username'] && $password==$row['password']) {
			$_SESSION['id_admin']       =$row['id_admin'];
			$_SESSION['nama_admin']     =$row['nama'];
			$_SESSION['username_admin'] =$row['username'];
			$_SESSION['password_admin'] =$row['password'];
			header("location:admin/produk/index.php");
		}
		else{
			header("location:loginadmin.php?page_error=1");
		}
}
 ?>