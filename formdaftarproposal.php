<!DOCTYPE html>
<html>
<head>
	<title> Halaman Pendaftaran | Bridge of Student and Sponsor</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">BOSS - Bridge of Student and Sponsor</a>
	    </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="formdaftarmahasiswa.php">Mahasiswa</a></li>
				<li><a href="formdaftarperusahaan.php">Perusahaan</a></li>
				<li><a href="proposal.php">Admin - Proposal</a></li>
			</ul>
  </div><!-- /.container-fluid -->
	</nav>

	<div class=".bg-image .d-flex .justify-content-center .align-items-center"
	 style="
	    background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/015.jpg');
	    height: 100vh;
	  "
	>
	  <h1  style="color:black;">Page title</h1>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					Formulir Pendaftaran Proposal
				</div>
				<div class="panel-body">
					<form action="prosespendaftaranproposal.php" method="POST">
						<div class ="form-group">
							<label for="nim">nim* : </label>
							<input type="text" class="form-control" name="nim" placeholder="nim" />
						<div class ="form-group">
							<label for="nim">id proposal* : </label>
							<input type="text" class="form-control" name="id" placeholder="id proposal" />
						</div>
						<div class ="form-group">
						<label for="nama">link proposal* : </label>
						<input type="text" class="form-control" name="link" placeholder="link gdrive" />
					</div>
						<div class ="form-group">
							<input type="submit" class="btn btn-primary" value="Tambah" name="daftar"" />
							<input type="button" class="btn btn-default" value="Keluar" name="Keluar"/>
						</div>
						</form>
					</div>
				</div>
			</div>
