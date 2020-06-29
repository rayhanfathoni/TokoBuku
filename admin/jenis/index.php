<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
?>
<div class="content-header">
<h2>Mengatur Genre</h2>
</div>
<div class="content-isi">
	<a class="btn btn-primary" id="tambah-data" href="tambah.php"><i class="fa fa-plus"></i> Data</a>
	<div class="clear"></div>
	<div class="col-lg-3 search">
	<form action="" method="get">
	<input type="search" name="p" id="inputSearch" class="form-control" placeholder="Pencarian...">
	</form>
	</div>
	<div class="clear"></div>
	<div class="tabel-toko">
		<div class="table-responsive">
			<table class="table table-hover" border="1">
				<thead>
					<tr>
						<th>Nomor</th>
						<th>Genre</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$p=@$_GET['p']; 
					$sql_select_jenis=mysql_query("SELECT * FROM tbl_jenis WHERE jenis_barang LIKE'%$p%'");
					$no=1;
					while ($select_jenis=mysql_fetch_array($sql_select_jenis)) { ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $select_jenis['jenis_barang']; ?></td>
						<td align="center">
						<a href="edit.php?id=<?php echo $select_jenis['id_jenis']; ?>" id="edit-data" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
						<a href="proses.php?proses=delete&id=<?php echo $select_jenis['id_jenis']; ?>" class="btn btn-danger" onclick="return confirm ('Anda yakin ingin menghapus data')"><i class="fa fa-trash"></i></a>
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