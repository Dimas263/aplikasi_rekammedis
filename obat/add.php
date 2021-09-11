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
                        Tambah Obat Baru
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-8 center">
                    <div class="card shadow-sm">
                        <div class="card-body b-b">
                            <h4>Detail Obat</h4>
                            <form class="form-material" action="proses" method="post">
                                <!-- Input -->
                                <div class="body">
                                    <h6>Nama obat</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="nama_obat" id="nama_obat" class="form-control" placeholder="Nama obat" autofocus required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Keterangan</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Obat</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="jenis" id="jenis" class="form-control">
                                                        <option>injeksi</option>
                                                        <option>kapsul</option>
                                                        <option>sirup</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" name="dosis" id="dosis" class="form-control" placeholder="dosis" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select name="satuan" id="satuan" class="form-control">
                                                        <option>g</option>
                                                        <option>kg</option>
                                                        <option>ml</option>
                                                        <option>l</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Stok</h6>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="stok" id="stok" class="form-control" placeholder="stok" required />
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Kadaluarsa</h6>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" name="kadaluarsa" id="kadaluarsa" class="form-control" placeholder="<?=date('Y-m-d')?>" required />
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once('../_footer.php');?>
