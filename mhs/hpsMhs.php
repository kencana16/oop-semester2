<?php
    require_once('../class/classMhs.php');
    $qnim = $_GET['qnim'];

	$mhs->delete($qnim);
?>