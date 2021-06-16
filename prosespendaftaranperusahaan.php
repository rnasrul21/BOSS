<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$id = $_POST['id_perusahaan'];
	$nama = $_POST['nama'];
	$jenis = $_POST['jenis'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	$email = $_POST['email'];

	// buat query
  $query = pg_query("INSERT INTO perusahaan VALUEs('$id', '$nama', '$jenis', '$alamat','$no_telp','$email')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}


} else {
	header('Location: index.php?status=batal');;
}
?>
