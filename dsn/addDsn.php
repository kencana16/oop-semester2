<?php
	session_start();
	if(!isset($_SESSION['susername'])){
		header("location:../login/login.php");
	};

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="../bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
		<script src="../bootstrap4/js/bootstrap.js"></script>
		<link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
		<title>form dosen</title>
	</head>
	<body>
		<div class="container">
			<h1>FORM PENDAFATARAN</h1>
				<form action= "sv_addDsn.php" method="post">

					<div class="form-group">
						<label for="fnpp">NPP :</label>	
						<input class="form-control" type="text" name="fnpp" id="fnpp" required>
					</div>

					<div class="form-group">
						<label for="fnama">Nama :</label>	
						<input class="form-control" type="text" name="fnama" id="fnama" required>
					</div>
					
					<button type="submit" name="submit" class="btn">submit</button>

				</form>
		</div>
	</body>
</html>