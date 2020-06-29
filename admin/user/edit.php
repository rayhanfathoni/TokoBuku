<?php 
require_once"../../koneksi.php";
require_once"../../element/sidebar.php";
$id=@$_GET['id'];;
$select_id=mysql_query("SELECT * FROM tbl_user WHERE id_user=$id");
$user=mysql_fetch_array($select_id);
?>
<div class="content-header">
<h2>Mengatur User</h2>
</div>
<div class="content-isi">
	<a class="btn btn-danger" href="index.php" id="kembali"><i class="fa fa-reply"></i> Kembali</a>
	<div class="col-lg-4 tambah-edit">
		<legend>Edit Data</legend>
		<form action="proses.php?proses=edit" method="post">
			<input type="hidden" name="id" id="input" class="form-control" value="<?php echo $user['id_user']; ?>">
			<table>
				<tbody>
					<tr>
						<td>
							<div class="radio">
								<label>
									<input type="radio" name="blokir" id="inputBlokir" value="1" <?php if ($user['blokir']==1){ ?>checked="checked"<?php } ?>>
									Banned
								</label><br>
								<label>
									<input type="radio" name="blokir" id="inputBlokir" value="0" <?php if ($user['blokir']==0){ ?>checked="checked"<?php } ?>>
									Non Banned
								</label>

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