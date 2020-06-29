<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
?>
<div class="content-header">
<h2>Mengatur Transaksi</h2>
</div>
<div class="content-isi">	
	<div class="col-lg-3 search">
	<form action="" method="get">
	<input type="search" name="p" id="inputSearch" class="form-control" placeholder="Nama & Tanggal Pesanan..."><br><a class="btn btn-primary"  href="print.php"> Print Transaksi</a>
	</form>
	</div>
	<div class="clear"></div>
	<div class="tabel-toko">
		<div class="table-responsive">
			<table class="table table-hover" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Pelanggan</th>
						<th>Judul Buku</th>
						<th>Pengarang</th>
						<th>Tanggal Pemesanan</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$p=@$_GET['p']; 
					//$sql=mysql_query("SELECT * FROM tbl_pesanan WHERE id_pesanan");
					
					$sql=mysql_query("SELECT id_pesanan,A.username, pengarang, B.tanggal_pesanan, B.status, C.nama FROM tbl_user AS A INNER JOIN tbl_pesanan AS B INNER JOIN tbl_produk AS C ON (A.id_user=B.id_user) AND (B.kode_produk = C.kode_produk) ") ;
					$no=1;
					
					while($pesanan=mysql_fetch_array($sql)) {  
					$kd = $pesanan['nama'];
					
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $pesanan['username']; ?></td>
						<td><?php echo $kd; ?></td>
						<td><?php echo $pesanan['pengarang']; ?></td>
						<td><?php echo $pesanan['tanggal_pesanan']; ?></td>
						<td><?php echo $pesanan['status']; ?></td>
						<td align="center">
						<?php 
						if ($pesanan['status']=='Belum Dikirim') { ?>
						<a href="proses.php?proses=confirm&id=<?php echo $pesanan['id_pesanan']; ?>" class="btn btn-success">Confirm</a>
						<?php } ?>
						<a href="proses.php?proses=delete&id=<?php echo $pesanan['id_pesanan']; ?>" class="btn btn-danger" onclick="return confirm ('Anda yakin ingin menghapus data')"><i class="fa fa-trash"></i></a>
						<a href="detail.php?id_pesanan=<?php echo $pesanan['id_pesanan']; ?>" class="btn btn-warning">Detail</a>
						</t>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul>
</div>
<?php 
require_once"../../element/footer.php";
?>