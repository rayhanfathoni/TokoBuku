<?php 
require_once"../../koneksi.php";
$id=@$_POST['id'];
$get_id=@$_GET['id'];
$blokir=@$_POST['blokir'];
$proses=$_GET['proses'];
if ($proses=="tambah") {
	mysql_query("INSERT INTO tbl_jenis VALUES(null,'$jenis')");
	header("location:index.php");
}
else if ($proses=="edit") {
	mysql_query("UPDATE tbl_user SET blokir='$blokir' WHERE id_user=$id");
	header("location:index.php");
}
else if ($proses=="delete") {
	mysql_query("DELETE FROM tbl_user WHERE id_user=$get_id");
	header("location:index.php");
}
 ?>