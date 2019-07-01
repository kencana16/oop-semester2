<?php

    include "../conn.php";

    $npp = $_POST['fnpp'];
	$nmDsn = $_POST['fnama'];

	//buat perintah sql
	$sql="INSERT INTO dosen VALUES('$npp','$nmDsn')";
	
	//simpan ke database
	$smtp = $conn->prepare(sql);
	$smtp->execute();

	//tutup koneksi
	$conn = null;
	
	//kembali ke form
	header ("location: addDsn.php")
?>