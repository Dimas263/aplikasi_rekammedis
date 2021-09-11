<?php 
require_once "../_config/config.php";
require "../_assets/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $nama_dokter = trim(mysqli_real_escape_string($con, $_POST['nama_dokter']));
    $spesialis = trim(mysqli_real_escape_string($con, $_POST['spesialis']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $senin_awal = trim(mysqli_real_escape_string($con, $_POST['senin_awal']));
    $senin_akhir = trim(mysqli_real_escape_string($con, $_POST['senin_akhir']));
    $selasa_awal = trim(mysqli_real_escape_string($con, $_POST['selasa_awal']));
    $selasa_akhir = trim(mysqli_real_escape_string($con, $_POST['selasa_akhir']));
    $rabu_awal = trim(mysqli_real_escape_string($con, $_POST['rabu_awal']));
    $rabu_akhir = trim(mysqli_real_escape_string($con, $_POST['rabu_akhir']));
    $kamis_awal = trim(mysqli_real_escape_string($con, $_POST['kamis_awal']));
    $kamis_akhir = trim(mysqli_real_escape_string($con, $_POST['kamis_akhir']));
    $jumat_awal = trim(mysqli_real_escape_string($con, $_POST['jumat_awal']));
    $jumat_akhir = trim(mysqli_real_escape_string($con, $_POST['jumat_akhir']));
    $sabtu_awal = trim(mysqli_real_escape_string($con, $_POST['sabtu_awal']));
    $sabtu_akhir = trim(mysqli_real_escape_string($con, $_POST['sabtu_akhir']));
    $minggu_awal = trim(mysqli_real_escape_string($con, $_POST['minggu_awal']));
    $minggu_akhir = trim(mysqli_real_escape_string($con, $_POST['minggu_akhir']));
    $senin = "$senin_awal - $senin_akhir";
    $selasa = "$selasa_awal - $selasa_akhir";
    $rabu = "$rabu_awal - $rabu_akhir";
    $kamis = "$kamis_awal - $kamis_akhir";
    $jumat = "$jumat_awal - $jumat_akhir";
    $sabtu = "$sabtu_awal - $sabtu_akhir";
    $minggu = "$minggu_awal - $minggu_akhir";
    mysqli_query($con, "INSERT INTO tb_dokter (id_dokter, nama_dokter, spesialis, alamat, no_telp, email, senin, selasa, rabu, kamis, jumat, sabtu, minggu) values ('$uuid','$nama_dokter', '$spesialis','$alamat','$no_telp', '$email', '$senin','$selasa','$rabu','$kamis','$jumat','$sabtu','$minggu')") or die (mysqli_error($con));
    echo "<script>window.location='data ';</script>";

} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_dokter = trim(mysqli_real_escape_string($con, $_POST['nama_dokter']));
    $spesialis = trim(mysqli_real_escape_string($con, $_POST['spesialis']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $email = trim(mysqli_real_escape_string($con, $_POST['email']));
    $senin_awal = trim(mysqli_real_escape_string($con, $_POST['senin_awal']));
    $senin_akhir = trim(mysqli_real_escape_string($con, $_POST['senin_akhir']));
    $selasa_awal = trim(mysqli_real_escape_string($con, $_POST['selasa_awal']));
    $selasa_akhir = trim(mysqli_real_escape_string($con, $_POST['selasa_akhir']));
    $rabu_awal = trim(mysqli_real_escape_string($con, $_POST['rabu_awal']));
    $rabu_akhir = trim(mysqli_real_escape_string($con, $_POST['rabu_akhir']));
    $kamis_awal = trim(mysqli_real_escape_string($con, $_POST['kamis_awal']));
    $kamis_akhir = trim(mysqli_real_escape_string($con, $_POST['kamis_akhir']));
    $jumat_awal = trim(mysqli_real_escape_string($con, $_POST['jumat_awal']));
    $jumat_akhir = trim(mysqli_real_escape_string($con, $_POST['jumat_akhir']));
    $sabtu_awal = trim(mysqli_real_escape_string($con, $_POST['sabtu_awal']));
    $sabtu_akhir = trim(mysqli_real_escape_string($con, $_POST['sabtu_akhir']));
    $minggu_awal = trim(mysqli_real_escape_string($con, $_POST['minggu_awal']));
    $minggu_akhir = trim(mysqli_real_escape_string($con, $_POST['minggu_akhir']));
    $senin = "$senin_awal - $senin_akhir";
    $selasa = "$selasa_awal - $selasa_akhir";
    $rabu = "$rabu_awal - $rabu_akhir";
    $kamis = "$kamis_awal - $kamis_akhir";
    $jumat = "$jumat_awal - $jumat_akhir";
    $sabtu = "$sabtu_awal - $sabtu_akhir";
    $minggu = "$minggu_awal - $minggu_akhir";
    mysqli_query($con, "UPDATE tb_dokter SET nama_dokter='$nama_dokter', spesialis='$spesialis',alamat='$alamat',no_telp='$no_telp', email='$email', senin='$senin',selasa='$selasa',rabu='$rabu',kamis='$kamis',jumat='$jumat',sabtu='$sabtu',minggu='$minggu' WHERE id_dokter='$id'") or die (mysqli_error($con));
    echo "<script>window.location='data ';</script>";
}
?>