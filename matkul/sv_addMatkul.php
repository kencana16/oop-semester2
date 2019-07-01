<?php

    include "../conn.php";

    $kode = $_POST['fkdmtkl'];
	$nmMtkl = $_POST['fnama'];
	$sks = $_POST['fsks'];
	$jenis = $_POST['fjmtkl'];
	$smt = $_POST['fsmt'];

	//buat perintah sql
	$sql="INSERT INTO matkul VALUES('$kode','$nmMtkl','$sks','$jenis','$smt')";
	
	//simpan ke database
	$smtp = $conn->prepare(sql);
	$smtp->execute();

	//tutup koneksi
	$conn = null;
	
	//kembali ke form
	header ("location: addMatkul.php")
?>