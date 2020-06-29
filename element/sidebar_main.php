<div class="col-lg-3 sidebar">
			<?php if (@$_SESSION['username']){ ?>
				<div class="side">
					<div class="side-header">
						<h2>User</h2>
					</div>
					<div class="isi">
						Selamat datang <b><?php echo $_SESSION['username']; ?></b>
					</div>
				</div>	
			<?php } ?>
				<div class="side">
					<div class="side-header">
						<h2>Menu</h2>
					</div>
					<div class="isi jenis">
						<ul>
							<?php 
							$select_jenis=mysql_query("SELECT * FROM tbl_produk GROUP BY id_jenis");
							while ($selJenis=mysql_fetch_array($select_jenis)) { ?>
							<?php 
							$jns=mysql_query("SELECT * FROM tbl_jenis WHERE id_jenis='$selJenis[id_jenis]'");
							$jenis=mysql_fetch_array($jns);
							 ?>
							<li>
							<a href="index.php?cat=<?php echo $selJenis['id_jenis']; ?>" <?php if ($selJenis['id_jenis']==@$_GET['cat']) { ?>
							id="actived"
							<?php } ?>
							>
							<?php echo $jenis['jenis_barang']; ?>
							</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>