<?php 
require_once "../_config/config.php";
require "../_assets/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $nama_obat = trim(mysqli_real_escape_string($con, $_POST['nama_obat']));
    $keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $dosis = trim(mysqli_real_escape_string($con, $_POST['dosis']));
    $satuan = trim(mysqli_real_escape_string($con, $_POST['satuan']));
    $stok = trim(mysqli_real_escape_string($con, $_POST['stok']));
    $total = "$dosis $satuan";
    $kadaluarsa= trim(mysqli_real_escape_string($con, $_POST['kadaluarsa']));
    mysqli_query($con, "INSERT INTO tb_obat (id_obat, nama_obat, keterangan, jenis, dosis, stok, kadaluarsa) values ('$uuid','$nama_obat', '$keterangan','$jenis','$total','$stok', '$kadaluarsa')") or die (mysqli_error($con));
    echo "<script>window.location='data ';</script>";

} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_obat = trim(mysqli_real_escape_string($con, $_POST['nama_obat']));
    $keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
    $jenis = trim(mysqli_real_escape_string($con, $_POST['jenis']));
    $dosis = trim(mysqli_real_escape_string($con, $_POST['dosis']));
    $satuan = trim(mysqli_real_escape_string($con, $_POST['satuan']));
    $stok = trim(mysqli_real_escape_string($con, $_POST['stok']));
    $total = "$dosis $satuan";
    $kadaluarsa= trim(mysqli_real_escape_string($con, $_POST['kadaluarsa']));
    mysqli_query($con, "UPDATE tb_obat SET nama_obat='$nama_obat', keterangan='$keterangan',jenis='$jenis',dosis='$total',stok='$stok', kadaluarsa='$kadaluarsa' WHERE id_obat='$id'") or die (mysqli_error($con));
    echo "<script>window.location='data ';</script>";
    
}
?>