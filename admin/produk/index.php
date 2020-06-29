<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
?>
<div class="content-header">
<h2>Mengatur Buku</h2>
</div>
<div class="content-isi">
	<a class="btn btn-primary" id="tambah-data" href="tambah.php"><i class="fa fa-plus"></i> Data</a>
	<div class="clear"></div>
	<div class="col-lg-3 search">
	<form action="" method="get">
	<input type="search" name="p" id="inputSearch" class="form-control" placeholder="Nama Produk...">
	</form>
	</div>
	<div class="clear"></div>
	<div class="tabel-toko">
		<div class="table-responsive">
			<table class="table table-hover" border="1">
				<thead>
					<tr>
						<th>Nomor</th>
						<th>Judul Buku</th>
						<th>Pengarang</th>
						<th>Genre</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$p=@$_GET['p']; 
					$sql_select_produk=mysql_query("SELECT * FROM tbl_produk,tbl_jenis WHERE tbl_produk.id_jenis=tbl_jenis.id_jenis and nama LIKE'%$p%'");
					$no=1;
					while ($select_produk=mysql_fetch_array($sql_select_produk)) { ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $select_produk['nama']; ?></td>
						<td><?php echo $select_produk['pengarang']; ?></td>
						<td><?php echo $select_produk['jenis_barang']; ?></td>
						<td><?php echo $select_produk['harga']; ?></td>
						<td><?php echo $select_produk['jumlah']; ?></td>
						<td align="center">
						<a href="view.php?kode=<?php echo $select_produk['kode_produk']; ?>" class="btn btn-success">View</a>
						<a href="edit.php?kode=<?php echo $select_produk['kode_produk']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
						<a href="proses.php?proses=delete&kode=<?php echo $select_produk['kode_produk']; ?>" class="btn btn-danger"  onclick="return confirm ('Anda yakin ingin menghapus data')"><i class="fa fa-trash"></i></a>
						</td>
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