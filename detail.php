<div class="card-header">
	<h1>Detail Data Pegawai</h1>
</div>

<?php
      $kode_staff = $_GET['id'];

      if (isset($kode_staff)) {
      	require_once 'pegawai.php';        
        $pegawai 		= new pegawai();        
        $data 			= $pegawai->get_pegawai($kode_staff);
        // 
		$kode_staff		= $data['kode_staff'];
		$nama_staff		= $data['nama_staff'];	
		// 
		$tanggal_r		= $data['tanggal_rekrut'];
		$tanggal_rekrut = date("Y-m-d", strtotime($tanggal_r));
		// 
		$alamat			= $data['alamat'];	
		$tempat_lahir	= $data['tempat_lahir'];
		// 
		$tanggal_l 		= $data['tanggal_lahir'];	
		$tanggal_lahir	= date("Y-m-d", strtotime($tanggal_l));
		// 
		$kontak			= $data['kontak'];	
		// 
		$id_bonus		= $data['id_bonus'];	
		$keterangan		= $data['keterangan'];
		$tmp_total_bonus= $data['total_bonus'];
		$total_bonus    = "Rp" . number_format($tmp_total_bonus,2,',','.');
       	// 
		$id_jabatan		= $data['id_jabatan'];	
		$jabatan		= $data['jabatan'];
		$tmp_gaji_pokok	= $data['gaji_pokok'];
		$gaji_pokok     = "Rp" . number_format($tmp_gaji_pokok,2,',','.');
		//
		$tmp_total_gaji	= $tmp_gaji_pokok + $tmp_total_bonus;
        $total_gaji  = "Rp" . number_format($tmp_total_gaji,2,',','.');

      }
      ?>

<div class="card-body">

  <?php  
  if (empty($_GET['alert'])) {
    echo "";
  } elseif ($_GET['alert'] == 1) {
    echo "<div class='alert alert-danger' role='alert'>
            <strong>Gagal!</strong> Terjadi kesalahan.
          </div>";
  } elseif ($_GET['alert'] == 2) {
    echo "<div class='alert alert-success' role='alert'>
            <strong>Sukses!</strong> Data pegawai berhasil disimpan.
          </div>";
  } elseif ($_GET['alert'] == 3) {
    echo "<div class='alert alert-success' role='alert'>
            <strong>Sukses!</strong> Data pegawai berhasil diubah.
          </div>";
  } elseif ($_GET['alert'] == 4) {
    echo "<div class='alert alert-success' role='alert'>
            <strong>Sukses!</strong> Data pegawai berhasil dihapus.
          </div>";
  }
  ?>

	<div class="container">
		<table class="table table-striped">
			<tr>
				<td><label class="form-label"><strong>Kode Staff</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $kode_staff ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Nama Staff</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $nama_staff ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Tanggal Rekrut</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $tanggal_rekrut ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Alamat</label></strong></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $alamat ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Tempat Lahir</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $tempat_lahir ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Tanggal Lahir</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $tanggal_lahir ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Kontak</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $kontak ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Jabatan</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $jabatan ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Gaji Pokok</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $gaji_pokok ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Jenis Bonus</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $keterangan ; ?></label></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Nominal Bonus</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $total_bonus ; ?></label></td>
			</tr>
			<tr>
			<tr>
				<td><label class="form-label"><strong>Total Gaji</strong></label></td>
				<td>:</td>
				<td><label class="form-label"><?php echo $total_gaji ; ?></label></td>
			</tr>
				<td></td>
				<td></td>
				<td>
					<a href='?page=ubah&id=<?php echo $kode_staff ; ?>' class='btn btn-primary'>Ubah Data</a>
					<a href="index.php" class="btn btn-default btn-reset">Kembali</a>
  				</td>
			</tr>
		</table>
	</div>
</div>