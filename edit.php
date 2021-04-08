<div class="card-header">
	<h1>Ubah Data Pegawai</h1>
</div>

<?php
      $kode_staff = $_GET['id'];

      if (isset($kode_staff)) {
        require_once 'pegawai.php';
        $pegawai = new pegawai();
        $data = $pegawai->get_pegawai($kode_staff);
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
		// 
		$id_jabatan		= $data['id_jabatan'];	
		$jabatan		= $data['jabatan'];

      }
      ?>

<div class="card-body">
	<form action="proses-update.php" method="POST">
		<table class="table table-borderless">
			<tr>
				<td><label class="form-label"><strong>Kode Staff</strong></label></td>
				<td>:</td>
				<td><input name="kode_staff" type="text" value="<?php echo $kode_staff ; ?>" class="form-control" maxlength="10" required></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Nama Staff</strong></label></td>
				<td>:</td>
				<td><input name="nama_staff" type="text" value="<?php echo $nama_staff ; ?>" class="form-control" maxlength="25" required></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Tanggal Rekrut</strong></label></td>
				<td>:</td>
				<td><input name="tanggal_rekrut" type="date" value="<?php echo $tanggal_rekrut ; ?>" class="form-control" required></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Alamat</strong></label></td>
				<td>:</td>
				<td><textarea name="alamat" class="form-control" maxlength="50" required><?php echo $alamat ; ?></textarea></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Tempat Lahir</strong></label></td>
				<td>:</td>
				<td><input name="tempat_lahir" type="text" value="<?php echo $tempat_lahir ; ?>" class="form-control" maxlength="25" required></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Tanggal Lahir</strong></label></td>
				<td>:</td>
				<td><input name="tanggal_lahir" type="date" value="<?php echo $tanggal_lahir ; ?>" class="form-control" required></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Kontak</strong></label></td>
				<td>:</td>
				<td><input name="kontak" type="tel" value="<?php echo $kontak ; ?>"class="form-control" maxlength="13" required></td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Jabatan</strong></label></td>
				<td>:</td>
				<td>
					<select name="id_jabatan" class="form-select" aria-label="Default select example">
					  <option value="<?php echo $id_jabatan ; ?>" selected><?php echo $jabatan ; ?></option>
					  <option value="1">Sales</option>
					  <option value="2">Admin</option>
					  <option value="3">Kasir</option>
					  <option value="4">Satpam</option>

					</select>
				</td>
			</tr>
			<tr>
				<td><label class="form-label"><strong>Jenis Bonus</strong></label></td>
				<td>:</td>
				<td>
					<select name="id_bonus" class="form-select" aria-label="Default select example">
					  <option value="<?php echo $id_bonus ; ?>" selected><?php echo $keterangan ; ?></option>
					  <option value="1">Bonus Lembur</option>
					  <option value="2">Tunjangan Hari Raya</option>
					  <option value="3">Bonus Tahunan</option>
					  <option value="4">Bonus Referal</option>
					  <option value="5">Bonus Penjualan</option>
					  <option value="6">Bonus Liburan</option>
					  <option value="7">Bonus Prestasi</option>
					</select>
				</td>
			</tr>
			<tr class='text-center'>
				<td colspan="3">
					<input type="submit" id="submit" onclick="return confirm('Anda yakin ingin menyimpan data ini?');"class="btn btn-success btn-submit" name="simpan" value="Simpan">
  					<a href="index.php?page=detail&id=<?php echo $kode_staff ?>" onclick="return confirm('Anda yakin ingin membatalkan perubahan?');" class="btn btn-default btn-reset">Batal</a>
  				</td>
			</tr>
		</table>
  </form>
</div>