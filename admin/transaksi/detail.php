<?php 
session_start();
require_once"../../koneksi.php";
$get_id=$_GET['id_pesanan'];
$sql_pesanan=mysql_query("SELECT * FROM tbl_user,tbl_pesanan,tbl_detail_pesanan WHERE tbl_pesanan.id_pesanan=tbl_detail_pesanan.id_pesanan AND tbl_pesanan.id_user=tbl_user.id_user AND tbl_pesanan.id_pesanan='$get_id'");
$detail_pesanan=mysql_fetch_array($sql_pesanan);
?>
<table border="1" style="border-collapse: collapse; width: 800px; margin: 0 auto; font-family: raleway;" cellpadding="5px">
		<tr>
		<td colspan="3" valign="top">
			<table border="0" style="width: 100%">
				<tr>
					<td><b>Pelanggan</b></td>
					<td>:</td>
					<td><?php echo $detail_pesanan['nama']; ?></td>
				</tr>
				<tr>
					<td><b>Email</b></td>
					<td>:</td>
					<td><?php echo $detail_pesanan['email']; ?></td>
				</tr>
				<tr>
					<td><b>No Telp</b></td>
					<td>:</td>
					<td><?php echo $detail_pesanan['no_telepon']; ?></td>
				</tr>
				<tr>
					<td><b>Alamat</b></td>
					<td>:</td>
					<td><?php echo $detail_pesanan['alamat']; ?></td>
				</tr>
			</table>
		</td>
		<td colspan="2" valign="top">
			<table border="0" style="width: 100%">
				<tr>
					<td><b>Transaksi</b></td>
					<td>:</td>
					<td><?php echo $detail_pesanan['id_pesanan']; ?></td>
				</tr>
				<tr>
					<td><b>Admin</b></td>
					<td>:</td>
					<td><?php echo $_SESSION['username_admin']; ?></td>
				</tr>
			</table>
		</td>
		</tr>
		<tr>
			<td align="center"><b>Kode</b></td>
			<td align="center"><b>Judul Buku</b></td>
			<td align="center"><b>Pengarang</b></td>
			<td align="center"><b>Jumlah</b></td>
			<td align="center"><b>Harga</b></td>
			<td align="center"><b>Total</b></td>
		</tr>
		<?php
		$sql=mysql_query("SELECT * , tbl_detail_pesanan.harga as Rego FROM tbl_produk,tbl_pesanan,tbl_detail_pesanan WHERE tbl_pesanan.id_pesanan=tbl_detail_pesanan.id_pesanan AND tbl_detail_pesanan.kode_produk=tbl_produk.kode_produk AND tbl_pesanan.id_pesanan='$get_id'");
		while ($pesanan=mysql_fetch_assoc($sql)) { ?>
		<tr>
			<td><?php echo $pesanan['kode_produk']; ?></td>
			<td><?php echo $pesanan['nama']; ?></td>
			<td><?php echo $pesanan['pengarang']; ?></td>
			<td><?php echo $pesanan['jumlah']; ?></td>
			<td><?php echo "Rp ".number_format($pesanan['Rego'],0,',','.'); ?></td>
			<td>
			<?php
			$sub_total[]=$pesanan['harga']*$pesanan['jumlah'];
			$total=$pesanan['harga']*$pesanan['jumlah'];
			echo "Rp ".number_format($total,0,',','.');
			?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="4" align="right"><b>TOTAL SEMUA</b></td>
			<td colspan="2"><?php echo "Rp ".number_format(@array_sum($sub_total),0,',','.'); ?></td>
		</tr>
</table>