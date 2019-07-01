
<nav class="navbar navbar-expand-sm bg-primary navbar-light sticky-top">
	<a class="navbar-bvrand" href="../login/homeadmin.php">
		<img src="../img/home.png" style="width:50px;">
	</a>
	
	<span class="navbar-text"><h3>&nbsp;Sistem Akademik&nbsp;</h3></span>
	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibeNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapsibeNavbar">
		<ul class="navbar-nav">
			<li class="nav-item action">
				<a class="nav-link" href="../mhs/updateMhs.php">Mahasiswa</a>
			</li>
			<li class="nav-item action">
				<a class="nav-link" href="../dsn/updateDsn.php">Dosen</a>
			</li>
			<li class="nav-item action">
				<a class="nav-link" href="../matkul/updateMatkul.php">Mata Kuliah</a>
			</li>
		</ul>
	</div>
	<span class="badge  p-2 m-2">
		<img src="../img/user.png" style="width:15px; margin-right:5px">
		<?php echo ucfirst($_SESSION['susername'])?>
	</span>
	<a class="btn btn-sm btn-outline-light" href="../login/logout.php">LOGOUT</a>
</nav>
<br/>
<br/>