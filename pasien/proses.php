<?php 
require_once "../_config/config.php";
require "../_assets/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $identitas = trim(mysqli_real_escape_string($con, $_POST['identitas']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jk = trim(mysqli_real_escape_string($con, $_POST['jk']));
    $bb = trim(mysqli_real_escape_string($con, $_POST['bb']));
    $tb = trim(mysqli_real_escape_string($con, $_POST['tb']));
    $usia = trim(mysqli_real_escape_string($con, $_POST['usia']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $sql_cek_identitas = mysqli_query($con, " SELECT * FROM tb_pasien WHERE nama_identitas = '$identitas'") or die (mysqli_error($con));
    if(mysqli_num_rows($sql_cek_identitas) > 0){
        echo "<script>alert('Nomor Identitas sudah pernah diinput!'); window.location='add ';</script>";
    } else {
        mysqli_query($con, "INSERT INTO tb_pasien (id_pasien, nama_identitas, nama_pasien, jenis_kelamin, berat_badan, tinggi_badan, usia, jenis_pasien, no_telp, email, alamat) values ('$uuid','$identitas', '$nama','$jk','$bb', '$tb', '$usia', '$jenis', '$no_telp','$email', '$alamat')") or die (mysqli_error($con));
        echo "<script>window.location='data ';</script>";
    }

    
} else if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $identitas = trim(mysqli_real_escape_string($con, $_POST['identitas']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $bb = trim(mysqli_real_escape_string($con, $_POST['bb']));
    $tb = trim(mysqli_real_escape_string($con, $_POST['tb']));
    $usia = trim(mysqli_real_escape_string($con, $_POST['usia']));
    $jk = trim(mysqli_real_escape_string($con, $_POST['jk']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $sql_cek_identitas = mysqli_query($con, " SELECT * FROM tb_pasien WHERE nama_identitas = '$identitas' AND id_pasien != '$id'") or die (mysqli_error($con));
    if(mysqli_num_rows($sql_cek_identitas) > 0){
        echo "<script>alert('Nomor Identitas sudah pernah diinput!'); window.location='add ';</script>";
    } else {
        mysqli_query($con, "UPDATE tb_pasien SET nama_identitas='$identitas', nama_pasien='$nama', jenis_kelamin='$jk', berat_badan='$bb', tinggi_badan='$tb', usia='$usia', jenis_pasien='$jenis', no_telp='$no_telp', email='$email', alamat='$alamat' WHERE id_pasien='$id'") or die (mysqli_error($con));
        echo "<script>window.location='data ';</script>";
    }

    
} else if (isset($_POST['multiple_edit'])){
    for ($i=0; $i<count($_POST['id']); $i++){
        $id = $_POST['id'][$i];
        $identitas = $_POST['identitas'][$i];
        $nama = $_POST['nama'][$i];
        $jenis = $_POST['jenis'][$i];
        $bb = $_POST['bb'][$i];
        $tb = $_POST['tb'][$i];
        $usia = $_POST['usia'][$i];
        $jk = $_POST['jk'][$i];
        $no_telp = $_POST['no_telp'][$i];
        $email = $_POST['email'][$i];
        $alamat = $_POST['alamat'][$i];
        $sql_cek_identitas = mysqli_query($con, " SELECT * FROM tb_pasien WHERE nama_identitas = '$identitas' AND id_pasien != '$id'") or die (mysqli_error($con));
        $sql= mysqli_query($con, "UPDATE tb_pasien SET nama_identitas='$identitas', nama_pasien='$nama', jenis_kelamin='$jk', berat_badan='$bb', tinggi_badan='$tb', usia='$usia', jenis_pasien='$jenis', no_telp='$no_telp', email='$email', alamat='$alamat' WHERE id_pasien='$id'") or die (mysqli_error($con));
    }
    if($sql){
        echo "<script>alert('".$total." data berhasil diupdate'); window.location='data ';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data, silahkan coba lagi'); window.location='data ';</script>";
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
    $sql = "INSERT INTO tb_pasien (id_pasien, nama_identitas, nama_pasien, jenis_kelamin, berat_badan, tinggi_badan, usia, jenis_pasien, no_telp, email, alamat) VALUES";
    for ($i=3; $i <= count($all_data); $i++){
        $uuid = Uuid::uuid4()->toString();
        $identitas = $all_data[$i]['A'];
        $nama = $all_data[$i]['B'];
        $jk = $all_data[$i]['C'];
        $bb = $all_data[$i]['D'];
        $tb = $all_data[$i]['E'];
        $usia = $all_data[$i]['F'];
        $jenis = $all_data[$i]['G'];
        $no_telp = $all_data[$i]['H'];
        $email = $all_data[$i]['I'];
        $alamat = $all_data[$i]['J'];
        $sql .= "('$uuid','$identitas', '$nama','$jk','$bb', '$tb', '$usia', '$jenis', '$no_telp','$email', '$alamat')";
    }
    $SQL = substr($sql, 0, -1);
    //echo $sql
    mysqli_query($con, $sql) or die (mysqli_error($con));
    
    unlink($target_file);
    echo "<script>window.location='data ';</script>";
    
}

?>