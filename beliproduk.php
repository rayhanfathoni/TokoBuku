<?php 
session_start();
require_once"koneksi.php";
$id_produk=$_GET['produk'];
$sama=mysql_query("SELECT * FROM tbl_temp_pesanan WHERE kode_produk='$id_produk' AND id_user='$_SESSION[id]'");
$cek_sama=mysql_num_rows($sama);
if (empty($_SESSION['username'])) {
header("location:login.php");
}
elseif ($cek_sama<>0) { ?>
	<script>
		alert("Barang sudah ada di keranjang");
		top.location="http://localhost/toko/keranjang_belanja.php";
	</script>
<?php 
}
else{
	$beli=mysql_query("INSERT INTO tbl_temp_pesanan VALUES(null,'$id_produk',1,'$_SESSION[id]')");
	if ($beli) { ?>
	<script>
		alert("Barang berhasil masuk di keranjang");
		top.location="http://localhost/toko/index.php";
	</script>
	<?php } 
}
 ?>