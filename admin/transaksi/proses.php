<?php 
require_once"../../koneksi.php";
$get_id=@$_GET['id'];
$proses=$_GET['proses'];
if ($proses=="confirm") {
	mysql_query("UPDATE tbl_pesanan SET status='Sudah Terkirim' WHERE id_pesanan='$get_id'");
	header("location:index.php");
}
if ($proses=="delete") {
	mysql_query("DELETE FROM tbl_pesanan WHERE id_pesanan='$get_id'")or die (mysql_error());
	header("location:index.php");
}
 ?>