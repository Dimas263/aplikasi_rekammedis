<?php
require_once "../_config/config.php";
require "../_assets/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])){
    $total = $_POST['total'];
    for ($i=1; $i<=$total; $i++){
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama-'.$i]));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat-'.$i]));
    $jam = trim(mysqli_real_escape_string($con, $_POST['jam-'].$i));
    $sql = mysqli_query($con, "INSERT INTO tb_klinik (id_klinik, nama_klinik, alamat_klinik, jam_operasi) values ('$uuid','$nama','$alamat','$jam')") or die (mysqli_error($con));
    }
    if($sql){
        echo "<script>alert('".$total." data berhasil ditambahkan'); window.location='data ';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data, silahkan coba lagi'); window.location='generate ';</script>";
    }
} else if (isset($_POST['edit'])){
    for ($i=0; $i<count($_POST['id']); $i++){
        $id = $_POST['id'][$i];
        $nama = $_POST['nama'][$i];
        $alamat = $_POST['alamat'][$i];
        $jam = $_POST['jam'][$i];
        mysqli_query($con, "UPDATE tb_klinik SET nama_klinik='$nama', alamat_klinik='$alamat', jam_operasi='$jam' WHERE id_klinik = '$id'") or die (mysqli_error($con));
    }
    echo "<script>alert('Data berhasil diupdate'); window.location='data ';</script>";
}
?>