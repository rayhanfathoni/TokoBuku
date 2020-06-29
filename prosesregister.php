<?php 
require_once"koneksi.php";
session_start();
	if ($_POST) {
	$nama     =($_POST['nama']);
	$username =($_POST['username']);
	$email     =($_POST['email']);
	$no_telepon =($_POST['no_telepon']);
	$alamat     =($_POST['alamat']);
	$password =($_POST['password']);
	$select_user=mysql_query("SELECT username FROM tbl_user WHERE username='$username'");
	
	$cek=mysql_num_rows($select_user);
		if($cek<>0){
			echo"<script>alert('Username telah digunakan')</script>";
				header("location:register.php");
		}
		else{
			$insert_user=mysql_query("INSERT INTO tbl_user VALUES(null,'$nama','$username','$password','$email','$no_telepon','$alamat',0)");
			
			if ($insert_user) {
				echo"<script>alert('Register Berhasil')</script>";
				header("location:login.php");
			}
			else{
			echo"<script>alert('Register Gagal')</script>";
				header("location:register.php");
			}
		}
	}
	 ?>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 