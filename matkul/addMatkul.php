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
		<title>form matkul</title>
	</head>
	<body>
		<div class="container">
			<h1>FORM PENDAFATARAN</h1>
				<form action= "sv_addMatkul.php" method="post">

					<div class="form-group">
						<label for="fkdmtkl">Kode Mata Kuliah :</label>	
						<input class="form-control" type="text" name="fkdmtkl" id="fkdmtkl" required>
					</div>

					<div class="form-group">
						<label for="fnama">Nama Mata Kuliah :</label>	
						<input class="form-control" type="text" name="fnama" id="fnama" required>
					</div>

					<div class="form-group">
						<label for="fsks">Jumlah SKS :</label>	
						<input class="form-control" type="text" name="fsks" id="fsks" required>
					</div>
					
					<div class="form-group">
						<label for="fjmtkl">Jenis Mata Kuliah :</label>
						<div class="radio">
							<label><input type="radio" name="fjmtkl" value="T"> Teori</label>
						</div>	
						<div class="radio">
							<label><input type="radio" name="fjmtkl" value="P"> Praktek</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="fjmtkl" value="T/P"> Teori & Praktek</label>
						</div>	
					</div>
					
					<div class="form-group">
						<label for="fsmt">Semester :</label>	
						<input class="form-control" type="text" name="fsmt" id="fsmt" required>
					</div>

					<button type="submit" name="submit" class="btn">submit</button>

				</form>
		</div>
	</body>
</html>