<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$prodi = $_POST['prodi'];
	$no_telp = $_POST['no_telp'];
	$norek = $_POST['norek'];

	// buat query
  $query = pg_query("INSERT INTO mahasiswa VALUEs('$nim','$nama','$jenis_kelamin','$prodi', '$no_telp','$norek')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: formdaftarproposal.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}


} else {
	header('Location: index.php?status=batal');;
}
?>
