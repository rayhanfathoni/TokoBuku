<?php 
session_start();
if (@$_SESSION['username']) {
	header("location:index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rayhan Motor</title>
	<link rel="stylesheet" href="css/biasa.css">
	<style>
	body{
		background: rgba(242,181,206,1);
background: -moz-linear-gradient(left, rgba(242,181,206,1) 0%, rgba(242,181,206,1) 0%, rgba(235,102,213,1) 54%, rgba(242,181,206,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(242,181,206,1)), color-stop(0%, rgba(242,181,206,1)), color-stop(54%, rgba(235,102,213,1)), color-stop(100%, rgba(242,181,206,1)));
background: -webkit-linear-gradient(left, rgba(242,181,206,1) 0%, rgba(242,181,206,1) 0%, rgba(235,102,213,1) 54%, rgba(242,181,206,1) 100%);
background: -o-linear-gradient(left, rgba(242,181,206,1) 0%, rgba(242,181,206,1) 0%, rgba(235,102,213,1) 54%, rgba(242,181,206,1) 100%);
background: -ms-linear-gradient(left, rgba(242,181,206,1) 0%, rgba(242,181,206,1) 0%, rgba(235,102,213,1) 54%, rgba(242,181,206,1) 100%);
background: linear-gradient(to right, rgba(242,181,206,1) 0%, rgba(242,181,206,1) 0%, rgba(235,102,213,1) 54%, rgba(242,181,206,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2b5ce', endColorstr='#f2b5ce', GradientType=1 );
		font-family: raleway;
	}
	.container{padding: 20px; width: 100%;}
	.login{margin-bottom: 60px; text-align: right;}
	.login form{padding: 0px;}
	.login form input{border-radius: 0; color: black; opacity: none;}
	.login form button{border-radius: 0;}
	.daftar{}
	.daftar form{padding: 20px 10px 60px; background-color: black; opacity: 0.75;}
	.daftar form input{border-radius: 0; font-size: 15px; color: black; opacity: none;}
	.daftar form button{border-radius: 0;}
	.daftar form legend{color: white;}
	.daftar form #message_gagal{color: #F95858;}
	.daftar form #message_sukses{color: #28ED28;}
	.message_gagal{color: white; background-color: #7B1818;}
	.message_gagal h4{text-align: center; font-family: century gothic; color: white;}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<?php if (@$_GET['page_error']){ ?>
				<div class="col-lg-7 message_gagal">
					<h4>
					<?php 
					if ($_GET['page_error']==2) {
						echo "Login gagal silahkan coba lagi !";
					}
					elseif ($_GET['page_error']==3) {
						echo "Akun anda sudah di blacklist silahkan buat akun lagi !";
					}
					 ?>
					</h4>
			</div>
			<?php }
			else{ ?>
				<div class="col-lg-7"></div>
		<?php } ?>
			<div class="login col-lg-5">
				<form action="proseslogin.php" method="POST" class="form-inline" role="form">
					<div class="form-group">
						<input type="text" name="username" id="inputUsername" class="form-control" value="" required="required" title="" placeholder="username...">
					</div>
					<div class="form-group">
						<input type="password" name="password" id="input" class="form-control" required="required" title="" placeholder="password...">
					</div>
					<button type="submit" class="btn btn-danger">Masuk</button>
				</form>
			</div>
			<div class="col-lg-6"></div>
			<div class="col-lg-6 daftar">
				<div class="col-lg-5"></div>
				<form action="prosesregister.php" method="POST" role="form" class="col-lg-7">
					<legend>Daftar User</legend>
					<?php if (@$_GET['page_error']==1){ ?>
					<p id="message_gagal">Username sudah terpakai, Masukkan lagi !</p>
					<?php 
					}
					elseif (@$_GET['page_sukses']==1) { ?>
					<p id="message_sukses">Pendaftaran sudah berhasil, silahkan login</p>
					<?php } ?>
					<div class="form-group">
						<input type="text" name="nama" id="input" class="form-control" value="" required="required" title="" placeholder="nama...">
					</div>
					<div class="form-group">
						<input type="text" name="username" id="input" class="form-control" value="" required="required" title="" placeholder="username...">
					</div>
					<div class="form-group">
						<input type="password" name="password" id="input" class="form-control" required="required" title="" placeholder="password...">
					</div>
					<div class="form-group">
						<input type="text" name="email" id="input" class="form-control" value="" required="required" title="" placeholder="email...">
					</div>
					<div class="form-group">
						<input type="text" name="no_telepon" id="input" class="form-control" value="" required="required" title="" placeholder="no telepon...">
					</div>
					<div class="form-group">
						<input type="text" name="alamat" id="input" class="form-control" value="" required="required" title="" placeholder="alamat...">
					</div>
				
					
				
					<button type="submit" class="btn btn-primary">Daftar</button>
				</form>
			</div>
		</div>
	</div>
<script src="js/biasa.js"></script>
</body>
</html>