<?php include_once('../_header.php');?>

    <div id="loginbox" style="font-size: 14px;" class="mainbox col-lg-12">
        <div class="panel panel-light">
            <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="panel-body">
                    <h1>
                        <div align="center" style="color: #1e2425;font-weight:bold">Rekam Medis</div>
                    </h1>
                    <br/><br/>
                    <p class="pull-left" style="color: #1e2425;"><h2>Hi, <b style="color: #ff0000"><?=$_SESSION['user'];?></b> <br/>Kesehatan Pasien Prioritas Dimas Hospital<br/>Silahkan cari data anda di tabel atau di menu pencarian </h2></p><br/>
                    <div pull-left ><a href="#menu-toggle" class="btn btn-light" style="background-color: #083d77; color: #efeeee;font-weight:bold" id="menu-toggle"><i class="glyphicon glyphicon-align-justify"></i> Menu</a></div>
                    <div class="box">

                        <h4>
                            <div class="pull-right">
                                <a href="" class="btn btn-light btn-xs" style="background-color: #ebebd3; color: #1e2425;font-weight:bold"><i class="glyphicon glyphicon-refresh" style="font-weight:bold"></i></a>
                                <a href="add " class="btn btn-light btn-xs" style="background-color: #083d77; color: #efeeee;font-weight:bold"><i class="glyphicon glyphicon-plus" style="font-weight:bold"></i> Tambah Data</a>
                            </div>
                        </h4>
                        <br><br>
                        <h3><a style="color: #ff0000;font-weight:normal">Cetak Tabel Rekam Medis</a></h3>
                        <form method="post" name="proses">
                            <div class="table-responsive" style="border:none">
                                <table class="table table-striped w-auto bordered-table table-hover table-fixed stacktable small-only" id="rekammedis">
                                    <thead bgcolor="#ebebd3" style="color: #1e2425;font-weight:bold">
                                    <tr>
                                        <th><h3><b>No.</b></h3></th>
                                        <th><h3><b>Nama Pasien</b></h3></th>
                                        <th><h3><b>Keluhan</b></h3></th>
                                        <th><h3><b>Nama Dokter</b></h3></th>
                                        <th><h3><b>Nama Suster</b></h3></th>
                                        <th><h3><b>Diagnosa</b></h3></th>
                                        <th><h3><b>Poliklinik</b></h3></th>
                                        <th><h3><b>Data Obat</b></h3></th>
                                        <th><h3><b>Tanggal Periksa</b></h3></th>
                                        <th><h3><b><i class="glyphicon glyphicon-cog"></i></b></h3></th>
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
                                            <td bgcolor="#083d77" style="color: #efeeee"><h3><?=$no++ ?>.</h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425"><a href="details.php?id=<?=$data['id_rekammedis']?>" class="btn-link text-dark"><h3><?=$data['nama_pasien']?></h3></a></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=$data['keluhan']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=$data['nama_dokter']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425">
                                                <h3><?php
                                                    $sql_suster = mysqli_query($con, "SELECT * FROM tb_rekammedis_suster JOIN tb_suster ON tb_rekammedis_suster.id_suster = tb_suster.id_perawat WHERE id_rekammedis = '$data[id_rekammedis]'") or die (mysqli_error($con));
                                                    while ($data_suster = mysqli_fetch_array($sql_suster)){
                                                        echo $data_suster['nama_suster']."<br>";
                                                    }
                                                    ?></h3>
                                            </td>
                                            <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=$data['diagnosa']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=$data['nama_klinik']?></h3></td>
                                            <td bgcolor="#ffffff" style="color: #1e2425">
                                                <h3><?php
                                                    $sql_obat = mysqli_query($con, "SELECT * FROM tb_rekammedis_obat JOIN tb_obat ON tb_rekammedis_obat.id_obat = tb_obat.id_obat WHERE id_rekammedis = '$data[id_rekammedis]'") or die (mysqli_error($con));
                                                    while ($data_obat = mysqli_fetch_array($sql_obat)){
                                                        echo $data_obat['nama_obat']."<br>";
                                                    }
                                                    ?></h3>
                                            </td>
                                            <td bgcolor="#ffffff" style="color: #1e2425"><h3><?=tgl_indo($data['tgl_periksa'])?></h3></td>
                                            <td bgcolor="#ffffff" class ="text-center">
                                                <a href="details ?id=<?=$data['id_rekammedis']?>" class="btn btn-light btn-xs" style="background-color: dodgerblue; color: white;"><i class="glyphicon glyphicon-eye-open" style="font-size: 20px;"></i></a>
                                                <a href="delete ?id=<?=$data['id_rekammedis']?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs " style="background-color: #ff0000; color: white;"><i style="font-size: 20px;" class="glyphicon glyphicon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#rekammedis').DataTable({
                    "paging": false,
                    "searching": true,
                    "lengthChange": false,
                    "ordering": false,
                    "info": false,
                    dom: 'Bfrtip',
                    buttons: [
                        { extend: 'excel', className: 'btn btn-success' },
                        { extend: 'pdfHtml5', orientation : 'potrait', pageSize: 'LEGAL', title : 'Rekam Medis Dimas Hospital', className: 'btn btn-danger' },
                        { extend: 'print', title : 'Rekam Medis Dimas Hospital', className: 'btn btn-info' },
                    ]
            });
        });
    </script>
    
<?php include_once('../_footer.php');?>