<?php 
require_once"koneksi.php";
session_start();
if (@$_GET['proses']=='delete') {
	mysql_query("DELETE FROM tbl_temp_pesanan WHERE id_temp_pesanan='$_GET[id]'");
	header("location:keranjang_belanja.php");
}
if (isset($_GET['refresh'])) {
	$opo=mysql_query("SELECT * FROM tbl_temp_pesanan,tbl_produk WHERE tbl_temp_pesanan.kode_produk=tbl_produk.kode_produk AND id_temp_pesanan='$_GET[id_pesanan]'");
	$opo_ae=mysql_fetch_array($opo);
	if ($_GET['jumlah']>$opo_ae['jumlah']) { ?>
	<script>
		alert("jumlah melebihi batas");
		top.location="http://localhost/toko/keranjang_belanja.php";
	</script>
	<?php }
	else{
	mysql_query("UPDATE tbl_temp_pesanan SET jumlah_produk='$_GET[jumlah]' WHERE id_temp_pesanan='$_GET[id_pesanan]'pengarang") or die(mysql_error());
	header("location:keranjang_belanja.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/biasa.css">
	<link rel="stylesheet" href="css/utama.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<style>
		.persen{
			padding: 0px;
		}
		.biru{
			height: 20px;
			background: #510119;
			float: left;
		}
		.merah{
			height: 20px;
			background: #991D42;
			float: right;
		}
		#kirim{
			border-radius: 0px;
		}
		.hasil{
			font-size: 12px;
			color: #083306;
		}
		.desk{
			color: white;
			padding: 2px 10px; 
			font-size: 12px;
		}
		#beli{color: black; font-size: 20px; margin-right: 10px;}
		#jumlah{width: 100px; display: inline;}
		.content-isi{padding: 10px;}
		#kembali{margin-bottom: 10px;}
		#check{margin-top: 10px;}
		.table{margin-bottom: 0px;}
	</style>
</head>
<body>
	<div class="utama">
		<header>
			<div class="gambar">
				<img src="gambar/coverbiasa2.jpg" alt="">
			</div>
		</header>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li>
					<a href="index.php"><i class="fa fa-home"></i></a>
				</li>
				<li class="active">
					<a href="keranjang_belanja.php"><i class="fa fa-shopping-cart"></i> Keranjang</a>
				</li>
				<li>
					<a href="transaksi.php"><i class="far fa-handshake"></i> Transaksi</a>
				</li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		    <?php if (@$_SESSION['username']) { ?>
		    <li><a href="logout.php?page=user"><span class="fa fa-sign-out-alt"></span> Keluar</a></li>
		    <?php
		    }
		    else{
		     ?>
		      <li><a href="register.php"><span class="fa fa-user"></span> Daftar</a></li>
		      <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Masuk</a></li>
		     <?php } ?>
		    </ul>
		  </div>
		</nav>
		<div class="col-lg-12 body-wrapper">
			<?php require_once"element/sidebar_main.php"; ?>
			<div class="col-lg-9 content-body">
				<div class="isi-header">
					<div class="content-isi">
						<a href="index.php" class="btn btn-primary" id="kembali">Kembali Belanja</a>
						<div class="table-responsive">
							<table class="table" border="1">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Judul Buku</th>
										<th>Pengarang</th>
										<th>Tanggal Pemesanan</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
					$p=@$_GET['p']; 
					@$sql=mysql_query("SELECT A.nama, pengarang, B.tanggal_pesanan, B.status, C.nama FROM tbl_user AS A INNER JOIN tbl_pesanan AS B INNER JOIN tbl_produk AS C ON (A.id_user=B.id_user) AND (B.kode_produk = C.kode_produk) WHERE A.id_user = '".$_SESSION['id']."' ") or die (mysql_error()) ;
					$no=1;
					
					while($pesanan=mysql_fetch_array($sql)) { 
					$kd = $pesanan['nama'];
					
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $_SESSION['username']; ?></td>
						<td><?php echo $kd; ?></td>
						<td><?php echo $pesanan['pengarang']; ?></td>
						<td><?php echo $pesanan['tanggal_pesanan']; ?></td>
						<td><?php echo $pesanan['status']; ?></td>
											
					</tr>
					<?php } ?>
								</tbody>
							</table>
						</div>
						<?php 
						if (empty($cek)) {
						}
						else{ ?>
						<a href="checkout.php" class="btn btn-danger" id="check">Check Out</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<footer>
		<h5>User </h5>
		</footer>
</div>
</body>
</html>
<script src="js/biasa.js"></script>
</body>
</html>
<script>
	$(document).ready(function() {
		var tinggiSidebar=$(".sidebar").height();
		$(".content-body").css({
			minHeight: tinggiSidebar+"px",
		});
		var tinggiContent=$(".content-body").height();
		$(".sidebar").css({
			minHeight: tinggiContent+"px",
		});
	});
</script>