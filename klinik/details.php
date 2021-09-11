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
                            echo 'Klinik ID :  ';
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
                    <div class="col-md-8 center">
                        <div class="card shadow-sm">
                            <div class="card-body b-b">
                                <h4>Detail Klinik</h4>
                                <form class="form-material">
                                    <!-- Input -->
                                    <div class="body">
                                        <?php
                                        $sql_klinik = mysqli_query($con, "SELECT * FROM tb_klinik WHERE id_klinik = '$id'") or die (mysqli_error($con));
                                        $data = mysqli_fetch_array($sql_klinik);
                                        ?>
                                        <h6>Nama klinik</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['nama_klinik']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Alamat</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <?=$data['alamat_klinik']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jadwal</h6>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Senin</span> : <?=$data['senin']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Selasa</span> : <?=$data['selasa']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Rabu</span> : <?=$data['rabu']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Kamis</span> : <?=$data['kamis']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Jumat</span> : <?=$data['jumat']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Sabtu</span> : <?=$data['sabtu']?>
                                                        <br>
                                                        <span class="text-blue font-weight-bold">Minggu</span> : <?=$data['minggu']?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row clearfix">
                                            <div class="center">
                                                <a href="edit.php?id=<?=$data['id_klinik']?>" class="btn btn-success mt-2"><i class="icon-pencil mr-2"></i>Ubah</a>
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