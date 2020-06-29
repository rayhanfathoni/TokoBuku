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
	mysql_query("UPDATE tbl_temp_pesanan SET jumlah_produk='$_GET[jumlah]' WHERE id_temp_pesanan='$_GET[id_pesanan]'") or die(mysql_error());
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
		    <li><a href="logout.php?page=user"><i class="fa fa-sign-out-alt"></i></span> Keluar</a></li>
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
										<th>Pengarang</th>
										<th>Harga</th>
										<th>Jumlah</th>
										<th>Total</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									$id_user=@$_SESSION['id'];
									$sql=mysql_query("SELECT * FROM tbl_temp_pesanan,tbl_produk WHERE tbl_temp_pesanan.kode_produk=tbl_produk.kode_produk AND id_user='$id_user' ORDER BY tbl_temp_pesanan.id_temp_pesanan DESC");
									$cek=mysql_num_rows($sql);
									while ($pesanan=mysql_fetch_assoc($sql)) { ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $pesanan['nama']; ?></td>
										<td><?php echo $pesanan['pengarang']; ?></td>
										<td><?php echo "Rp ".number_format($pesanan['harga'],0,',','.'); ?></td>
										<td align="center">
										<form action="" method="get" class="form-inline">
											<div class="form-group">
											<input type="hidden" name="id_pesanan" class="form-control" value="<?php echo $pesanan['id_temp_pesanan']; ?>">
											<input type="number" name="jumlah" id="jumlah" class="form-control" min="{5"} required="required" value="<?php echo $pesanan['jumlah_produk']; ?>">
											</div>
											<button type="submit" class="btn btn-default" name="refresh"><i class="fa fa-refresh"></i></button>
										</form>
										</td>
										<td>
										<?php
										$sub_total[]=$pesanan['harga']*$pesanan['jumlah_produk'];
										$total=$pesanan['harga']*$pesanan['jumlah_produk'];
										echo "Rp ".number_format($total,0,',','.');
										?>
										</td>
										<td align="center">
											<a href="keranjang_belanja.php?proses=delete&id=<?php echo $pesanan['id_temp_pesanan']; ?>" class="btn btn-danger"  onclick="return confirm ('Anda yakin ingin menghapus data')"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td colspan="4" align="right"><b>TOTAL SEMUA = </b></td>
										<td><?php echo "Rp ".number_format(@array_sum($sub_total),0,',','.'); ?></td>
										<td></td>
									</tr>
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