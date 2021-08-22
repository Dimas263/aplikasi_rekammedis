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
                            <?php
                                $id = $_GET['id'];
                                echo 'Pasien ID :  ';
                                echo $id;
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="container-fluid my-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body b-b">
                                <h4>Detail Pasien</h4>
                                <form class="form-material">
                                    <!-- Input -->
                                    <div class="body">
                                        <?php
                                        $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien = '$id'") or die (mysqli_error($con));
                                        $data = mysqli_fetch_array($sql_pasien);
                                        ?>
                                        <h6>Nama Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_pasien']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Marga</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['marga']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Alamat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['alamat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Desa</h6> <?=$data['kelurahan']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Kecamatan</h6> <?=$data['kecamatan']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Kota</h6> <?=$data['kota']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Provinsi</h6> <?=$data['provinsi']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <h6>Kode Pos</h6> <?=$data['kode_pos']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Email</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        @<?=$data['email']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Telepon Rumah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['no_telprumah']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Ponsel</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['no_hp']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Lahir</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['tempat_lahir']?>, <?=tgl_indo($data['tgl_lahir'])?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jenis Kelamin</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['jenis_kelamin']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Agama</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['agama']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Golongan Darah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['golongan_darah']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Status Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['status_pasien']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jenis Pasien</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['jenis_pasien']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h4>Kontak Darurat</h4>
                                        <h6>Nama</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Alamat Darurat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['alamat_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Hubungan</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['hubungan_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Telepon Rumah</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['no_telprumah_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>No.Ponsel</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['no_hp_darurat']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Sumber Informasi</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['sumber_informasi']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row clearfix">
                                            <div class="center">
                                                <a href="<?=base_url('pasien/')?>" class="btn btn-danger mt-2"><i class="icon-arrow_back mr-2"></i>Kembali</a>
                                                <a href="" class="btn btn-success mt-2"><i class="icon-pencil mr-2"></i>Ubah</a>
                                                <a onclick="myPrint('myprint')" class="btn btn-primary mt-2"><i class="icon-print mr-2"></i>Print</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    function myPrint(myprint) {
                                        var printdata = document.getElementById(myprint);
                                        newwin = window.open("");
                                        newwin.document.write(printdata.outerHTML);
                                        newwin.print();
                                        newwin.close();
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once('../_footer.php');?>