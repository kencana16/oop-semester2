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
		<title>edit matkul</title>
	</head>
	<body>
		<div class="container">
            <?php
				include "../conn.php";
				$kode = $_GET['qkode'];

				$sql = "SELECT * FROM matkul WHERE kdmatkul = '$kode' ";
				$smtp = $conn->prepare($sql);
				$smtp->execute();

				$hsl = $smtp::fetch(PDO::FETCH_ASSOC);
           ?>
			<h1>Edit Mata Kuliah</h1>
				<form action= "sv_editMatkul.php?qkode=<?php echo $kode ?>" method="post">

					<div class="form-group">
						<label for="fkdmtkl">Kode Mata Kuliah :</label>	
						<input class="form-control" type="text" name="fkdmtkl" id="fkdmtkl" value="<?php echo $kode; ?>" readonly>
					</div>

					<div class="form-group">
						<label for="fnama">Nama Mata Kuliah :</label>	
						<input class="form-control" type="text" name="fnama" id="fnama" value="<?php echo $hsl['nmmatkul']; ?>" required>
					</div>

					<div class="form-group">
						<label for="fsks">Jumlah SKS :</label>	
						<input class="form-control" type="text" name="fsks" id="fsks" value="<?php echo $hsl['sks']; ?>" required>
					</div>
					
					<div class="form-group">
						<label for="fjmtkl">Jenis Mata Kuliah :</label>
						<div class="radio">
							<label><input type="radio" name="fjmtkl" value="T" <?php if($hsl['jnsmatkul']=="T"){echo "checked";} ?>> Teori</label>
						</div>	
						<div class="radio">
							<label><input type="radio" name="fjmtkl" value="P" <?php if($hsl['jnsmatkul']=="P"){echo "checked";} ?>> Praktek</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="fjmtkl" value="T/P" <?php if($hsl['jnsmatkul']=="T/P"){echo "checked";} ?>> Teori & Praktek</label>
						</div>	
					</div>
					
					<div class="form-group">
						<label for="fsmt">Semester :</label>	
						<input class="form-control" type="text" name="fsmt" id="fsmt" value="<?php echo $hsl['smt']; ?>" required>
					</div>
					
					<button type="submit" name="submit" class="btn">submit</button>

				</form>
		</div>
	</body>
</html>
