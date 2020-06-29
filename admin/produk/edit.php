<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
$kode=@$_GET['kode'];
$sql=mysql_query("SELECT * FROM tbl_produk WHERE kode_produk='$kode'");
$produk=mysql_fetch_array($sql);
?>
<div class="content-header">
<h2>Mengatur Buku</h2>
</div>
<div class="content-isi">
	<a class="btn btn-danger" href="index.php" id="kembali"><i class="fa fa-reply"></i> Kembali</a>
	<div class="col-lg-4 tambah-edit">
		<legend>Edit Buku</legend>
		<form action="proses.php?proses=edit" method="post" enctype="multipart/form-data">
			<table>
				<tbody>
					<input type="hidden" name="kode" value="<?php echo $produk['kode_produk']; ?>">
					<tr>
						<td>
							<input type="text" name="nama" class="form-control" required="required" placeholder="nama..." value="<?php echo $produk['nama']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="pengarang" class="form-control" required="required" placeholder="pengarang" value="<?php echo $produk['pengarang']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<select name="jenis" class="form-control" required="required">
								<option value="">---Pilih Genre---</option>
								<?php 
								$sql=mysql_query("SELECT * FROM tbl_jenis");
								while ($jenis=mysql_fetch_array($sql)) { ?>
								<option value="<?php echo $jenis['id_jenis']; ?>"
								<?php 
								if ($produk['id_jenis']==$jenis['id_jenis']) {
									echo "selected";
								}
								 ?>
								><?php echo $jenis['jenis_barang']; ?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input type="number" name="harga" class="form-control" required="required" value="<?php echo $produk['harga']; ?>" placeholder="harga...">
						</td>
					</tr>
					<tr>
						<td>
							<input type="number" name="jumlah" class="form-control" required="required" value="<?php echo $produk['jumlah']; ?>" placeholder="jumlah...">
						</td>
					</tr>
					<tr>
						<td>
							<textarea name="deskripsi" id="input" class="form-control" rows="5" required="required" placeholder="deskripsi..."><?php echo $produk['deskripsi']; ?></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<a href="edit-gambar.php?kode=<?php echo $produk['kode_produk']; ?>" class="btn btn-default">Edit Gambar</a>
						</td>
					</tr>
					<tr>
						<td>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		<hr noshade>
	</div>
</div>
<?php 
require_once"../../element/footer.php";
?>
<script type="text/javascript">
function readURL(input) {
	if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image-preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function() {
	$("#upload-image").change(function(){
	    readURL(this);
	});
});
</script>