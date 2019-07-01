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
		<title>form mahasiswa</title>
	</head>
	<body>
		<?php

			include "../login/header.php";
		?>
		
		<div class="container ">
			<div class="dflex justify-content-start">
				<a href="../mhs/updateMhs.php" class="btn btn-info"><--Daftar Mahasiswa</a>
			</div>
			<h1 class="text-center">FORM PENDAFATARAN</h1>
				<form action= "sv_addMhs.php" method="post" onsubmit="return confirm('Apakah Data Benar?')">

					<div class="form-group">
						<label for="fnim">NIM :</label>	
						<input class="form-control" type="text" name="fnim" id="fnim" required>
					</div>

					<div class="form-group">
						<label for="fnama">Nama :</label>	
						<input class="form-control" type="text" name="fnama" id="fnama" required>
					</div>

					<div class="form-group">
						<label for="fjk">Jenis Kelamin :</label>
						<div class="radio">
							<label><input type="radio" name="fjkel" value="L"> Laki-laki</label>
						</div>	
						<div class="radio">
							<label><input type="radio" name="fjkel" value="P"> perempuan</label>
						</div>	
					</div>
					
					<div class="form-group">
						<label for="fkota">Kota Asal :</label>	
						<select class="form-control" name="fkota" id="fkota">
							<?php
								$arrkota = array('Ambarawa','Jepara','Demak','Kendal','Salatiga','Semarang','Temanggung','Rembang');
								sort($arrkota);
								foreach ($arrkota as $kota) {
									echo "<option value=$kota> $kota </option>";
								}
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="keterangan">Keterangan :</label>	
						<textarea class="form-control" name="keterangan" id="keterangan"></textarea>
					</div>
					
					<button type="submit" name="submit" class="btn">submit</button>

				</form>
		</div>
	</body>
</html>