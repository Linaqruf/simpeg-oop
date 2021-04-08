<div class="card-header">
	<h1>Tabel Penggajian</h1>
</div>
<div class="card-body">
	<table class="table table-responsive table-striped">
	  <thead class="table-dark">
	    <tr class='text-center'>
	      <th scope="col">#</th>
	      <th scope="col">Kode Staff</th>
	      <th scope="col">Nama Staff</th>
	      <th scope="col">Jabatan</th>
	      <th scope="col">Gaji Pokok</th>
	      <th scope="col">Bonus</th>
	      <th scope="col">Keterangan</th>
	      <th scope="col">Total Gaji</th>
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
	    echo "
	    <tr class='text-center'>
	      <td>$no</td>
	      <td>$kode_staff</td>
	      <td>$nama_staff</td>
	      <td>$jabatan</td>
	      <td>$gaji_pokok</td>
	      <td>$total_bonus</td>
	      <td>$keterangan</td>
	      <td>$total_gaji</td>
	      "
	      ?>
	      </td>
		</tr>
	    <?php
	    $no++;
	  		}
	  	} 
	    ?>
	  </tbody>
	</table>

</div>

