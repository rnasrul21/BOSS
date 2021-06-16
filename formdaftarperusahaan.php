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
				<li><a href="proposal.php">Cek Proposal</a></li>
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
				Formulir Pendaftaran perusahaan
			</div>
  		<div class="panel-body">
				<form action="prosespendaftaranperusahaan.php" method="POST">
					<div class ="form-group">
						<label for="id_perusahaan">id* : </label>
						<input type="text" class="form-control" name="id_perusahaan" placeholder="id perusahaan" />
					</div>
					<div class ="form-group">
						<label for="nama">Nama* : </label>
						<input type="text" class="form-control" name="nama" placeholder="nama lengkap" />
					</div>
					<div class ="form-group">
						<label for="jenis">Jenis: </label>
						<input type="text" class="form-control" name="jenis" placeholder="kategori hasil produksi">
					</div>
					<div class ="form-group">
						<label for="alamat">Alamat: </label>
						<textarea name="alamat" class="form-control" placeholder="alamat kantor"></textarea>
					</div>
					<div class ="form-group">
						<label for="no_telp">Nomor telepon: </label>
						<input type="text" class="form-control" name="no_telp" placeholder="Nomor telepon" />
					</div>
					<div class ="form-group">
						<label for="email">Email: </label>
						<input type="text" class="form-control" name="email" placeholder="email" />
					</div>
					<div class ="form-group">
						<input type="submit" class="btn btn-primary" value="daftar" name="daftar" />
						<input type="submit" class="button" value="batal" name="batal" />
					</div>
					</form>
				</div>
			</div>
		</div>
