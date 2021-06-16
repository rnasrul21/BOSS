<?php include("config.php"); ?>
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
				<li class=""><a href="proposal.php">Cek Proposal<span class="sr-only">(current)</span></a></li>
			</ul>
  </div><!-- /.container-fluid -->
	</nav>
  <div class=".bg-image .d-flex .justify-content-center .align-items-center"
   style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/015.jpg');
      height: 100vh;
    ">
    <h1  style="color:black;">Page title</h1>
  <div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				Daftar Proposal
			</div>
	<table border="1">
	<thead>
		<tr>
			<th> id proposal </th>
			<th> nama mahasiswa </th>
			<th> status penerimaan </th>
			<th> dana sponsor </th>
		</tr>
	</thead>
	<tbody>

		<?php
		$q = pg_query("SELECT proposal.id_proposal,mahasiswa.nama,proposal.status,
      proposal.dana FROM proposal,mahasiswa where mahasiswa.nim=proposal.nim");
    	// $query = mysqli_query($db, $sql);


		while($q = pg_fetch_array($q['nama'])){
			echo "<tr>";
			echo "<td>".$q['id_proposal']."</td>";
			echo "<td>".$q['nama']."</td>";
			echo "<td>".$q['status']."</td>";
			echo "<td>".$q['dana']."</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>
