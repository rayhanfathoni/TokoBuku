<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<script src="../js/jquery.js"></script>
	<link rel="stylesheet" href="../css/biasa.css">
	<link rel="stylesheet" href="../css/backend.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<div class="col-lg-12 body-wrapper">
			<div class="col-lg-2 sidebar">
				<div class="side side-1">
					<div class="isi">
						<div class="avatar"><img src="user-male-alt-icon.png" alt="gambar"/></div>
						<div class="logout"><a href="logout.php?page=admin" class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</a></div>
					</div>
				</div>
				<div class="side side-2">
					<div class="side-header"><h2>Menu</h2></div>
					<div class="isi">
						<ul>
							<li><a href="#">Menu 1</a></li>
							<li><a href="#">Menu 2</a></li>
							<li><a href="#">Menu 3</a></li>
							<li><a href="#">Menu 4</a></li>
						</ul>
					</div>
				</div>
				<div class="side side-3">
				</div>
			</div>
			<div class="col-lg-10 content-body">
				<div class="content-header">
					
				</div>
				<div class="content-isi">
					
				</div>
				<footer>
					
				</footer>
			</div>
		</div>
	</div>
<script src="../js/biasa.js"></script>
</body>
<script>
	$(document).ready(function() {
		var tinggiContent=$(".content-body").height();
		$(".sidebar").css({
			height: tinggiContent+"px",
		});
	});
</script>
</html>