<?php

    include "../conn.php";

    $npp = $_POST['fnpp'];
	$nmDsn = $_POST['fnama'];
	
	//buat perintah sql
	$sql="UPDATE dosen SET npp='$npp', nmdosen='$nmDsn' WHERE npp='$npp' ";
	
	//simpan ke database
	$smtp = $conn->prepare(sql);
	$smtp->execute();
	
	//tutup koneksi
	$conn = null;
	
	//kembali ke form
	header ("location: updateDsn.php")
?>