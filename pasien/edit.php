<?php
include_once('../_header.php');

?>

    <div class="box">
        <div class="container">
            <div id="loginbox" style="font-size: 14px" class="mainbox col-lg-12">
                <div class="panel panel-light">
                    <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="panel-body">
                            <div align="center" style="margin-top: 20px;">
                                <div style="color: #292826;font-weight:bold"><h2>Edit Data Pasien</h2></div>
                                    <br/>
                                    <div class="col-lg-12">
                                        <div >
                                            <?php
                                            $id = $_GET['id'];
                                            $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien = '$id'") or die (mysqli_error($con));
                                            $data = mysqli_fetch_array($sql_pasien);
                                            ?>
                                            <form action="proses " method="post">
                                                <div class="form-group" style="margin-top:15px;" >
                                                    <label for="identitas" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Nomor Indentitas :</label>
                                                    <input type="hidden" name="id" value="<?=$data['id_pasien']?>">
                                                    <input type="number" name="identitas" id="identitas" class="form-control" value="<?=$data['nama_identitas']?>" placeholder="xxxx-xxxx-xxxx-xxxx" required autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nama" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Nama Pasien :</label>
                                                    <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nama_pasien']?>" placeholder="masukan nama pasien" required autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jenis" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Jenis Pasien : &nbsp;</label><br><br>
                                                    <input type="radio" name="jenis" id="jenis" value="Pribadi" required <?=$data['jenis_pasien'] =="Pribadi" ? "checked" : null ?>> Pribadi
                                                    <input type="radio" name="jenis" value="Allianz" required <?=$data['jenis_pasien'] =="Allianz" ? "checked" : null ?>> Allianz
                                                    <input type="radio" name="jenis" value="Prudential" required <?=$data['jenis_pasien'] =="Prudential" ? "checked" : null ?>> Prudential
                                                    <input type="radio" name="jenis" value="Axa" required <?=$data['jenis_pasien'] =="Axa" ? "checked" : null ?>> Axa
                                                    <input type="radio" name="jenis" value="Cigna" required <?=$data['jenis_pasien'] =="Cigna" ? "checked" : null ?>> Cigna
                                                    <input type="radio" name="jenis" value="Manulife" required <?=$data['jenis_pasien'] =="Manulife" ? "checked" : null ?>> Manulife
                                                    <input type="radio" name="jenis" value="BPJS" required <?=$data['jenis_pasien'] =="BPJS" ? "checked" : null ?>> BPJS
                                                    <br/>
                                                </div>

                                                <div class="form-group">
                                                    <label for="bb" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Berat Badan :</label>
                                                    <input type="text" name="bb" id="bb" class="form-control" value="<?=$data['berat_badan']?>" placeholder=".. kg" required autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <label for="tb" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Tinggi Badan :</label>
                                                    <input type="text" name="tb" id="tb" class="form-control" value="<?=$data['tinggi_badan']?>" placeholder=".. cm" required autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <label for="usia" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Usia :</label>
                                                    <input type="text" name="usia" id="usia" class="form-control" value="<?=$data['usia']?>" placeholder=".. usia" required autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jk" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Jenis Kelamin : &nbsp;</label><br/><br/>
                                                    <input type="radio" name="jk" id="jk" value="Pria" required <?=$data['jenis_kelamin'] =="Pria" ? "checked" : null ?>> Pria
                                                    <input type="radio" name="jk" value="Wanita" required <?=$data['jenis_kelamin'] =="Wanita" ? "checked" : null ?>> Wanita
                                                </div>

                                                <div class="form-group">
                                                    <label for="no_tekp" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">No. Telepon :</label>
                                                    <input type="number" name="no_telp" id="no_telp" class="form-control" value="<?=$data['no_telp']?>" placeholder="08xx-xxxx-xxxx" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Email :</label>
                                                    <input type="text" name="email" id="email" class="form-control" value="<?=$data['email']?>" placeholder="........@mail.com" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamat" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">Alamat :</label>
                                                      <textarea name="alamat" id="ket" class="form-control" placeholder="masukan alamat pasien" required><?=$data['alamat']?></textarea>
                                                </div>

                                                <br/>

                                                <div class="form-group" align="center">
                                                    <a href="data " class="btn btn-light" style="background-color : #ebebd3;color : #1e2425;font-weight:bold">&nbsp;Batal&nbsp;&nbsp;</a>
                                                    <input type="submit" name="edit" value="Simpan" class="btn btn-light" style="background-color : #f4d35e;color : #1e2425;font-weight:bold">
                                                </div>
                                            </form>
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