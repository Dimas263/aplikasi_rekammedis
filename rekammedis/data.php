<?php
require_once "../_config/config.php";
include_once('../_header.php');
?>
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            Rekammedis
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="tab-content pb-3" id="v-pills-tabContent">
                <div class="col-md-12">
                    <div class="card my-3 no-b">
                        <div class="card-header white m-3">
                            <h6>Data Rekammedis</h6>
                        </div>
                        <div class="card-body">
                            <table class="table cell-vertical-align-middle  table-responsive mb-4">
                                <tbody>
                                <tr class="no-b">
                                    <td>
                                        <a href="add" type="button" class="btn btn-success btn-sm">Tambah Rekammedis</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table id="datatables-button" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pasien</th>
                                    <th>Keluhan</th>
                                    <th>Nama Dokter</th>
                                    <th>Nama Suster</th>
                                    <th>Diagnosa</th>
                                    <th>Poliklinik</th>
                                    <th>Data Obat</th>
                                    <th>Tanggal Periksa</th>
                                    <th><i class="glyphicon glyphicon-cog"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                $query = "SELECT * FROM tb_rekammedis 
                    INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien 
                    INNER JOIN tb_dokter ON tb_rekammedis.id_dokter= tb_dokter.id_dokter
                    INNER JOIN tb_klinik ON tb_rekammedis.id_klinik= tb_klinik.id_klinik";
                                $sql_rekammedis = mysqli_query($con, $query) or die (mysqli_error($con));
                                while($data = mysqli_fetch_array($sql_rekammedis)){ ?>
                                <tr>
                                    <td bgcolor="#083d77" style="color: #efeeee"><?=$no++ ?></td>
                                    <td bgcolor="#ffffff" style="color: #1e2425"><a href="details.php?id=<?=$data['id_rekammedis']?>" class="btn-link text-dark"><?=$data['nama_pasien']?></a></td>
                                    <td bgcolor="#ffffff" style="color: #1e2425"><?=$data['keluhan']?></td>
                                    <td bgcolor="#ffffff" style="color: #1e2425"><?=$data['nama_dokter']?></td>
                                    <td bgcolor="#ffffff" style="color: #1e2425">
                                        <?php
                                            $sql_suster = mysqli_query($con, "SELECT * FROM tb_rekammedis_suster JOIN tb_suster ON tb_rekammedis_suster.id_suster = tb_suster.id_perawat WHERE id_rekammedis = '$data[id_rekammedis]'") or die (mysqli_error($con));
                                            while ($data_suster = mysqli_fetch_array($sql_suster)){
                                                echo $data_suster['nama_suster']."<br>";
                                            }
                                            ?>
                                    </td>
                                    <td bgcolor="#ffffff" style="color: #1e2425"><?=$data['diagnosa']?></td>
                                    <td bgcolor="#ffffff" style="color: #1e2425"><?=$data['nama_klinik']?></td>
                                    <td bgcolor="#ffffff" style="color: #1e2425">
                                        <?php
                                            $sql_obat = mysqli_query($con, "SELECT * FROM tb_rekammedis_obat JOIN tb_obat ON tb_rekammedis_obat.id_obat = tb_obat.id_obat WHERE id_rekammedis = '$data[id_rekammedis]'") or die (mysqli_error($con));
                                            while ($data_obat = mysqli_fetch_array($sql_obat)){
                                                echo $data_obat['nama_obat']."<br>";
                                            }
                                            ?>
                                    </td>
                                    <td bgcolor="#ffffff" style="color: #1e2425"><?=tgl_indo($data['tgl_periksa'])?></td>
                                    <td bgcolor="#ffffff" class ="text-center">
                                        <a href="delete ?id=<?=$data['id_rekammedis']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs " style="background-color: #ff0000; color: white;"><i style="font-size: 20px;" class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                    <?php
                                    }
                                    ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once('../_footer.php'); ?>