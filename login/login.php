<?php
    session_start();
    if(isset($_SESSION['susername'])){
        header("location:../login/homeadmin.php");
    };

    if(isset($_POST['submit'])){
		//koneksi
		require_once "../class/classLogin.php";

		//mengambil data form
		$user = $_POST['username'];
		$pass = MD5($_POST['password']);

		$login = new login;
		$login->cekLogin($user,$pass);
		//$_SESSION['susername'] = $user;

		//tutuo koneksi
		$login->conn = null;
    }
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="../bootstrap4/js/bootstrap.js"></script>
	<link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
	<title>halaman login</title>

</head>
<body>
	<div class="d-flex justify-content-center align-items-center" style="height:100vh">
		<div class="card">
			<form action="#" method="post" id="loginform">
				<div class="card-body">
					<h2 class="text-center mb-3">LOGIN</h2>
					<div class="input-group input-group-lg mt-2">
						<div class="input-group-prepend">
							<img class="input-group-text p-2" src="../img/user.png" style="width:50px; height:50px"/>
						</div>
						<input type="text" class="form-control" name="username" placeholder="Username" required autocomplete="no" autofocus><br/>
					</div>
					<div class="input-group input-group-lg mt-2">
						<div class="input-group-prepend">
							<img class="input-group-text p-2" src="../img/key.png" style="width:50px; height:50px"/>
						</div>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required><br/>
					</div>
					<label><input type="checkbox" onClick="showPassword()">Show Password</label>
					<button class="btn btn-success btn-lg form-control mt-2" type="submit" name="submit">LOGIN</button>
				</div>
			</form>
		</div>
	</div>
	<script>
	
		function showPassword(){
			var pwd = document.getElementById("password");

			if(pwd.type === "password"){
				pwd.type = "text";
			}
			else{
				pwd.type = "password"
			}
		}
	
	</script>
</body>
</html>