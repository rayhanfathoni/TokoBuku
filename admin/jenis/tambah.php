<?php 
require_once"../../element/sidebar.php";
?>
<div class="content-header">
<h2>Mengatur Genre</h2>
</div>
<div class="content-isi">
	<a class="btn btn-danger" href="index.php" id="kembali"><i class="fa fa-reply"></i> Kembali</a>
	<div class="col-lg-4 tambah-edit">
		<legend>Tambah Genre</legend>
		<form action="proses.php?proses=tambah" method="post">
			<table>
				<tbody>
					<tr>
						<td>
							<input type="text" name="jenis_barang" id="input" class="form-control" value="" required="required" placeholder="Genre Buku...">
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