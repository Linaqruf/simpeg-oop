<div class="card-header">
	<h1>Tambah Data Pegawai</h1>
</div>
<div class="card-body">
	<form action="proses-create.php" method="POST">
		<table class="table table-borderless">
			<tr>
				<td><label class="form-label">Kode Staff</label></td>
				<td>:</td>
				<td><input name="kode_staff" type="text" class="form-control" maxlength="10" required></td>
			</tr>
			<tr>
				<td><label class="form-label">Nama Staff</label></td>
				<td>:</td>
				<td><input name="nama_staff" type="text" class="form-control" maxlength="25" required></td>
			</tr>
			<tr>
				<td><label class="form-label">Tanggal Rekrut</label></td>
				<td>:</td>
				<td><input name="tanggal_rekrut" type="date" class="form-control" required></td>
			</tr>
			<tr>
				<td><label class="form-label">Alamat</label></td>
				<td>:</td>
				<td><textarea name="alamat" class="form-control" maxlength="50" required></textarea></td>
			</tr>
			<tr>
				<td><label class="form-label">Tempat Lahir</label></td>
				<td>:</td>
				<td><input name="tempat_lahir" type="text" class="form-control" maxlength="25" required></td>
			</tr>
			<tr>
				<td><label class="form-label">Tanggal Lahir</label></td>
				<td>:</td>
				<td><input name="tanggal_lahir" type="date" class="form-control" required></td>
			</tr>
			<tr>
				<td><label class="form-label">Kontak</label></td>
				<td>:</td>
				<td><input name="kontak" type="tel" class="form-control" maxlength="13" required></td>
			</tr>
			<tr>
				<td><label class="form-label">Jabatan</label></td>
				<td>:</td>
				<td>
					<select name="id_jabatan" class="form-select" aria-label="Default select example">
					  <option selected>Masukkan Jabatan</option>
					  <option value="1">Sales</option>
					  <option value="2">Admin</option>
					  <option value="3">Kasir</option>
					  <option value="4">Satpam</option>

					</select>
				</td>
			</tr>
			<tr>
				<td><label class="form-label">Jenis Bonus</label></td>
				<td>:</td>
				<td>
					<select name="id_bonus" class="form-select" aria-label="Default select example">
					  <option selected>Masukkan Bonus</option>
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
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" onclick="return confirm('Anda yakin ingin menyimpan data ini?');"class="btn btn-success btn-submit" name="simpan" value="Simpan">
  					<a href="index.php" onclick="return confirm('Anda yakin ingin membatalkan perubahan?');" class="btn btn-default btn-reset">Batal</a>
  				</td>
			</tr>
		</table>
  </form>
</div>