<?php
include_once('../_header.php');

?>

    <div class="box">
        <div class="container">
            <div id="loginbox" style="font-size: 14px" class="mainbox col-lg-12">
                <div class="panel panel-light">
                    <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="panel-body" id="myfrm">
                            <div align="center" style="margin-top: 20px;">
                                <div style="color: #292826;font-weight:bold"><b style="color: #083d77"><h2>Informasi Detail<br>Rekammedis Pasien<br>Dimas Hospital</h2></b></div>
                                <br>
                                <br>
                                <div class="col-lg-12">
                                    <div >
                                        <?php
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM tb_rekammedis 
                                                            INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien 
                                                            INNER JOIN tb_dokter ON tb_rekammedis.id_dokter= tb_dokter.id_dokter
                                                            INNER JOIN tb_klinik ON tb_rekammedis.id_klinik= tb_klinik.id_klinik";
                                        $sql_rekammedis = mysqli_query($con, $query) or die (mysqli_error($con));
                                        $data = mysqli_fetch_array($sql_rekammedis)
                                        ?>
                                        <form class="box" align="center">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Nama Pasien</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['nama_pasien']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Keluhan</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['keluhan']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Nama Dokter</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['nama_dokter']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Nama Suster</h3></td>
                                                    <td><?php
                                                    $sql_suster = mysqli_query($con, "SELECT * FROM tb_rekammedis_suster JOIN tb_suster ON tb_rekammedis_suster.id_suster = tb_suster.id_perawat WHERE id_rekammedis = '$data[id_rekammedis]'") or die (mysqli_error($con));
                                                    while ($data_suster = mysqli_fetch_array($sql_suster)){ ?>
                                                        <h3 class="text-left" style="padding-left: 50px">: <?php echo $data_suster['nama_suster']."<br>";?></h3>
                                                        <?php
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Diagnosa</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['diagnosa']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Nama Klinik</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['nama_klinik']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Nama Obat</h3></td>
                                                    <td><?php
                                                        $sql_obat = mysqli_query($con, "SELECT * FROM tb_rekammedis_obat JOIN tb_obat ON tb_rekammedis_obat.id_obat = tb_obat.id_obat WHERE id_rekammedis = '$data[id_rekammedis]'") or die (mysqli_error($con));
                                                        while ($data_obat = mysqli_fetch_array($sql_obat)){
                                                            ?>
                                                            <h3 class="text-left" style="padding-left: 50px">: <?php echo $data_obat['nama_obat']."<br>"?></h3>
                                                            <?php
                                                        }
                                                        ?></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Tanggal Periksa</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['tgl_periksa']?></h3></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-group" align="center">
                                                <a href="data " class="btn btn-light" style="background-color : #ebebd3;color : #1e2425;font-weight:bold">&nbsp;Kembali&nbsp;&nbsp;</a>
                                                <a onclick="myPrint('myfrm')" class="btn btn-light" style="background-color : #f4d35e;color : #1e2425;font-weight:bold">Print</a>
                                            </div>
                                        </form>
                                        <script>
                                            function myPrint(myfrm) {
                                                var printdata = document.getElementById(myfrm);
                                                newwin = window.open("");
                                                newwin.document.write(printdata.outerHTML);
                                                newwin.print();
                                                newwin.close();
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once('../_footer.php');?>