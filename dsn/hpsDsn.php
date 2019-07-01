<?php
    include "../conn.php";
    $qnpp = $_GET['qnpp'];

    //buat perintah sql
	$sql="DELETE FROM dosen WHERE npp ='$qnpp'";
	
	//simpan ke database
	$smtp = $conn->prepare(sql);
	$smtp->execute();
	
	//tutup koneksi
	$conn = null;
	
	//kembali ke form
	header ("location: updateDsn.php")
?>