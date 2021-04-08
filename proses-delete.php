<?php
require_once 'pegawai.php';

if (isset($_GET['id'])) {
    $pegawai = new pegawai();

	$kode_staff = $_GET['id'];

	// delete data pegawai
    $pegawai->delete($kode_staff);
}					
?>