<?php include_once('../_header.php');?>

    <div class="box">
        <h2><div align="center" style="color:#1e2425;font-weight:bold">Tambah Data Poliklinik</div></h2><br/><br/>
        <h4>
            <div class="pull-right">
                <a href="data " class="btn btn-default btn-xs" style="background-color: #f4d35e; color: #1e2425;font-weight:bold;margin:2px"><i class="glyphicon glyphicon-th-list" style="font-weight:bold"> Lihat </i></a>
                <a href="generate " class="btn btn-default btn-xs " style="background-color: #0fa3b1; color: #efeeee;font-weight:bold;margin:2px"><i class="glyphicon glyphicon-plus" style="font-weight:bold"></i> Tambah Lagi</a>
            </div>
        </h4>
        <br/><br/>
        <div class="pull-left" style="color: #1e2425;font-weight:bold"><h3>&nbsp;&nbsp;&nbsp;&nbsp;Tabel Data Baru</h3></div>
        <br/><br/><br/><br/>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form action="proses " method="post">
                        <input type="hidden" name="total" value="<?=@$_POST['count_add']?>">
                        <table class="table table-custom w-auto bordered-table table-hover table-fixed stacktable small-only" width="100%">
                        <tr bgcolor="#f9d342" style="background-color: #f4d35e; color: #1e2425;">
                                <th>No.</th>
                                <th>Nama klinik</th>
                                <th>Alamat</th>
                                <th>Jam Operasi</th>
                            </tr>
                            <?php
                            for ($i=1; $i<=$_POST['count_add']; $i++) { ?>
                            <tr>
                                <td bgcolor="#0fa3b1" style="color: #efeeee"><?=$i?></td>
                                <td bgcolor="#ffffff" style="color: white">
                                    <input type="text" name="nama-<?=$i?>" class="form-control" required>
                                </td>
                                <td bgcolor="#ffffff" style="color: white">
                                    <input type="text" name="alamat-<?=$i?>" class="form-control" required>
                                </td>
                                <td bgcolor="#ffffff" style="color: white">
                                    <input type="text" name="jam-<?=$i?>" class="form-control" required>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <div class="form-group" align="center">
                            <a href="data " class="btn btn-light" style="background-color: #f4d35e; color: #1e2425;font-weight:bold"> Batalkan</a>
                            <input type="submit" name="add" value="Simpan" class="btn btn-light" style="background-color: #0fa3b1; color: #efeeee;font-weight:bold">
                        </div>
                </form>
            </div>
        </div>
    </div>    
<?php include_once('../_footer.php');?>