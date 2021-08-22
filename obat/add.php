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
                                <div style="color: #292826;font-weight:bold"><h2>Data Obat Baru</h2></div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <form action="proses " method="post">
                                                <div class="form-group" style="margin-top:15px;" >
                                                    <input type="text" name="kode" class="form-control" placeholder="Kode Obat" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="nama" class="form-control" placeholder="Nama Obat" required autofocus>
                                                </div>

                                                <div class="form-group">
                                                    <textarea name="ket" id="ket" class="form-control" placeholder="Keterangan Obat" required></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" name="dosis" class="form-control" placeholder="Dosis Obat" required>
                                                </div>

                                                <div class="form-group">
                                                     <input type="text" name="jenis" class="form-control" placeholder="Jenis Obat" required>
                                                </div>

                                                <div class="form-group">
                                                     <input type="text" name="stok" class="form-control" placeholder="Stok Obat" required>
                                                </div>

                                                <div class="form-group">
                                                    <input type="date" name="expired" value="<?=date('Y-m-d')?>" class="form-control" required>
                                                </div>

                                                <br/>
                                                <div class="box" align="center">
                                                    <a href="data " class="btn btn-light" style="background-color : #ebebd3;color : #1e2425;font-weight:bold;">&nbsp;Batal&nbsp;&nbsp;</a>
                                                    <input type="submit" name="add" value="Simpan" class="btn btn-light" style="background-color : #f95738;color : #efeeee;font-weight:bold;">
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