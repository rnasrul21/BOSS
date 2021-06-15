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
	      <a class="navbar-brand" href="#">BOSS - Bridge of Student and Sponsor</a>
	    </div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="formdaftarmahasiswa.php">Mahasiswa</a></li>
				<li><a href="formdaftarperusahaan.php">Perusahaan</a></li>
				<li class=""><a href="proposal.php">Admin - Proposal<span class="sr-only">(current)</span></a></li>
			</ul>
  </div><!-- /.container-fluid -->
	</nav>

  <div class="transparent-background" id="formperusahaan">
		<form action="prosespendaftaran.php" method="POST">
			<h0>Formulir Pendaftaran Perusahaan</h0>
				<p>
					<label for="id_perusahaan">id: </label>
					<input type="text" name="id_perusahaan" placeholder="id perusahaan" />
				</p>
				<p>
					<label for="nama">Nama: </label>
					<input type="text" name="nama" placeholder="nama lengkap" />
				</p>
				<p>
					<label for="jenis">Jenis: </label>
					<input type="text" name="alamat" placeholder="kategori hasil produksi">
				</p>
				<p>
					<label for="alamat">Alamat: </label>
					<textarea name="alamat" placeholder="alamat kantor"></textarea>
				</p>
				<p>
					<label for="no_telp">Nomor telepon: </label>
					<input type="text" name="no_telp" placeholder="Nomor telepon" />
				</p>
				<p>
					<label for="email">Email: </label>
					<input type="text" name="email" placeholder="email" />
				</p>
				<p>
					<input type="submit" class="button" value="Daftar" name="daftar" />
				</p>
			</form>
	</div>

<input class="btn btn-primary" type="submit" value="Submit">
	</p>
	</fieldset>
</form>
	</ul>
</nav>


<?php if(isset($_GET['status'])): ?>
<p>
	<?php
		if($_GET['status'] == 'sukses'){
			echo "Pendaftaran siswa baru berhasil!";
		} else {
			echo "Pendaftaran gagal!";
		}
	?>
</p>
<?php endif; ?>

</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</html>
