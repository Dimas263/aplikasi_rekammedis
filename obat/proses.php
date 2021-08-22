<?php 
require_once "../_config/config.php";
require "../_assets/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $kode = trim(mysqli_real_escape_string($con, $_POST['kode']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    $dosis = trim(mysqli_real_escape_string($con, $_POST['dosis']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $stok = trim(mysqli_real_escape_string($con, $_POST['stok']));
    $expired = trim(mysqli_real_escape_string($con, $_POST['expired']));
    mysqli_query($con, "INSERT INTO tb_obat (id_obat, kode_obat, nama_obat, ket_obat, dosis, jenis_obat, stock_obat, tgl_kadaluarsa) values ('$uuid','$kode', '$nama','$ket','$dosis', '$jenis', '$stok', '$expired')") or die (mysqli_error($con));
    echo "<script>window.location='data ';</script>";
} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $kode = trim(mysqli_real_escape_string($con, $_POST['kode']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
    $dosis = trim(mysqli_real_escape_string($con, $_POST['dosis']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $stok = trim(mysqli_real_escape_string($con, $_POST['stok']));
    $expired = trim(mysqli_real_escape_string($con, $_POST['expired']));
    mysqli_query($con, "UPDATE tb_obat SET kode_obat='$kode', nama_obat='$nama', ket_obat='$ket' , dosis='$dosis' , jenis_obat='$jenis' , stock_obat='$stok' , tgl_kadaluarsa='$expired' WHERE id_obat='$id'") or die (mysqli_error($con));
    echo "<script>window.location='data ';</script>";
    
}
?>