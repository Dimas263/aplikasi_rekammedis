<?php
include_once('../_header.php');
?>

    <div class="box">
        <div class="container">
            <div id="loginbox" style="margin-top:65px;font-size: 14px" class="mainbox col-lg-12">
                <div class="panel panel-light">
                    <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="panel-body">
                            <div align="center" style="margin-top: 20px;">
                                <div style="color: #292826;font-weight:bold"><h2>Rekam Medis Baru</h2></div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <form action="proses " method="post">
                                                <div class="form-group" style="margin-top:15px;" >
                                                    <label for="pasien" class="pull-left" style="color: #292826;font-weight:bold">Pasien :</label>
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

                                                <div class="form-group" style="margin-top:15px;">
                                                    <label for="keluhan" class="pull-left" style="color: #292826;font-weight:bold">Keluhan :</label>
                                                    <textarea name="keluhan" id="keluhan" class="form-control" required autofocus></textarea>
                                                </div>

                                                <div class="form-group" style="margin-top:15px;" >
                                                    <label for="dokter" class="pull-left" style="color: #292826;font-weight:bold">Dokter :</label>
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

                                                <div class="form-group" style="margin-top:15px;" >
                                                    <label for="suster" class="pull-left" style="color: #292826;font-weight:bold">suster :</label>
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

                                                <div class="form-group" style="margin-top:15px;">
                                                    <label for="diagnosa" class="pull-left" style="color: #292826;font-weight:bold">Diagnosa :</label><br/><br/>
                                                    <textarea name="diagnosa" id="diagnosa" class="form-control" required autofocus></textarea>
                                                </div>

                                                <div class="form-group" style="margin-top:15px;" >
                                                    <label for="klinik" class="pull-left" style="color: #292826;font-weight:bold">Poliklinik :</label>
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

                                                <div class="form-group" style="margin-top:15px;" >
                                                    <label for="obat" class="pull-left" style="color: #292826;font-weight:bold">Obat :</label>
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

                                                <div class="form-group">
                                                    <label for="tgl" class="pull-left" style="color: #292826;font-weight:bold">Tanggal Periksa :</label>
                                                    <input type="date" name="tgl" id="tgl" value="<?=date('Y-m-d')?>" class="form-control" required autofocus>
                                                </div>

                                                <br/>

                                                <div class="form-group" align="center">
                                                    <a href="data " class="btn btn-light" style="background-color : #ebebd3;color : #1e2425;font-weight:bold;">&nbsp;Batal&nbsp;&nbsp;</a>
                                                    <input type="submit" name="add" value="Simpan" class="btn btn-light" style="background-color : #083d77;color : #efeeee;font-weight:bold;">
                                                </div>
                                            </form>
                                            <script src="<?=base_url()?>/vendor/ckeditor/ckeditor/ckeditor.js" type="text/javascript"></script>
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
        </div>
    </div>
    
<?php include_once('../_footer.php');?>