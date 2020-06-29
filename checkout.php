<?php
		session_start();
		include "koneksi.php";
		$id_pesanan=uniqid("P-");
		$date=date('Y-m-d');
				
		$order1=mysql_query("select * from tbl_temp_pesanan a
		left outer join tbl_produk b on a.kode_produk = b.kode_produk WHERE id_user='$_SESSION[id]'");
		while($semua = mysql_fetch_array($order1)){
			$id_detail_pesanan = uniqid("DP-");
			//Masukkan ke detail_order
			mysql_query("INSERT INTO tbl_detail_pesanan (id_detail_pesanan, id_pesanan, kode_produk, jumlah , harga) VALUES('$id_detail_pesanan','$id_pesanan','$semua[kode_produk]','$semua[jumlah_produk]','$semua[harga]')");
			
			mysql_query("UPDATE tbl_produk SET jumlah=(jumlah-$semua[jumlah_produk]) WHERE kode_produk = '$semua[kode_produk]'");
		}
		$order2=mysql_query("SELECT * FROM tbl_temp_pesanan WHERE id_user='$_SESSION[id]'");
		$semua2= mysql_fetch_array($order2);
		//Masukkan ke order
			mysql_query("INSERT INTO tbl_pesanan VALUES('$id_pesanan','$_SESSION[id]','Belum Dikirim','$date','$semua2[kode_produk]')");
			
			//Hapus dari order_temp
			mysql_query("DELETE FROM tbl_temp_pesanan WHERE id_user ='$_SESSION[id]'");
?>
<script>
		alert("Pesanan anda sudah terkirim, lakukan pembayaran dan barang akan secepatnya dikirim");
		top.location="http://localhost/toko/index.php";
</script>