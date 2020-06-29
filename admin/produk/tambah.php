<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
?>
<div class="content-header">
<h2>Mengatur Buku</h2>
</div>
<div class="content-isi">
	<a class="btn btn-danger" href="index.php" id="kembali"><i class="fa fa-reply"></i> Kembali</a>
	<div class="col-lg-4 tambah-edit">
		<legend>Tambah Data</legend>
		<form action="proses.php?proses=tambah" method="post" enctype="multipart/form-data">
			<table>
				<tbody>
					<tr>
						<td>
							<input type="text" name="kode" class="form-control" required="required" placeholder="Kode Buku...">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="nama" class="form-control" required="required" placeholder="Judul Buku...">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="pengarang" class="form-control" required="required" placeholder="Pengarang...">
						</td>
					</tr>
					<tr>
						<td>
							<select name="jenis" class="form-control" required="required">
								<option value="">---Pilih Genre---</option>
								<?php 
								$sql=mysql_query("SELECT * FROM tbl_jenis");
								while ($jenis=mysql_fetch_array($sql)) { ?>
								<option value="<?php echo $jenis['id_jenis']; ?>"><?php echo $jenis['jenis_barang']; ?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<input type="number" name="harga" class="form-control" required="required" placeholder="Harga...">
						</td>
					</tr>
					<tr>
						<td>
							<input type="number" name="jumlah" class="form-control" required="required" placeholder="Jumlah...">
						</td>
					</tr>
					<tr>
						<td>
							<input type="file" name="gambar" id="upload-image"><br>
							<div class="Gambar">
								<img id="image-preview" src="default.png" alt="Masukkan Gambar" />
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<textarea name="deskripsi" id="input" class="form-control" rows="5" required="required" placeholder="Deskripsi..."></textarea>
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