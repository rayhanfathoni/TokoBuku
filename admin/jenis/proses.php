<?php 
require_once"../../koneksi.php";
$id=@$_POST['id'];
$get_id=@$_GET['id'];
$jenis=@$_POST['jenis_barang'];
$proses=$_GET['proses'];
if ($proses=="tambah") {
	mysql_query("INSERT INTO tbl_jenis VALUES(null,'$jenis')");
	header("location:index.php");
}
else if ($proses=="edit") {
	mysql_query("UPDATE tbl_jenis SET jenis_barang='$jenis' WHERE id_jenis=$id");
	header("location:index.php");
}
else if ($proses=="delete") {
	mysql_query("DELETE FROM tbl_jenis WHERE id_jenis=$get_id");
	header("location:index.php");
}
 ?>