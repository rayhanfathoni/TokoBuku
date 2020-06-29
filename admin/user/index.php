<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
?>
<div class="content-header">
<h2>Mengatur User</h2>
</div>
<div class="content-isi">
	<div class="clear"></div>
	<div class="col-lg-3 search">
	<form action="" method="get">
	<input type="search" name="p" id="inputSearch" class="form-control" placeholder="Username atau Nama..."><br><a class="btn btn-primary"  href="print1.php"> Print User</a>
	</form>
	</form>
	</div>
	<div class="clear"></div>
	<div class="tabel-toko">
		<div class="table-responsive">
			<table class="table table-hover" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Password</th>
						<th>Banned</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$p=@$_GET['p']; 
					$sql_select_user=mysql_query("SELECT * FROM tbl_user WHERE username LIKE'%$p%' or nama LIKE'%$p%'");
					$no=1;
					while ($select_user=mysql_fetch_array($sql_select_user)) { ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $select_user['nama']; ?></td>
						<td><?php echo $select_user['username']; ?></td>
						<td><?php echo $select_user['password']; ?></td>
						<td>
							<?php if ($select_user['blokir']==1) {
								echo "Dibanned";
							} 
							else{
								echo "-";
							}
							?>
						</td>
						<td align="center">
						<a href="edit.php?id=<?php echo $select_user['id_user']; ?>" id="edit-data" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
						<a href="proses.php?proses=delete&id=<?php echo $select_user['id_user']; ?>" class="btn btn-danger" onclick="return confirm ('Anda yakin ingin menghapus data')"><i class="fa fa-trash"></i></a>
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