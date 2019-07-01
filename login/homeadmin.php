<?php 
    session_start() 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="../bootstrap4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <title>halaman admin</title>
</head>
<body>
    <?php
    include "header.php"
    ?>
    <div class="container-fluid content">
        <h1>Selamat Datang <?php echo ucfirst($_SESSION['susername']) ?> </h1>
    </div>

</body>
</html>