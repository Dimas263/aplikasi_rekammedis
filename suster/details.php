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
                                <div style="color: #292826;font-weight:bold"><b style="color: #083d77"><h2>Informasi Detail Suster</h2></b></div>
                                <br>
                                <br>
                                <div class="col-lg-12">
                                    <div >
                                        <?php
                                        $id = $_GET['id'];
                                        $sql_perawat = mysqli_query($con, "SELECT * FROM tb_suster WHERE id_perawat = '$id'") or die (mysqli_error($con));
                                        $data = mysqli_fetch_array($sql_perawat);
                                        ?>
                                        <form class="box" align="center">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Nama Suster</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['nama_suster']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Alamat</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['alamat']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">No.Telepon</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['no_telp']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Email</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['email']?></h3></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="text-left" style="padding-left: 65px">Jadwal Jaga</h3></td>
                                                    <td><h3 class="text-left" style="padding-left: 50px">: <?=$data['jadwal_jaga']?></h3></td>
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