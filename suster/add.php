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
                                <div style="color: #292826;font-weight:bold">
                                    <h2>Data suster Baru</h2>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <form action="proses " method="post">
                                            <div class="form-group" style="margin-top:15px;" >
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama suster" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <textarea name="alamat" id="ket" class="form-control" placeholder="Alamat" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="number" name="no_telp" id="no_telp" class="form-control" placeholder="No.Telepon" required>
                                            </div>

                                            <div class="form-group">
                                                <textarea name="email" id="email" class="form-control" placeholder="email" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                 <textarea type="text" name="jadwal" id="jadwal" class="form-control" placeholder="Jadwal Jaga" required></textarea>
                                            </div>

                                            <br/>
                                            <div class="form-group" align="center">
                                                <a href="data " class="btn btn-light" style="background-color : #ebebd3;color : #1e2425;font-weight:bold;">&nbsp;Batal&nbsp;&nbsp;</a>
                                                <input type="submit" name="add" value="Simpan" class="btn btn-light" style="background-color : #f4d35e;color : #1e2425;font-weight:bold;">
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