<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$id = $_POST['id'];
	$link = $_POST['link'];
	$nim = $POST['nim'];

	// buat query
  $query = pg_query("INSERT INTO proposal(id_proposal,link,nim) VALUEs('$id','$link','$nim')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: formdaftarproposal.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: formdaftarproposal.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
