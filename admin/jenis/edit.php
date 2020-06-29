<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
$id=@$_GET['id'];;
$select_id=mysql_query("SELECT * FROM tbl_jenis WHERE id_jenis=$id");
$jenis=mysql_fetch_array($select_id);
?>
<div class="content-header">
<h2>Mengatur Genre</h2>
</div>
<div class="content-isi">
	<a class="btn btn-danger" href="index.php" id="kembali"><i class="fa fa-reply"></i> Kembali</a>
	<div class="col-lg-4 tambah-edit">
		<legend>Edit Data</legend>
		<form action="proses.php?proses=edit" method="post">
			<input type="hidden" name="id" id="input" class="form-control" value="<?php echo $jenis['id_jenis']; ?>">
			<table>
				<tbody>
					<tr>
						<td>
							<input type="text" name="jenis_barang" id="input" class="form-control" required="required" value="<?php echo $jenis['jenis_barang']; ?>">
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