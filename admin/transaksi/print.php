<?php
require_once"../../koneksi.php";
?>
<div class="clear"></div>
	<div class="tabel-toko">
		<div class="table-responsive">
			<table class="table table-hover" border="1">
				<thead>
					<tr>
						<th>#</th>
						<th>Pelanggan</th>
						<th>Tanggal Pemesanan</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
								<tbody>
					<?php
					$p=@$_GET['p']; 
					$sql=mysql_query("SELECT * FROM tbl_pesanan,tbl_user WHERE tbl_pesanan.id_user=tbl_user.id_user and (tbl_user.nama LIKE'%$p%' or tbl_pesanan.tanggal_pesanan LIKE'%$p%')");
					$no=1;
					while ($pesanan=mysql_fetch_array($sql)) { ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $pesanan['nama']; ?></td>
						<td><?php echo $pesanan['tanggal_pesanan']; ?></td>
						<td><?php echo $pesanan['status']; ?></td>
						<td align="center">
						<?php 
						if ($pesanan['status']=='Belum Dikirim') { ?>
						<a href="proses.php?proses=confirm&id=<?php echo $pesanan['id_pesanan']; ?>" class="btn btn-success">Confirm</a>
						<?php } ?>
						<a href="proses.php?proses=delete&id=<?php echo $pesanan['id_pesanan']; ?>" class="btn btn-danger"  onclick="return confirm ('Anda yakin ingin menghapus data')"><i class="fa fa-trash"></i></a>
						<a href="detail.php?id_pesanan=<?php echo $pesanan['id_pesanan']; ?>" class="btn btn-warning">Detail</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
<a href="print.php"><button onclick="window.print(); return false">Print</button></a>

