<?php 
require_once "../_config/config.php";
require "../_assets/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $jadwal = trim(mysqli_real_escape_string($con, $_POST['jadwal']));
    mysqli_query($con, "INSERT INTO tb_suster (id_perawat, nama_suster, alamat, no_telp, email, jadwal_jaga) values ('$uuid','$nama', '$alamat','$no_telp', '$email', '$jadwal')") or die (mysqli_error($con));
    echo "<script>window.location='data ';</script>";

} else if (isset($_POST['multiple_edit'])){
    for ($i=0; $i<count($_POST['id']); $i++){
        $id = $_POST['id'][$i];
        $nama = $_POST['nama'][$i];
        $alamat = $_POST['alamat'][$i];
        $no_telp = $_POST['no_telp'][$i];
        $email = $_POST['email'][$i];
        $jadwal = $_POST['jadwal'][$i];
        $sql= mysqli_query($con, "UPDATE tb_suster SET nama_suster='$nama', alamat='$alamat', no_telp='$no_telp', email='$email', jadwal_jaga='$jadwal' WHERE id_perawat='$id'") or die (mysqli_error($con));
    }
    if($sql){
        echo "<script>alert('".$total." data berhasil diupdate'); window.location='data ';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data, silahkan coba lagi'); window.location='data ';</script>";
    }
    

} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $jadwal = trim(mysqli_real_escape_string($con, $_POST['jadwal']));
    mysqli_query($con, "UPDATE tb_suster SET nama_suster='$nama', alamat='$alamat', no_telp='$no_telp', email='$email', jadwal_jaga='$jadwal' WHERE id_perawat='$id'") or die (mysqli_error($con));
    echo "<script>window.location='data ';</script>";
}
?>