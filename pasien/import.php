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
                                        <a href="<?=base_url('pasien/')?>" class="btn btn-danger mt-2">Kembali</a>
                                        <input type="submit" value="import" name="import" class="btn btn-success mt-2">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once('../_footer.php');?>