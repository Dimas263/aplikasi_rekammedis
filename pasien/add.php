<?php
include_once('../_header.php');
?>

    <div class="box">
        <div class="container">
            <div id="loginbox" style="font-size: 14px" class="mainbox col-lg-12">
                <div class="panel panel-light">
                    <div class="panel-heading">
                        <div class="panel-body">
                            <div align="center" style="margin-top: 20px;">
                                <div style="color: #292826;font-weight:bold"><h1>Data Pasien Baru</h1></div>
                                <br/>
                                <div class="col-lg-12 col-md-12">
                                    <div >
                                        <form action="proses " method="post">
                                            <div class="form-group" style="margin-top:15px;" >
                                                <label for="identitas" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Nomor Indentitas :</h3></label>
                                                <br><br>
                                                <input type="number" name="identitas" id="identitas" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx" required autofocus>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="nama" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Nama Pasien :</h3></label>
                                                <br><br>
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="masukan nama pasien" required autofocus>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div><label for="jk" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Jenis Kelamin : &nbsp;&nbsp;&nbsp;&nbsp;</h3></label></div>
                                                <br/><br/><br/><br/>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jk" id="jk" value="Pria" required> Pria
                                                </div>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jk" value="Wanita" required> Wanita
                                                </div>
                                                <br/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="bb" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Berat Badan :</h3></label>
                                                <br><br>
                                                <input type="text" name="bb" id="bb" class="form-control" placeholder="... kg" required autofocus>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="tb" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Tinggi Badan :</h3></label>
                                                <br><br>
                                                <input type="text" name="tb" id="tb" class="form-control" placeholder="... cm" required autofocus>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="usia" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Usia :</h3></label>
                                                <br><br>
                                                <input type="text" name="usia" id="usia" class="form-control" placeholder="... tahun" required autofocus>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div><label for="jenis" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Jenis Pasien : &nbsp;&nbsp;&nbsp;&nbsp;</h3></label></div>
                                                <br/><br/><br/><br/>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jenis" id="jenis" value="Pribadi" required> Pribadi
                                                </div><br/><br/>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jenis" value="Allianz" required> Allianz
                                                </div><br/><br/>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jenis" value="Prudential" required> Prudential
                                                </div><br/><br/>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jenis" value="Axa" required> Axa
                                                </div><br/><br/>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jenis" value="Cigna" required> Cigna
                                                </div><br/><br/>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jenis" value="Manulife" required> Manulife
                                                </div><br/><br/>
                                                <div class="radio-inline pull-left">
                                                    <input type="radio" name="jenis" value="BPJS" required> BPJS
                                                </div>
                                                <br/>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="no_telp" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>No. Telepon :</h3></label>
                                                <br><br>
                                                <input type="number" name="no_telp" id="no_telp" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="email" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Email :</h3></label>
                                                <br><br>
                                                <input type="text" name="email" id="email" class="form-control" placeholder="......@mail.com" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="alamat" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px"><h3>Alamat :</h3></label><br/>
                                                <br><br>
                                                <textarea name="alamat" id="alamat" class="form-control" placeholder="masukan alamat pasien" required></textarea>
                                            </div>
                                            
                                            <br/>
                                            
                                            <div class="box" align="center">
                                                <a href="data " class="btn btn-light" style="background-color : #ebebd3;color : #1e2425;font-weight:bold;font-size: 14px;margin-right: 10px">&nbsp;Batal&nbsp;&nbsp;</a>
                                                <input type="submit" name="add" value="Simpan" class="btn btn-light" style="background-color : #f4d35e;color : #1e2425;font-weight:bold;font-size: 14px;>
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