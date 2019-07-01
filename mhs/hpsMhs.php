<?php
    require_once('classMhs.php');
    $qnim = $_GET['qnim'];

	$mhs = new mhs;
	$mhs->delete($qnim);
?>