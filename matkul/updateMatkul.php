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
		<title>update matkul</title>
	</head>
	<body>
    <?php
    include "../conn.php";
    include "../login/header.php";

    $sql = "select * from matkul order by kdmatkul";
    $smtp = $conn->prepare($sql);
    $smtp->execute();

    

    ?>

    <div class="container-fluid">
        <h2 class="text-center mb-4">Daftar Mata Kuliah</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE MATKUL</th>
                    <th>NAMA MATKUL</th>
                    <th>SKS</th>
                    <th>JENIS</th>
                    <th>SEMESTER</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    while($row = $smtp->fetch(PDO::FETCH_ASSOC)){     //mengambil data sebagai objek
                ?>
                        <tr>
                            <td><?php echo $no?></td>
                            <td><?php echo $row["kdmatkul"]?></td>
                            <td><?php echo $row["nmmatkul"]?></td>
                            <td><?php echo $row["sks"]?></td>
                            <td><?php echo $row["jnsmatkul"]?></td>
                            <td><?php echo $row["smt"]?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="editMatkul.php?qkode=<?php echo $row['kdmatkul']?>" >edit</a>    
                                <a class="btn btn-danger btn-sm" href="hpsMatkul.php?qkode=<?php echo $row['kdmatkul']?>" onclick="return confirm('Yakin ingin dihapus?')" >Hapus</a>
							</td>
                        </tr>
                        <?php
                        $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
	</body>
</html>