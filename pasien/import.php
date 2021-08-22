<?php
include_once('../_header.php');
?>
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            Tambah Pasien
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
                            <h6>Import Data Pasien</h6>
                        </div>
                        <div class="card-body">
                            <form action="proses " method="post" enctype="multipart/form-data">
                                <h6>
                                    <a href="../_file/contoh_import_data_pasien.xlsx" style="color: #0fa3b1;font-weight:normal">Download Contoh File</a>
                                </h6>
                                <br>
                                <h6>File Excel : </h6>
                                <div class="input-group">
                                    <input type="file" name="file" id="file" class="form-control" required>
                                </div>
                                <div class="row clearfix">
                                    <div class="center">
                                        <a href="<?=base_url('pasien/')?>" class="btn btn-danger mt-2"><i class="icon-arrow_back mr-2"></i>Kembali</a>
                                        <button name="import" class="btn btn-success mt-2"><i class="icon-arrow_upward mr-2"></i>Import</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--
    <div class="box">
        <div class="container">
        
            <div id="loginbox" style="margin-top:75px;" class="mainbox col-lg-12">
                <div class="panel panel-light">
                    <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="panel-body">
                            <div align="center" style="margin-top: 20px;">
                                <div style="color: #1e2425;font-weight:bold;margin:2px">
                                    <h2>Import Data Pasien Baru</h2>
                                </div>
                                <br><br><br>
                                <form action="proses " method="post" enctype="multipart/form-data">
                                    <div class="pull-right">
                                        <label>
                                            <a href="../_file/contoh_import_data_pasien.xlsx" style="color: #0fa3b1;font-weight:normal">Download Contoh File</a>
                                        </label>
                                    </div>
                                    <br/><br/>
                                    <label for="file" class="pull-left" style="color: #1e2425;font-weight:bold;margin:2px">
                                        <h3>File Excel : </h3>
                                    </label>
                                    <br>
                                    <div class="input-group">
                                        <input type="file" name="file" id="file" class="form-control" required>
                                    </div>
                                    <br><br>
                                    <div class="box" align="center">
                                        <a href="data " class="btn btn-light" style="font-size:10px;background-color : #ebebd3;color : #1e2425;font-weight:bold;margin:5px">&nbsp;Batal&nbsp;&nbsp;</a>
                                        <input type="submit" name="import" value="Import" class="btn btn-light" style="background-color : #f4d35e;color : #1e2425;font-weight:bold;margin:5px">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

<?php include_once('../_footer.php');?>