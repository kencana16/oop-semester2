<?php
    include "../conn.php";
    $kode = $_GET['qkode'];

    //buat perintah sql
	$sql="DELETE FROM matkul WHERE kdmatkul ='$kode'";
	
	//simpan ke database
	$smtp = $conn->prepare(sql);
	$smtp->execute();
	
	//tutup koneksi
	$conn = null;
	
	//kembali ke form
	header ("location: updateMatkul.php")
?>