<?php
include_once('../_header.php');

?>

    <div class="box">
        <div class="container">
            <div id="loginbox" style="font-size: 14px" class="mainbox col-lg-12">
                <div class="panel panel-light">
                    <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="panel-body" id="myfrm">
                            <div align="center" style="margin-top: 20px;">
                                <div style="color: #292826;font-weight:bold"><b style="color: #083d77"><h2>Informasi Detail Klinik</h2></b></div>
                                <br>
                                <br>
                                <div class="col-lg-12">
                                    <div >
                                        <?php
                                        $id = $_GET['id'];
                                        $sql_klinik = mysqli_query($con, "SELECT * FROM tb_klinik WHERE id_klinik = '$id'") or die (mysqli_error($con));
                                        $data = mysqli_fetch_array($sql_klinik);
                                        ?>
                                        <form class="box" align="center">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Nama klinik</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['nama_klinik']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Alamat</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['alamat_klinik']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Jadwal</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['jam_operasi']?></h3></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="form-group" align="center">
                                                <a href="data " class="btn btn-light" style="background-color : #ebebd3;color : #1e2425;font-weight:bold">&nbsp;Kembali&nbsp;&nbsp;</a>
                                                <a onclick="myPrint('myfrm')" class="btn btn-light" style="background-color : #f4d35e;color : #1e2425;font-weight:bold">Print</a>
                                            </div>
                                        </form>
                                        <script>
                                            function myPrint(myfrm) {
                                                var printdata = document.getElementById(myfrm);
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
        </div>
    </div>

<?php include_once('../_footer.php');?>