<?php 
session_start();
if (@$_SESSION['username_admin']) {
	header("location:http://localhost/toko/admin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Computer</title>
	<link rel="stylesheet" href="css/biasa.css">
	<style>
	body{font-family: sans-serif; background: #3B6543; font-family: raleway;}
	button{border-radius: 0;}
	legend{border:1px solid white; border-right: none; border-left: none; color: white; padding: 5px;background: #3B6543; text-align: center;}
	.tabel-admin{ box-shadow: 1px 1px 10px #535353;}
	form .form-group input{border-radius: 0px;}
	.tabel-admin form button{border-radius: 0;}
	.tabel-admin{margin: 0 auto; background: white; padding:10px;}
	.tabel-admin table tr td{border: none;}
	.container{max-width: 350px; margin: 12.5% auto;}
	#message{margin: 5px 0px; color: red;}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="tabel-admin">
				<form action="proseslogin_admin.php" method="POST" role="form">
					<legend>LOGIN ADMIN</legend>
				
					<div class="form-group">
						<input type="text" id="input" class="form-control" name="username" required="required" title="" placeholder="Username...">
					</div>
					<div class="form-group">
						<input type="password" id="input" class="form-control" name="password" required="required" title="" placeholder="Password...">
					</div>
					
				
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
				<div id="message">
					<?php 
						if (@$_GET['page_error']==1) {
							echo "Username dan Password anda salah !";
						}
					 ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>