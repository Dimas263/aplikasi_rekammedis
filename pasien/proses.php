<?php 
require_once "../_config/config.php";
require "../_assets/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $nama_pasien = trim(mysqli_real_escape_string($con, $_POST['nama_pasien']));
    $marga = trim(mysqli_real_escape_string($con, $_POST['marga']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $kelurahan = trim(mysqli_real_escape_string($con, $_POST['kelurahan']));
    $kecamatan = trim(mysqli_real_escape_string($con, $_POST['kecamatan']));
    $kota = trim(mysqli_real_escape_string($con, $_POST['kota']));
    $provinsi = trim(mysqli_real_escape_string($con, $_POST['provinsi']));
    $kode_pos = trim(mysqli_real_escape_string($con, $_POST['kode_pos']));
    $no_ktp = trim(mysqli_real_escape_string($con, $_POST['no_ktp']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $no_telprumah = trim(mysqli_real_escape_string($con, $_POST['no_telprumah']));
    $no_hp = trim(mysqli_real_escape_string($con, $_POST['no_hp']));
    $tempat_lahir = trim(mysqli_real_escape_string($con, $_POST['tempat_lahir']));
    $tgl_lahir = trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
    $jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin']));
    $agama = trim(mysqli_real_escape_string($con, $_POST['agama']));
    $golongan_darah = trim(mysqli_real_escape_string($con, $_POST['golongan_darah']));
    $status_pasien = trim(mysqli_real_escape_string($con, $_POST['status_pasien']));
    $jenis_pasien = trim(mysqli_real_escape_string($con, $_POST['jenis_pasien']));
    $nama_darurat = trim(mysqli_real_escape_string($con, $_POST['nama_darurat']));
    $alamat_darurat = trim(mysqli_real_escape_string($con, $_POST['alamat_darurat']));
    $hubungan_darurat = trim(mysqli_real_escape_string($con, $_POST['hubungan_darurat']));
    $no_telprumah_darurat = trim(mysqli_real_escape_string($con, $_POST['no_telprumah_darurat']));
    $no_hp_darurat = trim(mysqli_real_escape_string($con, $_POST['no_hp_darurat']));
    $sumber_informasi = trim(mysqli_real_escape_string($con, $_POST['sumber_informasi']));
    $sql_cek_identitas = mysqli_query($con, " SELECT * FROM tb_pasien WHERE no_ktp = '$no_ktp'") or die (mysqli_error($con));
    if(mysqli_num_rows($sql_cek_identitas) > 0){
        echo "<script>alert('Nomor Identitas sudah pernah diinput!'); window.location='add ';</script>";
    } else {
        mysqli_query($con, "INSERT INTO tb_pasien (id_pasien, nama_pasien, marga, alamat, kelurahan, kecamatan, kota, provinsi, kode_pos, no_ktp, email, no_telprumah, no_hp, tempat_lahir, tgl_lahir, jenis_kelamin, agama, golongan_darah, status_pasien, jenis_pasien, nama_darurat, alamat_darurat, hubungan_darurat, no_telprumah_darurat, no_hp_darurat, sumber_informasi) values ('$uuid','$nama_pasien','$marga','$alamat','$kelurahan','$kecamatan','$kota','$provinsi','$kode_pos','$no_ktp','$email','$no_telprumah','$no_hp','$tempat_lahir','$tgl_lahir','$jenis_kelamin','$agama','$golongan_darah','$status_pasien','$jenis_pasien','$nama_darurat','$alamat_darurat','$hubungan_darurat','$no_telprumah_darurat','$no_hp_darurat','$sumber_informasi')") or die (mysqli_error($con));
        echo "<script>window.location='data ';</script>";
    }

    
} else if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama_pasien = trim(mysqli_real_escape_string($con, $_POST['nama_pasien']));
    $marga = trim(mysqli_real_escape_string($con, $_POST['marga']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $kelurahan = trim(mysqli_real_escape_string($con, $_POST['kelurahan']));
    $kecamatan = trim(mysqli_real_escape_string($con, $_POST['kecamatan']));
    $kota = trim(mysqli_real_escape_string($con, $_POST['kota']));
    $provinsi = trim(mysqli_real_escape_string($con, $_POST['provinsi']));
    $kode_pos = trim(mysqli_real_escape_string($con, $_POST['kode_pos']));
    $no_ktp = trim(mysqli_real_escape_string($con, $_POST['no_ktp']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $no_telprumah = trim(mysqli_real_escape_string($con, $_POST['no_telprumah']));
    $no_hp = trim(mysqli_real_escape_string($con, $_POST['no_hp']));
    $tempat_lahir = trim(mysqli_real_escape_string($con, $_POST['tempat_lahir']));
    $tgl_lahir = trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
    $jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin']));
    $agama = trim(mysqli_real_escape_string($con, $_POST['agama']));
    $golongan_darah = trim(mysqli_real_escape_string($con, $_POST['golongan_darah']));
    $status_pasien = trim(mysqli_real_escape_string($con, $_POST['status_pasien']));
    $jenis_pasien = trim(mysqli_real_escape_string($con, $_POST['jenis_pasien']));
    $nama_darurat = trim(mysqli_real_escape_string($con, $_POST['nama_darurat']));
    $alamat_darurat = trim(mysqli_real_escape_string($con, $_POST['alamat_darurat']));
    $hubungan_darurat = trim(mysqli_real_escape_string($con, $_POST['hubungan_darurat']));
    $no_telprumah_darurat = trim(mysqli_real_escape_string($con, $_POST['no_telprumah_darurat']));
    $no_hp_darurat = trim(mysqli_real_escape_string($con, $_POST['no_hp_darurat']));
    $sumber_informasi = trim(mysqli_real_escape_string($con, $_POST['sumber_informasi']));
    $sql_cek_identitas = mysqli_query($con, " SELECT * FROM tb_pasien WHERE no_ktp = '$no_ktp'") or die (mysqli_error($con));
    if(mysqli_num_rows($sql_cek_identitas) > 0){
        echo "<script>alert('Nomor Identitas sudah pernah diinput!'); window.location='add ';</script>";
    } else {
        mysqli_query($con, "UPDATE tb_pasien SET nama_pasien='$nama_pasien',marga='$marga',alamat='$alamat',kelurahan='$kelurahan',kecamatan='$kecamatan',kota='$kota',provinsi='$provinsi',kode_pos='$kode_pos',no_ktp='$no_ktp',email='$email',no_telprumah='$no_telprumah',no_hp='$no_hp',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',golongan_darah='$golongan_darah',status_pasien='$status_pasien',jenis_pasien='$jenis_pasien',nama_darurat='$nama_darurat',alamat_darurat='$alamat_darurat',hubungan_darurat='$hubungan_darurat',no_telprumah_darurat='$no_telprumah_darurat',no_hp_darurat='$no_hp_darurat',sumber_informasi='$sumber_informasi' WHERE id_pasien='$id'") or die (mysqli_error($con));
        echo "<script>window.location='data ';</script>";
    }

} else if(isset($_POST['import'])){
    $file = $_FILES['file']['name'];
    $ekstensi = explode(".",$file);
    $file_name = "file-".round(microtime(true)).".".end($ekstensi);
    $sumber = $_FILES['file']['tmp_name'];
    $target_dir = "../_file/";
    $target_file = $target_dir.$file_name;
    move_uploaded_file($sumber, $target_file);

    $obj = PHPExcel_IOFactory::load($target_file);
    $all_data = $obj->getActiveSheet()->toArray(null,true,true,true);
    $sql = "INSERT INTO tb_pasien (id_pasien, nama_pasien, marga, alamat, kelurahan, kecamatan, kota, provinsi, kode_pos, no_ktp, email, no_telprumah, no_hp, tempat_lahir, tgl_lahir, jenis_kelamin, agama, golongan_darah, status_pasien, jenis_pasien, nama_darurat, alamat_darurat, hubungan_darurat, no_telprumah_darurat, no_hp_darurat, sumber_informasi) VALUES";
    for ($i=3; $i <= count($all_data); $i++){
        $uuid = Uuid::uuid4()->toString();
        $nama_pasien = $all_data[$i]['A'];
        $marga = $all_data[$i]['B'];
        $alamat = $all_data[$i]['C'];
        $kelurahan = $all_data[$i]['D'];
        $kecamatan = $all_data[$i]['E'];
        $kota = $all_data[$i]['F'];
        $provinsi = $all_data[$i]['G'];
        $kode_pos = $all_data[$i]['H'];
        $no_ktp = $all_data[$i]['I'];
        $email = $all_data[$i]['J'];
        $no_telprumah = $all_data[$i]['K'];
        $no_hp = $all_data[$i]['L'];
        $tempat_lahir = $all_data[$i]['M'];
        $tgl_lahir = $all_data[$i]['N'];
        $jenis_kelamin = $all_data[$i]['O'];
        $agama = $all_data[$i]['P'];
        $golongan_darah = $all_data[$i]['Q'];
        $status_pasien = $all_data[$i]['R'];
        $jenis_pasien = $all_data[$i]['S'];
        $nama_darurat = $all_data[$i]['T'];
        $alamat_darurat = $all_data[$i]['U'];
        $hubungan_darurat = $all_data[$i]['V'];
        $no_telprumah_darurat = $all_data[$i]['W'];
        $no_hp_darurat = $all_data[$i]['X'];
        $sumber_informasi = $all_data[$i]['Y'];
        $sql .= "('$uuid','$nama_pasien', '$marga', '$alamat', '$kelurahan', '$kecamatan', '$kota', '$provinsi', '$kode_pos', '$no_ktp', '$email', '$no_telprumah', '$no_hp', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$agama', '$golongan_darah', '$status_pasien', '$jenis_pasien', '$nama_darurat', '$alamat_darurat', '$hubungan_darurat', '$no_telprumah_darurat', '$no_hp_darurat', '$sumber_informasi')";
    }
    $SQL = substr($sql, 0, -1);
    //echo $sql
    mysqli_query($con, $sql) or die (mysqli_error($con));
    
    unlink($target_file);
    echo "<script>window.location='data ';</script>";
    
}

?>