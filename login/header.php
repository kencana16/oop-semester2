
<nav class="navbar navbar-expand-sm navbar-dark bg-info sticky-top">
	<a class="navbar-bvrand" href="../login/homeadmin.php">
		<span class="navbar-text text-light"><h3>&nbsp;Sistem Akademik&nbsp;</h3></span>
	</a>
	
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
	<span class="badge  p-2 m-2 text-light">
		<?php echo ucfirst($_SESSION['susername'])?>
	</span>
	<a class="btn btn-sm btn-danger btn-rounded" href="../login/logout.php">Logout</a>
</nav>
<br/>
<br/>