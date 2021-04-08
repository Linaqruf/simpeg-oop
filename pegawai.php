<?php 
interface crud {
    function view();
    function insert($kode_staff,$nama_staff,$tanggal_rekrut,$alamat,$tempat_lahir,$tanggal_lahir,$kontak,$id_bonus,$id_jabatan);
    function get_pegawai($kode_staff);
    function update($kode_staff,$nama_staff,$tanggal_rekrut,$alamat,$tempat_lahir,$tanggal_lahir,$kontak,$id_bonus,$id_jabatan);
    function delete($kode_staff);
}
class pegawai implements crud {
    function view(){
        require_once "config.php";
        $db     = new database();
        $mysqli = $db->connect();
        $sql    = "SELECT * FROM ((staff
                        INNER JOIN jabatan ON staff.id_jabatan = jabatan.id_jabatan)
                        INNER JOIN bonus ON staff.id_bonus = bonus.id_bonus) 
                    ORDER BY kode_staff DESC";
        $result = $mysqli->query($sql);
        while ($data = $result->fetch_assoc()) {
            $hasil[] = $data;
        }
        $mysqli->close();
        return $hasil;
    }
    function insert($kode_staff,$nama_staff,$tanggal_rekrut,$alamat,$tempat_lahir,$tanggal_lahir,$kontak,$id_bonus,$id_jabatan){
    	require_once "config.php";
    	$db 	= new database();
    	$mysqli = $db->connect();
        $kode_staff     = $mysqli->real_escape_string($kode_staff);
        $nama_staff     = $mysqli->real_escape_string($nama_staff);
        $alamat         = $mysqli->real_escape_string($alamat);
        $tempat_lahir   = $mysqli->real_escape_string($tempat_lahir);
        $kontak         = $mysqli->real_escape_string($kontak);
    	$sql	= "INSERT INTO staff (kode_staff,nama_staff,tanggal_rekrut,alamat,tempat_lahir,tanggal_lahir,kontak,id_bonus,id_jabatan) VALUES ('$kode_staff','$nama_staff','$tanggal_rekrut','$alamat','$tempat_lahir','$tanggal_lahir','$kontak','$id_bonus','$id_jabatan')";
    	$result = $mysqli->query($sql);
    	
    	if($result){
            header("Location: index.php?alert=2");
        }
        else{
            header("Location: index.php?alert=1");
        }

        $mysqli->close();
    }
    function get_pegawai($kode_staff){
        require_once "config.php";
        $db = new database();
        $mysqli = $db->connect();
        $sql = "SELECT * FROM ((staff
                        INNER JOIN jabatan ON staff.id_jabatan = jabatan.id_jabatan)
                        INNER JOIN bonus ON staff.id_bonus = bonus.id_bonus)
                 WHERE kode_staff='$kode_staff'";

        $result = $mysqli->query($sql);
        $data   = $result->fetch_assoc();

        $mysqli->close();
        
        return $data;

    }
    function update($kode_staff,$nama_staff,$tanggal_rekrut,$alamat,$tempat_lahir,$tanggal_lahir,$kontak,$id_bonus,$id_jabatan){
    	require_once "config.php";
    	$db 	= new database();
    	$mysqli = $db->connect();

        $nama_staff     = $mysqli->real_escape_string($nama_staff);
        $alamat         = $mysqli->real_escape_string($alamat);
        $tempat_lahir   = $mysqli->real_escape_string($tempat_lahir);
        $kontak         = $mysqli->real_escape_string($kontak);
    	$sql	        = "UPDATE staff SET nama_staff		= '$nama_staff',
                							tanggal_rekrut	= '$tanggal_rekrut',
                							alamat			= '$alamat',
                							tempat_lahir	= '$tempat_lahir',
                							tanggal_lahir	= '$tanggal_lahir',
                							kontak			= '$kontak',
                							id_bonus		= '$id_bonus',
                							id_jabatan		= '$id_jabatan'
                				    WHERE kode_staff		= '$kode_staff'";
        $result = $mysqli->query($sql);

        if($result){
            header("Location: index.php?page=detail&id=$kode_staff&alert=3");
        }
        else{
            header("Location: index.php?page=detail&id=$kode_staff&alert=1");
        }
        $mysqli->close();
    }
    function delete($kode_staff){
    	require_once "config.php";
        $db     = new database();
        $mysqli = $db->connect();
        $sql    = "DELETE FROM staff WHERE kode_staff = '$kode_staff'";
        $result = $mysqli->query($sql);

        if($result){
            header("Location: index.php?alert=4");
        }
        else{
            header("Location: index.php?alert=1");
        }
        $mysqli->close();
    }
}

?>