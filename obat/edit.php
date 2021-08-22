<?php
include_once('../_header.php');

?>

    <div class="box">
        <div class="container">
            <div id="loginbox" style="margin-top:55px;font-size: 14px" class="mainbox col-lg-12">
                <div class="panel panel-light">
                <div class="panel-heading" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="panel-body">
                <div align="center" style="margin-top: 20px;">
                <div><h2>Edit Data Obat</h2><br/></div>
                    <br/>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <?php
                            $id = $_GET['id'];
                            $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat WHERE id_obat = '$id'") or die (mysqli_error($con));
                            $data = mysqli_fetch_array($sql_obat);
                            ?>
                            <form action="proses " method="post">
                                <div class="form-group">
                                    <input name="kode" id="kode" value="<?=$data['kode_obat']?>" class="form-control" placeholder="Kode Obat" required>
                                </div>
                                <div class="form-group" style="margin-top:15px;" >
                                    <input type="hidden" name="id" value="<?=$data['id_obat']?>">
                                    <input type="text" name="nama" id="nama"  value="<?=$data['nama_obat']?>"  class="form-control" placeholder="Nama Obat" required autofocus>
                                </div>

                                <div class="form-group">
                                    <textarea name="ket" id="ket" class="form-control" placeholder="Keterangan Obat" required><?=$data['ket_obat']?></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="dosis" id="dosis"  value="<?=$data['dosis']?>" class="form-control" placeholder="Dosis Obat" required>
                                </div>

                                <div class="form-group">
                                     <input type="text" name="jenis" id="jenis"  value="<?=$data['jenis_obat']?>" class="form-control" placeholder="Jenis Obat" required>
                                </div>

                                <div class="form-group">
                                     <input type="text" name="stok" id="stok"  value="<?=$data['stock_obat']?>" class="form-control" placeholder="Stok Obat" required>
                                </div>

                                <div class="form-group">
                                     <input type="date" name="expired" id="expired"  value="<?=$data['tgl_kadaluarsa']?>" class="form-control" required>
                                </div>

                                <div class="box" align="center">
                                    <a href="data " class="btn btn-light" style="background-color : #ebebd3;color : #1e2425;font-weight:bold;">&nbsp;Batal&nbsp;&nbsp;</a>
                                    <input type="submit" name="edit" value="Simpan" class="btn btn-light" style="background-color : #f95738;color : #efeeee;font-weight:bold;">
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