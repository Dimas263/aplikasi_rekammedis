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
                        Pasien
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
                        <h6>Data Pasien</h6>
                    </div>
                    <div class="card-body">
                        <table class="table cell-vertical-align-middle  table-responsive mb-4">
                            <tbody>
                            <tr class="no-b">
                                <td>
                                    <a href="import.php" type="button" class="btn btn-success btn-sm">Import Data</a>
                                </td>
                                <td>
                                    <a href="add.php" type="button" class="btn btn-success btn-sm">Tambah Data</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table id="datatables-button" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Lahir</th>
                                <th>Alamat</th>
                                <th>Lainnya</th>
                                <th><i class="icon icon-settings2"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien") or die (mysqli_error($con));
                            while($data = mysqli_fetch_array($sql_pasien)) { ?>
                            <tr>
                                    <td><?=$no++ ?>.</td>
                                    <td><?=$data['nama_pasien']?></td>
                                    <td><?=$data['tempat_lahir']?>, <?=tgl_indo($data['tgl_lahir'])?></td>
                                    <td><?=$data['alamat']?></td>
                                    <td><a href="details.php?id=<?=$data['id_pasien']?>" class="btn btn-link btn-sm">Lihat Detail</a></td>
                                    <td>
                                        <a href="delete.php?id=<?=$data['id_pasien']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm text-white"><i class="icon icon-trash"></i></a>
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

