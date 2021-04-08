<?php 
	require_once "pegawai.php";

if (isset($_POST['simpan'])) {
	$pegawai 		= new pegawai();
	$kode_staff		= $_POST['kode_staff'];
	$nama_staff		= $_POST['nama_staff'];	
	// 
	$tanggal_r		= $_POST['tanggal_rekrut'];
	$tanggal_rekrut = date("Y-m-d", strtotime($tanggal_r));
	// 
	$alamat			= $_POST['alamat'];	
	$tempat_lahir	= $_POST['tempat_lahir'];
	// 
	$tanggal_l 		= $_POST['tanggal_lahir'];	
	$tanggal_lahir	= date("Y-m-d", strtotime($tanggal_l));
	// 
	$kontak			= $_POST['kontak'];	
	$id_bonus		= $_POST['id_bonus'];	
	$id_jabatan		= $_POST['id_jabatan'];

	$pegawai->insert($kode_staff,$nama_staff,$tanggal_rekrut,$alamat,$tempat_lahir,$tanggal_lahir,$kontak,$id_bonus,$id_jabatan);
}

 ?>
