<div class="card-header">
	<h1>Data Pegawai</h1>
</div>
<div class="card-body">
<!-- ALERT -->
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
<!-- ALERT -->
	<div class="mb-3">
		<a href="?page=tambah" class="btn btn-primary">Tambah Data</a>
	</div>
	<table class="table table-responsive table-striped">
	  <thead class="table-dark">
	    <tr class='text-center'>
	      <th scope="col">#</th>
	      <th scope="col">Kode Staff</th>
	      <th scope="col">Nama Staff</th>
	      <th scope="col">Tanggal Rekrut</th>
	      <th scope="col">Kontak</th>
	      <th scope="col">Jabatan</th>
	      <th scope="col" colspan="2">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
	  	require_once 'pegawai.php';
	  	$pegawai 	= new pegawai();
	  	$result		= $pegawai->view();
	  	$no 		= 1;

	  	if(!empty($result)) {
	  		foreach($result as $data){
				$kode_staff		= $data['kode_staff'];
				$nama_staff		= $data['nama_staff'];	
				//
				$tanggal_r      = $data['tanggal_rekrut'];
                $tgl            = explode('-',$tanggal_r);
                //
                $tanggal_rekrut = $tgl[2]."-".$tgl[1]."-".$tgl[0];
				// 
				$kontak			= $data['kontak'];	
				$jabatan		= $data['jabatan'];
	    echo "
	    <tr class='text-center'>
	      <td>$no</td>
	      <td>$kode_staff</td>
	      <td>$nama_staff</td>
	      <td>$tanggal_rekrut</td>
	      <td>$kontak</td>
	      <td>$jabatan</td>
	      <td><a href='?page=detail&id=$kode_staff' class='btn btn-primary btn-sm'>Lihat Detail</a>
	      "; ?>

	      <a href="proses-delete.php?id=<?php echo $kode_staff ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');" class='btn btn-danger btn-sm'>Hapus Data</a></td>
	    </tr>
	    <?php 
	    $no++;
	  		}
	  	} 
	    ?>	    
	  </tbody>
	</table>

</div>

