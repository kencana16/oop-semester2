<?php

    	require_once('../class/classMhs.php');

	$nim = $_POST['fnim'];
	$nmMhs = $_POST['fnama'];
	$jkel = $_POST['fjkel'];
	$kota = $_POST['fkota'];
	$keterangan = $_POST['keterangan'];

	
	$mhs->update($nim,$nmMhs,$jkel,$kota,$keterangan);
	
	//kembali ke form
	header ("location: updateMhs.php")
?>