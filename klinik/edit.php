<?php
$chk = $_POST['checked'];
if(!isset($chk)){
    echo "<script>alert('Tidak ada data yang dipilih!'); window.location='data ';</script>";
} else {
    include_once('../_header.php');?>

    <div class="box">
        <span  style="color: #292826;"><center><h1>Edit Data Poliklinik</h1></center></span>
        <br/>
        <h4>
            <small class="pull-left" style="color: #292826;font-weight:normal">Tabel Edit Data Poliklinik</small>
            <br/>
        </h4>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <form action="proses " method="post">
                        <input type="hidden" name="total" value="<?=@$_POST['count_add']?>">
                        <table class="table table-custom w-auto bordered-table table-hover table-fixed stacktable small-only" width="100%">
                        <tr bgcolor="#f9d342" style="background-color: #f4d35e; color: #1e2425;">
                            <th>No.</th>
                            <th>Nama Poliklinik</th>
                            <th>Alamat</th>
                            <th>Jam Operasi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach($chk as $id){
                            $sql_klinik = mysqli_query($con, "SELECT * FROM tb_klinik WHERE id_klinik = '$id'") or die (mysqli_error()); 
                            while($data = mysqli_fetch_array($sql_klinik)){ ?>  
                            <tr>
                                <td bgcolor="#0fa3b1" style="color: #efeeee"><?=$no++?></td>
                                <td bgcolor="#ffffff">
                                    <input type="hidden" name="id[]" value="<?=$data['id_klinik']?>"> 
                                    <input type="text" name="nama[]" value="<?=$data['nama_klinik']?>" class="form-control" required> 
                                    
                                </td>
                                <td bgcolor="#ffffff">
                                    <input type="text" name="alamat[]" value="<?=$data['alamat_klinik']?>" class="form-control" required>
                                </td>
                                <td bgcolor="#ffffff">
                                    <input type="text" name="jam[]" value="<?=$data['jam_operasi']?>" class="form-control" required>
                                </td>
                            </tr>
                            <?php
                            }
                        }
                        ?>
                    </table>
                    <div class="form-group" align="center">
                        <a href="data " class="btn btn-light" style="background-color: #f4d35e; color: #1e2425;font-weight:bold"> Batalkan</a>
                        <input type="submit" name="edit" value="Simpan" class="btn btn-light" style="background-color: #0fa3b1; color: #efeeee;font-weight:bold">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include_once('../_footer.php');
} ?>