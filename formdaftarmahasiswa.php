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
					Formulir Pendaftaran Mahasiswa
				</div>
				<div class="panel-body">
					<form action="prosespendaftaranmahasiswa.php" method="POST">
						<div class ="form-group">
							<label for="nim">NIM *: </label>
							<input type="text" class="form-control" name="nim" placeholder="Nim" />
						</div>
						<div class ="form-group">
						<label for="nama">Nama *: </label>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" />
					</div>
						<div class ="form-group">
						<label for="jenis_kelamin">Jenis Kelamin: </label>
						<div class="form-group">
							<label class="radio-inline">
							  <input type="radio" name="inlineRadioOptions" id="jenis_kelamin" value="pria"> Laki - Laki
							</label>
							<label class="radio-inline">
							  <input type="radio" name="inlineRadioOptions" id="jenis_kelamin" value="wanita"> Perempuan
							</label>
						</div>

					</div>
						<div class ="form-group">
							<label for="prodi">Prodi: </label>
							<input type="text" class="form-control" name="prodi" placeholder="Jurusan di IPB" />
						</div>
						<div class ="form-group">
							<label for="no_telp">Nomor Telpon: </label>
							<input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon" />
						</div>
						<div class ="form-group">
							<label for="norek">Nomor Rekening: </label>
							<input type="text" class="form-control" name="norek" placeholder="Nomor Rekening" />
						</div>
						<div class ="form-group">
							<input type="submit" class="btn btn-primary" value="daftar" name="daftar" />
							<input type="button" class="btn btn-default" value="Batal" name="Batal"/>
						</div>
						</form>
					</div>
				</div>
			</div>
