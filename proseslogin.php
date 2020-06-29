<?php 
session_start();
if (isset($_SESSION['username'])) {
	header("location:index.php");
}
else{
	require_once"koneksi.php";
	$username =$_POST['username'];
	$password =$_POST['password'];
		$data=mysql_query("SELECT * FROM tbl_user WHERE username='$username' && password='$password'");
		$num=mysql_num_rows($data);
		if ($num == 0){
			echo "<script>alert('Isikan Username dan Kata Sandi dengan Benar');</script>";
		header("location:login.php");
		}
		else{
			$row=mysql_fetch_array($data);
			if ($username==$row['username'] && $password==$row['password'] && $row['blokir']==0) {
				$_SESSION['username'] =$row['username'];
				$_SESSION['id'] =$row['id_user'];
				
				$_SESSION['password'] =$row['password'];
				header("location:index.php");
			}
			elseif ($row['blokir']==1) {
				header("location:login.php?page_error=3");
			}
			else{
				header("location:login.php?page_error=2");
		}
		
		}
}
 ?>