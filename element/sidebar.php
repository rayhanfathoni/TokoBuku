<?php 
session_start();
if (!@$_SESSION['username_admin']) {
	header("location:http://localhost/toko/loginadmin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<script src="../../js/jquery.js"></script>
	<link rel="stylesheet" href="../../css/biasa.css">
	<link rel="stylesheet" href="../../css/backend.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
	<script src="../js/jquery.js"></script>
	<link rel="stylesheet" href="../css/biasa.css">
	<link rel="stylesheet" href="../css/backend.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<div class="col-lg-12 body-wrapper">
			<div class="col-lg-3 sidebar">
				<div class="side side-1">
					<div class="isi">
						<div class="avatar"><img src="../../element/sana.jpg" alt="gambar"/></div>
						<div class="logout"><a href="http://localhost/toko/logout.php?page=admin" class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</a></div>
					</div>
				</div>
				<div class="side side-2">
				
					<div class="isi">
						<ul>
						<div style="font-size: 20px">
							<li><a href="http://localhost/toko/admin/produk">Buku</a></li>
							<li><a href="http://localhost/toko/admin/jenis">Genre Buku</a></li>
							<li><a href="http://localhost/toko/admin/user">User</a></li>
							<li><a href="http://localhost/toko/admin/transaksi">Transaksi</a></li>
							</div>	
						</ul>
					</div>
				</div>
				<div class="side side-3">
				</div>
			</div>
			<div class="col-lg-9 content-body">