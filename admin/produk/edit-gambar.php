<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
$kode=@$_GET['kode'];
$sql=mysql_query("SELECT * FROM tbl_produk WHERE kode_produk='$kode'");
$produk=mysql_fetch_array($sql);
?>
<div class="content-header">
<h2>Mengatur Produk</h2>
</div>
<div class="content-isi">
	<a class="btn btn-danger" href="index.php" id="kembali"><i class="fa fa-reply"></i> Kembali</a>
	<div class="col-lg-4 tambah-edit">
		<legend>Tambah Data</legend>
		<form action="proses.php?proses=edit-gambar" method="post" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $produk['kode_produk']; ?>" name="kode">
			<table>
				<tbody>
					<tr>
						<td>
							<input type="file" name="gambar" id="upload-image"><br>
							<div class="gambar">
								<img id="image-preview" src="<?php echo $produk['gambar']; ?>" alt="Masukkan Gambar" />
							</div>
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