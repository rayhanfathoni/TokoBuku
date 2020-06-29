<?php 
require_once"koneksi.php";
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rayhan Motor</title>
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
		.detail-barang .gambar{text-align: center;height:150px; width: 250px;}
		.detail-barang .gambar #image-preview{max-width: 100%; max-height: 100%;}
		.detail-barang{margin: 0 auto; float: none; padding: 15px;}
		.detail-barang table{width: 100%;}
		.detail-barang table tr{vertical-align: top;}
		.detail-barang table td{padding: 5px;}
	</style>
</head>
<body>
	<div class="utama">
		<header>
			<div class="gambar">
				<img src="gambar/coverbiasa.jpg" alt="">
			</div>
		</header>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li class="active">
					<a href="index.php"><i class="fa fa-home"></i></a>
				</li>
				<li>
					<a href="keranjang_belanja.php"><i class="fa fa-shopping-cart"></i> Keranjang</a>
				</li>
				<li>
					<a href="transaksi.php"><i class="far fa-handshake"></i> Transaksi</a>
				</li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		    <?php if (@$_SESSION['username']) { ?>
		    <li><a href="logout.php?page=user"><span class="fa fa-sign-out"></span> Keluar</a></li>
		    <?php
		    }
		    else{
		     ?>
		      <li><a href="register.php"><span class="fa fa-user"></span> Daftar</a></li>
		      <li><a href="login.php"><i class="fas fa-sign-in-alt"></i></span> Masuk</a></li>
		     <?php } ?>
		    </ul>
		  </div>
		</nav>
		<div class="col-lg-12 body-wrapper">
			<?php require_once"element/sidebar_main.php"; ?>
			<div class="col-lg-9 content-body">
			<?php
			$select_produk=mysql_query("SELECT * FROM tbl_produk,tbl_jenis WHERE tbl_produk.id_jenis=tbl_jenis.id_jenis AND tbl_produk.kode_produk='$_GET[produk]'");
			$produk=mysql_fetch_array($select_produk);
			 ?>
				<div class="isi-header">
					<div class="content-isi">
						<a href="index.php" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
						<div class="detail-barang col-lg-9">
							<table>
								<tbody>
									<tr>
										<td colspan="3" align="center">
											<div class="gambar">
												<img id="image-preview" src="admin/produk/<?php echo $produk['gambar']; ?>" alt="Masukkan Gambar" />
											</div>
										</td>
									</tr>
									<tr>
										<td>Judul Buku</td>
										<td>:</td>
										<td><?php echo $produk['nama']; ?></td>
									</tr>
									<tr>
										<td>Pengarang</td>
										<td>:</td>
										<td><?php echo $produk['pengarang']; ?></td>
									</tr>
									<tr>
										<td>Genre</td>
										<td>:</td>
										<td><?php echo $produk['jenis_barang']; ?></td>
									</tr>
									<tr>
										<td>HARGA</td>
										<td>:</td>
										<td><?php echo "Rp ".number_format($produk['harga'],0,',','.'); ?></td>
									</tr>
									<tr>
										<td>JUMLAH</td>
										<td>:</td>
										<td><?php echo $produk['jumlah']; ?></td>
									</tr>
									<tr>
										<td>DESKRIPSI</td>
										<td>:</td>
										<td><textarea name="" id="input" class="form-control" rows="4" required="required" readonly="readonly"><?php echo $produk['deskripsi']; ?></textarea></td>
									</tr>
									<tr>
										<td><a href="beliproduk.php?produk=<?php echo $produk['kode_produk']; ?>" class="btn btn-danger"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Masukkan Keranjang</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<h5>&copy2018 design by Rayhan Fathoni/XII RPL 1/27</h5>
		</footer>
		</div>
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