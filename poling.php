	
<?php 
require_once"koneksi.php";
$poling=mysql_query("SELECT * FROM tbl_poling");
$tampil=mysql_fetch_array($poling);
$cek=mysql_num_rows($poling);
if ($cek==0) {
	if (@$_GET['poling']=='like') {
		mysql_query("INSERT INTO tbl_poling VALUES(null,1,0)");
		header("location:poling.php");
	}
	else if (@$_GET['poling']=='dislike') {
		mysql_query("INSERT INTO tbl_poling VALUES(null,0,1)");
		header("location:poling.php");
	}
}
else if($cek<>0){
	if (@$_GET['poling']=='like') {
		$sql="UPDATE tbl_poling SET suka=suka+1";
		mysql_query($sql)or die(mysql_error());
		header("location:poling.php");
	}
	else if (@$_GET['poling']=='dislike') {
		$sql="UPDATE tbl_poling SET tidak_suka=tidak_suka+1";
		mysql_query($sql)or die(mysql_error());
		header("location:poling.php");
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.poling{margin: 0 5px;}
		.persen{
		overflow: hidden;
		width: 400px;
		}
		.biru{
			height: 20px;
			background: blue;
			float: left;
		}
		.merah{
			height: 20px;
			background: red;
			float: right;
		}
	</style>
</head>
<body>
	<div class="table-responsive">
			<table class="table table-hover">
				<tbody>
					<tr>
						<a href="poling.php?poling=like"><button type="submit" class="btn btn-primary poling">LIKE</button></a> <a href="poling.php?poling=dislike"><button type="submit" name="dislike" class="btn btn-primary poling">DISLIKE</button></a>
					</tr>
				</tbody>
			</table>
	</div>
	<?php echo $tampil['suka']; ?> Orang Menyukai <?php echo $tampil['tidak_suka']; ?> Orang tidak menyukai
	<?php 
	$jumlah=$tampil['suka']+$tampil['tidak_suka'];
	$persen_suka=floor($tampil['suka']/$jumlah*100);
	$persen_tidak_suka=ceil($tampil['tidak_suka']/$jumlah*100);
	echo $persen_suka." ".$persen_tidak_suka;
	 ?>
	 <div class="persen">
		<div class="biru" style="width: <?php echo @$persen_suka; ?>%"></div>
		<div class="merah" style="width: <?php echo @$persen_tidak_suka; ?>%"></div>
	</div>
	
</body>
</html>