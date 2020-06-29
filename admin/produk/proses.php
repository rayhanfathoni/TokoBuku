<?php 
require_once"../../koneksi.php";
$kode=@$_POST['kode'];
$get_kode=@$_GET['kode'];
$nama=@$_POST['nama'];
$jenis=@$_POST['jenis'];
$pengarang=@$_POST['pengarang'];
$harga=@$_POST['harga'];
$jumlah=@$_POST['jumlah'];
$deskripsi=@$_POST['deskripsi'];
$gambar_nama=@$_FILES['gambar']['name'];
$gambar_tipe=@$_FILES['gambar']['type'];
$gambar_asal=@$_FILES['gambar']['tmp_name'];
$gambar_error=@$_FILES['gambar']['error'];
$gambar_size=@$_FILES['gambar']['size'];
$folder="gambar";
$gambar_format=pathinfo($gambar_nama,PATHINFO_EXTENSION);
$proses=@$_GET['proses'];
if ($proses=="tambah") {
	if (!empty($gambar_asal)) {
		if ($gambar_tipe=="image/jpg" or $gambar_tipe=="image/png" or $gambar_tipe=="image/jpeg") {
			$acak=str_shuffle("DSJWYdbadhwy");
			$gambar_nama=str_replace(".$gambar_format", "", $gambar_nama);
			$gambar_nama=$acak."_".time().".".$gambar_format;
			$direktori=$folder."/".$gambar_nama;
			$upload=move_uploaded_file($gambar_asal, $direktori);
			if ($upload) {
				echo "berhasil di upload";
			}
		}
	mysql_query("INSERT INTO tbl_produk VALUES('$kode','$nama','$pengarang','$jenis','$direktori','$deskripsi','$harga','$jumlah')");
	header("location:index.php");
	}
}
elseif ($proses=="edit") {
	mysql_query("UPDATE tbl_produk SET nama='$nama',pengarang='$pengarang',id_jenis='$jenis',harga='$harga',jumlah='$jumlah',deskripsi='$deskripsi' WHERE kode_produk='$kode'") or die(mysql_error());
	header("location:index.php");
}
elseif ($proses=="delete") {
	$sql=mysql_query("SELECT * FROM tbl_produk WHERE kode_produk='$get_kode'");
	$produk=mysql_fetch_array($sql);
	$namafile=$produk['gambar'];
	mysql_query("DELETE FROM tbl_produk WHERE kode_produk='$get_kode'");
	unlink($namafile);
	header("location:index.php");
}
elseif ($proses=="edit-gambar") {
	$sql=mysql_query("SELECT * FROM tbl_produk WHERE kode_produk='$kode'");
	$produk=mysql_fetch_array($sql);
	$namafile=$produk['gambar'];
	unlink($namafile);
	if (!empty($gambar_asal)) {
		if ($gambar_tipe=="image/jpg" or $gambar_tipe=="image/png" or $gambar_tipe=="image/jpeg") {
			$acak=str_shuffle("DSJWYdbadhwy");
			$gambar_nama=str_replace(".$gambar_format", "", $gambar_nama);
			$gambar_nama=$acak."_".time().".".$gambar_format;
			$direktori=$folder."/".$gambar_nama;
			$upload=move_uploaded_file($gambar_asal, $direktori);
			if ($upload) {
				echo "berhasil di upload";
			}
		}
	mysql_query("UPDATE tbl_produk SET gambar='$direktori' WHERE kode_produk='$kode'");
	header("location:index.php");
	}
}
 ?>
