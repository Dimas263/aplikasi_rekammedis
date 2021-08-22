<?php include_once('../_header.php');?>

    <h1><div align="center" style="color: #1e2425;font-weight:bold;text-shadow: 2px 2px 15px #ffffff;opacity:0.8">Hasil Data Pencarian</div></h1><br/><br/>

    <div class="container-fluid">
        <br><br>
        <div class="row">
            <?php
            $id = $_POST["search"];
            $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien where nama_pasien like '%$id%'") or die (mysqli_error($con));
            while ($data = mysqli_fetch_array($sql_pasien)){
            ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header card-header-light card-header-icon">
                            <div class="card-icon" style="background-color: #1d91e8">
                                <i><img src="https://img.icons8.com/doodle/48/000000/fever.png"/></i>
                            </div>
                            <p class="card-category"><a href="<?=base_url('dokter/data ')?>"><h3><b><?=$data['nama_pasien'] ?></b></h3></a></p>
                            <h3 class="card-title">
                                <b>Pasien</b>
                            </h3>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <?php
            }
            ?>

            <?php
            $sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter where nama_dokter like '%$id%'") or die (mysqli_error($con));
            while ($data = mysqli_fetch_array($sql_dokter)){
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header card-header-light card-header-icon">
                            <div class="card-icon" style="background-color: #1d91e8">
                                <i><img src="https://img.icons8.com/doodle/48/000000/doctor-male.png"/></i>
                            </div>
                            <p class="card-category"><a href="<?=base_url('dokter/data ')?>"><h3><b><?=$data['nama_dokter'] ?></b></h3></a></p>
                            <h3 class="card-title">
                                <b>Dokter</b>
                            </h3>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <?php
            }
            ?>

            <?php
            $sql_suster = mysqli_query($con, "SELECT * FROM tb_suster where nama_suster like '%$id%'") or die (mysqli_error($con));
            while ($data = mysqli_fetch_array($sql_suster)){
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header card-header-light card-header-icon">
                            <div class="card-icon" style="background-color:#1d91e8">
                                <i><img src="https://img.icons8.com/plasticine/48/000000/medical-doctor-female.png"/></i>
                            </div>
                            <p class="card-category"><a href="<?=base_url('dokter/data ')?>"><h3><b><?=$data['nama_suster'] ?></b></h3></a></p>
                            <h3 class="card-title">
                                <b>Suster</b>
                            </h3>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <?php
            }
            ?>

            <?php
            $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat where nama_obat like '%$id%'") or die (mysqli_error($con));
            while ($data = mysqli_fetch_array($sql_obat)){
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header card-header-light card-header-icon">
                            <div class="card-icon" style="background-color: #1d91e8">
                                <i><img src="https://img.icons8.com/cute-clipart/48/000000/medical-thermometer.png"/></i>
                            </div>
                            <p class="card-category"><a href="<?=base_url('dokter/data ')?>"><h3><b><?=$data['nama_obat'] ?></b></h3></a></p>
                            <h3 class="card-title">
                                <b>Obat</b>
                            </h3>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <?php
            }
            ?>

            <?php
            $sql_klinik = mysqli_query($con, "SELECT * FROM tb_klinik where nama_klinik like '%$id%'") or die (mysqli_error($con));
            while ($data = mysqli_fetch_array($sql_klinik)){
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header card-header-light card-header-icon">
                            <div class="card-icon" style="background-color:#1d91e8">
                                <i><img src="https://img.icons8.com/office/48/000000/ambulance.png"/></i>
                            </div>
                            <p class="card-category"><a href="<?=base_url('dokter/data ')?>"><h3><b><?=$data['nama_klinik'] ?></b></h3></a></p>
                            <h3 class="card-title">
                                <b>Klinik</b>
                            </h3>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <?php
            }
            ?>

            <?php
            $query = "SELECT * FROM tb_rekammedis 
                    INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien 
                    INNER JOIN tb_dokter ON tb_rekammedis.id_dokter= tb_dokter.id_dokter
                    INNER JOIN tb_klinik ON tb_rekammedis.id_klinik= tb_klinik.id_klinik
                    WHERE nama_pasien like '%$id%'";
            $sql_rekammedis = mysqli_query($con, $query) or die (mysqli_error($con));
            while ($data = mysqli_fetch_array($sql_rekammedis)){
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header card-header-light card-header-icon">
                            <div class="card-icon" style="background-color:#1d91e8">
                                <i><img src="https://img.icons8.com/color/48/000000/health-book.png"/></i>
                            </div>
                            <p class="card-category"><a href="<?=base_url('dokter/data ')?>"><h3><b><?=$data['nama_pasien'] ?></b></h3></a></p>
                            <h3 class="card-title">
                                <b>Rekam Medis</b>
                            </h3>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

<?php include_once('../_footer.php');?>