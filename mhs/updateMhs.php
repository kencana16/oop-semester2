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
		<title>update mahasiswa</title>
	</head>
	<body>
        <?php
        require_once('classMhs.php');
        include "../login/header.php";

        $mhs = new mhs;
        $smtp = $mhs->read();

        ?>

        <div class="container-fluid">
            <h2 class="text-center mb-4">Daftar Mahasiswa</h2>
            <div class="d-flex justify-content-end mb-2">
                <form class="form-inline  m-0 mr-2" action="" method="POST">
                    <input class="form-control mr-1" type="text" name="search" id="search" autofocus>
                    <button class="btn btn-outline-info" name="btnsearch">Cari</button>
                </form>
                <a href="addMhs.php" class="btn btn-info">Tambah Mahasiswa</a>
            </div>

            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>GENDER</th>
                        <th>KOTA</th>
                        <th>KETERANGAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        while($row=$smtp->fetch(PDO::FETCH_ASSOC)){     //mengambil data sebagai objek
                    ?>
                            <tr>
                                <td><?php echo $no?></td>
                                <td><?php echo $row["nim"]?></td>
                                <td><?php echo $row["nmmhs"]?></td>
                                <td><?php echo $row["jkel"]?></td>
                                <td><?php echo $row["kota"]?></td>
                                <td><?php echo $row["ket"]?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="editMhs.php?qnim=<?php echo $row['nim']?>" >edit</a>    
                                    <a class="btn btn-danger btn-sm" href="hpsMhs.php?qnim=<?php echo $row['nim']?>" onclick="return confirm('Yakin ingin dihapus?')" >Hapus</a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php 
            $conn = null;
        ?>
	</body>
</html>


