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
                            Tambah Data Rekammedis Baru
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="container-fluid my-3">
                <div class="row">
                    <div class="col-md-10 center">
                        <div class="card shadow-sm">
                            <div class="card-body b-b">
                                <h4>Detail Rekammedis</h4>
                                <form class="form-material" action="proses" method="post">
                                    <!-- Input -->
                                    <div class="body">
                                        <h6>Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="pasien" id="pasien" class="form-control" required autofocus>
                                                            <option value=""> Pilih pasien</option>
                                                            <?php
                                                            $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien") or die (mysqli_error($con));
                                                            while($data_pasien = mysqli_fetch_array($sql_pasien)){
                                                                echo '<option value="'.$data_pasien['id_pasien'].'">'.$data_pasien['nama_pasien'].'</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Keluhan</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="keluhan" id="keluhan" class="form-control" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Dokter</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="dokter" id="dokter" class="form-control" required autofocus>
                                                            <option value=""> Pilih dokter</option>
                                                            <?php
                                                            $sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter") or die (mysqli_error($con));
                                                            while($data_dokter = mysqli_fetch_array($sql_dokter)){
                                                                echo '<option value="'.$data_dokter['id_dokter'].'">'.$data_dokter['nama_dokter'].'</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Suster</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select multiple name="suster[]" id="suster" class="form-control" size="7" required autofocus>
                                                            <option value=""> Pilih suster</option>
                                                            <?php
                                                            $sql_suster = mysqli_query($con, "SELECT * FROM tb_suster") or die (mysqli_error($con));
                                                            while($data_suster = mysqli_fetch_array($sql_suster)){
                                                                echo '<option value="'.$data_suster['id_perawat'].'">'.$data_suster['nama_suster'].'</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Diagnosa</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input name="diagnosa" id="diagnosa" class="form-control" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Poliklinik</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select name="klinik" id="klinik" class="form-control" required autofocus>
                                                            <option value=""> Pilih Poliklinik</option>
                                                            <?php
                                                            $sql_klinik = mysqli_query($con, "SELECT * FROM tb_klinik") or die (mysqli_error($con));
                                                            while($data_klinik = mysqli_fetch_array($sql_klinik)){
                                                                echo '<option value="'.$data_klinik['id_klinik'].'">'.$data_klinik['nama_klinik'].'</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Obat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <select multiple name="obat[]" id="obat" class="form-control" size="7" required autofocus>
                                                            <option value=""> Pilih Obat</option>
                                                            <?php
                                                            $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat") or die (mysqli_error($con));
                                                            while($data_obat = mysqli_fetch_array($sql_obat)){
                                                                echo '<option value="'.$data_obat['id_obat'].'">'.$data_obat['nama_obat'].'</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Tanggal Periksa</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="date" name="tgl" id="tgl" value="<?=date('Y-m-d')?>" class="form-control" required autofocus>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row clearfix">
                                            <div class="center">
                                                <input type="submit" name="add" value="Simpan" class="btn btn-primary mt-2">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </form>
                            <script src="<?=base_url('_assets/vendor/ckeditor/ckeditor/ckeditor.js')?>" type="text/javascript"></script>
                            <script>
                                CKEDITOR.replace('keluhan', {
                                        fullPage: true,
                                        allowedContent: true,
                                        autoGrow_onStartup: true,
                                        uiColor : 'lightskyblue',
                                        removePlugins : 'elementspath'
                                    }
                                );
                                CKEDITOR.replace('diagnosa', {
                                        fullPage: true,
                                        allowedContent: true,
                                        autoGrow_onStartup: true,
                                        uiColor : 'lightskyblue',
                                        removePlugins : 'elementspath'
                                    }
                                );
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php include_once('../_footer.php');?>