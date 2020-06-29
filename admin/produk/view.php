<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
$kode=@$_GET['kode'];
$sql=mysql_query("SELECT * FROM tbl_produk,tbl_jenis WHERE tbl_produk.id_jenis=tbl_jenis.id_jenis AND tbl_produk.kode_produk='$kode'");
$produk=mysql_fetch_array($sql);
?>
<div class="content-header">
<h2>Mengatur Produk</h2>
</div>
<div class="content-isi">
	<a class="btn btn-danger" href="index.php" id="kembali"><i class="fa fa-reply"></i> Kembali</a>
	<div class="col-lg-4 tambah-edit">
		<legend>Detail Produk</legend>
			<table>
				<tbody>
					<tr>
						<td colspan="3" align="center">
							<div class="gambar">
								<img id="image-preview" src="<?php echo $produk['gambar']; ?>" alt="Masukkan Gambar" />
							</div>
						</td>
					</tr>
					<tr>
						<td>Kode</td>
						<td>:</td>
						<td><?php echo $produk['kode_produk']; ?></td>
					</tr>
					<tr>
						<td>NAMA</td>
						<td>:</td>
						<td><?php echo $produk['nama']; ?></td>
					</tr>
					<tr>
						<td>MEREK</td>
						<td>:</td>
						<td><?php echo $produk['jenis_barang']; ?></td>
					</tr>
					<tr>
						<td>HARGA</td>
						<td>:</td>
						<td><?php echo $produk['harga']; ?></td>
					</tr>
					<tr>
						<td>JUMLAH</td>
						<td>:</td>
						<td><?php echo $produk['jumlah']; ?></td>
					</tr>
					<tr>
						<td>DESKRIPSI</td>
						<td>:</td>
						<td><textarea name="" id="input" class="form-control" rows="3" required="required" readonly="readonly"><?php echo $produk['deskripsi']; ?></textarea></td>
					</tr>
				</tbody>
			</table>
		<hr noshade>
	</div>
</div>
<?php 
require_once"../../element/footer.php";
?>