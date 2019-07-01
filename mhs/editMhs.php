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
		<title>edit mahasiswa</title>
	</head>
	<body>
		<div class="container">
            <?php
				include "../class/classMhs.php";
				$qnim = $_GET['qnim'];

				
				$hsl = $mhs->read($qnim)->fetch(PDO::FETCH_ASSOC); //method read sudah mengembalikan nilai smtp
           ?>
			<h1>Edit Mahasiswa</h1>
				<form action= "sv_editMhs.php?qnim=<?php echo $qnim ?>" method="post">

					<div class="form-group">
						<label for="fnim">NIM :</label>	
						<input class="form-control" type="text" name="fnim" id="fnim" value="<?php echo $qnim; ?>" readonly>
					</div>

					<div class="form-group">
						<label for="fnama">Nama :</label>	
						<input class="form-control" type="text" name="fnama" id="fnama" value="<?php echo $hsl['nmmhs']; ?>" required>
					</div>

					<div class="form-group">
						<label for="fjk">Jenis Kelamin :</label>
						<div class="radio">
							<label><input type="radio" name="fjkel" value="L" <?php if($hsl['jkel']=="L"){echo "checked";} ?> > Laki-laki</label>
						</div>	
						<div class="radio">
							<label><input type="radio" name="fjkel" value="P" <?php if($hsl['jkel']=="P"){echo "checked";} ?> > perempuan</label>
						</div>	
					</div>
					
					<div class="form-group">
						<label for="fkota">Kota Asal :</label>	
						<select class="form-control" name="fkota" id="fkota">
							<?php
								$arrkota = array('Ambarawa','Jepara','Demak','Kendal','Salatiga','Semarang','Temanggung','Rembang');
								sort($arrkota);
								foreach ($arrkota as $kota) {						//print arary kota untuk pilihannya
									echo "<option value=$kota ";					//pembuka option
									if($kota==$hsl['kota']){echo "selected> $kota </option>";}		//membuat value default dari database
									else{echo "> $kota </option>";};						//closing option
								}
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="keterangan">Keterangan :</label>	
						<textarea class="form-control" name="keterangan" id="keterangan" ><?php echo $hsl['ket']; ?></textarea>
					</div>
					
					<button type="submit" name="submit" class="btn">submit</button>

				</form>
		</div>
	</body>
</html>
