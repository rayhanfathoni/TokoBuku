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
	<title>User</title>
	<link rel="stylesheet" href="css/biasa.css">
	<link rel="stylesheet" href="css/utama.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<style>
		.persen{
			margin: 5px 0px;
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
			color: black;
			padding: 2px 10px; 
			font-size: 12px;
			font-family: century gothic;
		}
		#beli{color: black; font-size: 20px; margin-right: 10px;}
		.search{padding: 0; margin:5px 10px 0px;}
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
			<?php
			$p=@$_GET['p'];
			if (@$_GET['cat']) {
				$select_produk=mysql_query("SELECT * FROM tbl_produk WHERE id_jenis='$_GET[cat]' AND jumlah<>0 and nama LIKE'%$p%' ORDER BY nama ASC");
			}
			else{
			$select_produk=mysql_query("SELECT * FROM tbl_produk WHERE jumlah>0 and nama LIKE'%$p%' ORDER BY nama ASC");
			}
			 ?>
				<div class="isi-header">
					<div class="content-isi">
						<div class="col-lg-5 search">
							<form action="" method="get" class="form-inline">
									<div class="form-group">
										<input type="search" name="p" id="inputP" class="form-control" placeholder="Cari....">
									</div>
									<button type="submit" class="btn btn-deafault"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="clear"></div>
						<div class="row">
						<?php 
						while ($produk=mysql_fetch_array($select_produk)) { ?>
							<div class="col-lg-4 colo">
								<div class="col-lg-12 col">
									<div class="gambar">
										<img src="admin/produk/<?php echo $produk['gambar']; ?>" alt="" id="gambar-ok">
									</div>
									<div class="desk">
										<?php echo "<b>".$produk['nama']."</b>"; ?><br>
										<?php echo "Rp ".number_format($produk['harga'],0,',','.'); ?> || Jumlah 
                                        <?php echo $produk['jumlah']; ?>
									</div>
									<div class="aksi">
									<a href="beliproduk.php?produk=<?php echo $produk['kode_produk']; ?>" id="beli">
                                    <i class="fa fa-  shopping-cart" aria-hidden="true"></i></a>	
                                    <a type="button" class="btn btn-danger" href="detail_barang.php?produk=<?php echo $produk['kode_produk']; ?>">Detail</a>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<h5>User </h5>
		</footer>
		</div>
<script src="js/biasa.js"></script>
</body>
</html>