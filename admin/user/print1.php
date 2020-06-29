<?php
require_once"../../koneksi.php";
?>
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
<a href="print.php"><button onclick="window.print(); return false">Print</button></a>

