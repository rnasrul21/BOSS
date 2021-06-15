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
				<li class=""><a href="proposal.php">Admin - Proposal<span class="sr-only">(current)</span></a></li>
			</ul>
  </div><!-- /.container-fluid -->
	</nav>
  <div class="container">
		<h3>IPB University</h3>
		<div class="panel panel-default">
			<div class="panel-heading">
				Formulir Pendaftaran perusahaan
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
		$l = pg_query("SELECT id_proposal,status,nim,dana FROM proposal");
		$a = pg_query("SELECT nama FROM mahasiswa,proposal where mahasiswa.nim=proposal.nim");
		// $query = mysqli_query($db, $sql);


		while($m = pg_fetch_array($l)){
			echo "<tr>";
			echo "<td>".$l['id_proposal']."</td>";
			echo "<td>".$a['nama']."</td>";
			echo "<td>".$l['status']."</td>";
			echo "<td>".$l['dana']."</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>