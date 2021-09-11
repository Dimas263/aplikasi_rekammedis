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
                            <?php
                            $id = $_GET['id'];
                            $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat WHERE id_obat = '$id'") or die (mysqli_error($con));
                            $data = mysqli_fetch_array($sql_obat);
                            ?>
                            <form class="form-material" action="proses" method="post">
                                <!-- Input -->
                                <div class="body">
                                    <h6>Nama obat</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="hidden" name="id" value="<?=$data['id_obat']?>">
                                                    <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="<?=$data['nama_obat']?>" autofocus required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Keterangan</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?=$data['keterangan']?>" required/>
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
                                                    <input type="number" name="dosis" id="dosis" class="form-control" value="dosis" required />
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
                                                <input type="number" name="stok" id="stok" class="form-control" value="<?=$data['stok']?>" required />
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Kadaluarsa</h6>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="kadaluarsa" id="kadaluarsa" class="form-control" value="<?=$data['kadaluarsa']?>" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row clearfix">
                                    <div class="center">
                                        <input type="submit" name="edit" value="Simpan" class="btn btn-primary mt-2">
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
